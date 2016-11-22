<?php


class RegistroAsesor_model extends CI_Model
{
    public function __construct() 
    {
        $this->load->database();
    }

    //Metodo para obtener las provincias
    public function obtenerProvincias(){

        $this->db->select('*');
        $this->db->from('tab_provincia');

        $query = $this->db->get();
        $ds = $query->result_array();

        return $ds;
    }

    //Metodo para obtener ciudad
    public function obtenerCiudades($idProvincia){


        $this->db->select('	p.id_provincia as id_provincia, c.id_canton as id_canton, c.nombre_canton as nombre_canton');
        $this->db->from('tab_provincia p, tab_canton c');
        $this->db->where('p.id_provincia='.$idProvincia);
        $this->db->where('c.fk_id_provincia_canton = p.id_provincia');

        $query = $this->db->get();
        $ds = $query->result_array();

        return $ds;
    }

    //Metodo para obtener los roles
    public function obtenerRoles(){
    	$this->db->select('*');
        $this->db->from('admin_rol');

        $query = $this->db->get();
        $ds = $query->result_array();

        return $ds;
    }

    //Metodo para crear asesores de belleza
    public function registroAsesoresDeBelleza($pNombreAsesor,$sNombreAsesor,$apellidoPAsesor,$apellidoMAsesor,
    	$fechaNacimientoAsesor,$tipoDocumento,$nroDocumentoAsesor,$tlfFijoAsesor,$tlfCelularAsesor,$idProvincia,$idCiudad,$direccion,$email,$referido,$lider, $tipoContacto, $fechaActual){

        $rolVendedor = 2;
        //Validacion Telefono fijo
        if ($tlfFijoAsesor == ''){
            $tlfFijoAsesor = NULL;
        }
        //Validacion Codigo del Referido
        if ($referido == ''){
            $referido = NULL;
        }
        


    	$this->db->insert('tab_cliente', array('primer_nombre' => $pNombreAsesor,
    		'segundo_nombre' => $sNombreAsesor,
    		'apellido_paterno' => $apellidoPAsesor,
    		'apellido_materno' => $apellidoMAsesor,
    		'fecha_nacimiento' => $fechaNacimientoAsesor,
    		'nro_documento' => $nroDocumentoAsesor,
    		'tlf_fijo' => $tlfFijoAsesor,
    		'tlf_celular' => $tlfCelularAsesor,
    		'direccion' => $direccion,
    		'email' => $email,
    		'tipoContacto' => $tipoContacto,
    		'fecha_ingreso' => $fechaActual,
    		'fk_id_provincia' => $idProvincia,
    		'fk_id_canton' => $idCiudad,
    		'fk_id_referido' => $referido,
    		'fk_id_rol' => $rolVendedor,
    		'fk_id_lider' => $lider,
            'fk_id_tipoDocumento' => $tipoDocumento,
            'fecha_ingreso' => $fechaActual,
            'super_lider' => 'N'
    		));

    	return true;
    }

    //Metodo para validar si la cedula existe
    public function validarnroDocumentoAsesor($nroDocumentoAsesor){

        $this->db->select('*');
        $this->db->from('tab_cliente');
        $this->db->where('nro_documento='.$nroDocumentoAsesor);

        $query = $this->db->get();
        $ds = $query->result_array();

        if (count($ds)>0){
            return true;
        }
        else{
            return false;
        }
    }

    //Metodo para validar el codigo del referido
    public function validarReferidoIngresado($codReferido){

        $this->db->select('id_cliente');
        $this->db->from('tab_cliente');
        $this->db->where('nro_documento='.$codReferido);

        $query = $this->db->get();
        $ds = $query->row_array();

        if (count($ds)>0){

            $id_referido = $ds['id_cliente'];
        }
        else{

            $id_referido = null;
        }

        return $id_referido;
    }

    //Metodo para validar el codigo del Lider ingresado
    public function validarLiderIngresado($codLider){

        $this->db->select('id_cliente');
        $this->db->from('tab_cliente');
        $this->db->where('nro_documento='.$codLider);
        $this->db->where('fk_id_rol',3);

        $query = $this->db->get();
        $ds = $query->row_array();

        if (count($ds)>0){

            $id_lider = $ds['id_cliente'];
        }
        else{

            $id_lider = null;
        }

        return $id_lider;
    }

    //Buscar Id de Cliente para inyectar en la tabla de referidos
    public function buscarIdCliente($nroDocumentoAsesor){

        $this->db->select('id_cliente');
        $this->db->from('tab_cliente');
        $this->db->where('nro_documento='.$nroDocumentoAsesor);

        $query = $this->db->get();
        $ds = $query->row_array();

        if (count($ds)>0){

            $id_cliente = $ds['id_cliente'];
        }
        else{

            $id_cliente = null;
        }

        return $id_cliente;

    }

    //Metodo para ingresar en la tabla tab_referido
    public function ingresarTablaReferidos($nroDocumentoAsesor,$fechaActual,$codReferido){

        $this->db->insert('tab_referido', array('nro_documento' => $nroDocumentoAsesor,
            'fecha_ingreso' => $fechaActual,
            'fk_id_cliente' => $codReferido));

        return true;
    }

    //Metodo para buscar quien es el super lider
    public function buscarIdSuperLider($mcaSuperLider){
        $this->db->select('id_cliente');
        $this->db->from('tab_cliente');
        $this->db->where('super_lider', $mcaSuperLider);

        $query = $this->db->get();
        $ds = $query->row_array();

        if (count($ds)>0){

            $id_cliente = $ds['id_cliente'];
        }
        else{

            $id_cliente = null;
        }

        return $id_cliente;
    }

    //Metodo para la creacion de credenciales para los vendedores
    public function crearCredencialesVendedor($nroDocumentoAsesor,$idCliente,$nombreCompleto){

        $this->db->insert('admin_usuario', array('usuario' => $nroDocumentoAsesor,
            'clave' => md5($nroDocumentoAsesor),
            'nombre_completo' => $nombreCompleto,
            'nro_documento' => $nroDocumentoAsesor,
            'estado_habilitacion' => 1, //Los vendedores siempre inician habilitados (por eso valor 1)
            'fk_id_cliente' => $idCliente,
            'fk_id_rol' => 2)); //Rol 2: Vendedor

        return true;
    }

    //Metodo para cargar los tipos de documentos
    public function obtenerTipoDocumentos(){
        
        $this->db->select('*');
        $this->db->from('tab_tipo_documento');

        $query = $this->db->get();
        $ds = $query->result_array();

        return $ds;
    }

    //Metodo para buscar el Id del tipo de documento
    public function buscarIdTipoDocumento($tipoDocumento){

        $this->db->select('id_tipo_documento');
        $this->db->from('tab_tipo_documento');
        $this->db->where('tipo_documento', $tipoDocumento);

        $query = $this->db->get();
        $ds = $query->row_array();

        if (count($ds)>0){

            $id_tipo_documento = $ds['id_tipo_documento'];
        }
        else{

            $id_tipo_documento = null;
        }

        return $id_tipo_documento;
    }

}

?>