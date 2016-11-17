<?php


class Registrolider_model extends CI_Model
{
    public function __construct() 
    {
        $this->load->database();
    }

    //Metodo para cargar los tipos de documentos
    public function obtenerTipoDocumentosLider(){
        
        $this->db->select('*');
        $this->db->from('tab_tipo_documento');

        $query = $this->db->get();
        $ds = $query->result_array();

        return $ds;
    }

    //Metodo para obtener las provincias
    public function obtenerProvinciasLider(){

        $this->db->select('*');
        $this->db->from('tab_provincia');

        $query = $this->db->get();
        $ds = $query->result_array();

        return $ds;
    }

    //Metodo para obtener ciudad
    public function obtenerCiudadesLider($idProvincia){


        $this->db->select('	p.id_provincia as id_provincia, c.id_canton as id_canton, c.nombre_canton as nombre_canton');
        $this->db->from('tab_provincia p, tab_canton c');
        $this->db->where('p.id_provincia='.$idProvincia);
        $this->db->where('c.fk_id_provincia_canton = p.id_provincia');

        $query = $this->db->get();
        $ds = $query->result_array();

        return $ds;
    }

    //Metodo para validar si la cedula existe
    public function validarCedulaLider($cedulaLider){

        $this->db->select('*');
        $this->db->from('tab_cliente');
        $this->db->where('nro_documento='.$cedulaLider);

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
    public function validarReferidoIngresadoLider($codReferido){

        $this->db->select('*');
        $this->db->from('tab_cliente');
        $this->db->where('id_cliente='.$codReferido);

        $query = $this->db->get();
        $ds = $query->result_array();

        if (count($ds)>0){
            return true;
        }
        else{
            return false;
        }
    }

    //Metodo para validar el codigo del Lider ingresado
    public function validarCodigoLiderIngresado($codLider){

        $this->db->select('*');
        $this->db->from('tab_cliente');
        $this->db->where('id_cliente='.$codLider);

        $query = $this->db->get();
        $ds = $query->result_array();

        if (count($ds)>0){
            return true;
        }
        else{
            return false;
        }
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

    //Metodo para crear asesores de belleza
    public function registroLider($pNombreLider,$sNombreLider,$apellidoPLider,$apellidoMLider,
    	$fechaNacimientoLider,$tipoDocumentoLider,$cedulaLider,$tlfFijoLider,$tlfCelularLider,$idProvincia,$idCiudad,$direccion,$email,$referido,$lider,$fechaActual){

        $rolLider = 3;
        //Validacion Telefono fijo
        if ($tlfFijoLider == ''){
            $tlfFijoLider = NULL;
        }
        //Validacion Codigo del Referido
        if ($referido == ''){
            $referido = NULL;
        }
        


    	$this->db->insert('tab_cliente', array('primer_nombre' => $pNombreLider,
    		'segundo_nombre' => $sNombreLider,
    		'apellido_paterno' => $apellidoPLider,
    		'apellido_materno' => $apellidoMLider,
    		'fecha_nacimiento' => $fechaNacimientoLider,
    		'nro_documento' => $cedulaLider,
    		'tlf_fijo' => $tlfFijoLider,
    		'tlf_celular' => $tlfCelularLider,
    		'direccion' => $direccion,
    		'email' => $email,
    		'tipoContacto' => NULL,
    		'fecha_ingreso' => $fechaActual,
    		'fk_id_provincia' => $idProvincia,
    		'fk_id_canton' => $idCiudad,
    		'fk_id_vendedor' => $referido,
    		'fk_id_rol' => $rolLider,
    		'fk_id_lider' => $lider,
            'fk_id_tipoDocumento' => $tipoDocumentoLider,
            'fecha_ingreso' => $fechaActual,
            'super_lider' => 'N'
    		));

    	return true;
    }

    //Metodo para ingresar en la tabla tab_referido
    public function ingresarTablaReferidos($cedulaLider,$fechaActual,$codReferido){

        $this->db->insert('tab_referido', array('nro_documento' => $cedulaLider,
            'fecha_ingreso' => $fechaActual,
            'fk_id_cliente' => $codReferido));

        return true;
    }
}
?>