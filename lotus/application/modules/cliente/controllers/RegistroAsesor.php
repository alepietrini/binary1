<?php
class RegistroAsesor extends MX_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        //$this->load->model('academico_model');
        $this->load->model('cliente/registroAsesor_model');
    }

    //Metodo para retornas las provincias
    public function obtenerProvincias(){
        
        $datos = $this->load->registroAsesor_model->obtenerProvincias();
        echo json_encode($datos);

    }

    //Metodo para retornar las ciudades
    public function obtenerCiudades(){

        $idProvincia= trim($this->input->post('idProvincia'));
        $datos = $this->load->registroAsesor_model->obtenerCiudades($idProvincia);
        echo json_encode($datos);

    }

    //Metodo para obtener los roles
    public function obtenerRoles(){
        
        $datos = $this->load->registroAsesor_model->obtenerRoles();
        echo json_encode($datos);

    }

    //Metodo para validar la cedula
    public function validarNroDocumentoAsesor(){

        $nroDocumentoAsesor= trim($this->input->post('nroDocumentoAsesor'));
        $datos = $this->load->registroAsesor_model->validarNroDocumentoAsesor($nroDocumentoAsesor);
        echo json_encode($datos);
    }

    //Crear Asesor de Belleza
    public function registroAsesoresDeBelleza(){
        
        //Obtencion de parametros para enviarlos al modelo
        $pNombreAsesor=trim($this->input->post('pNombreAsesor'));
        $sNombreAsesor=trim($this->input->post('sNombreAsesor'));
        $apellidoPAsesor=trim($this->input->post('apellidoPAsesor'));
        $apellidoMAsesor=trim($this->input->post('apellidoMAsesor'));
        $fechaNacimientoAsesor=trim($this->input->post('fechaNacimientoAsesor'));
        $tipoDocumento=trim($this->input->post('tipoDocumento'));
        $nroDocumentoAsesor=trim($this->input->post('nroDocumentoAsesor'));
        $tlfFijoAsesor=trim($this->input->post('tlfFijoAsesor'));
        $tlfCelularAsesor=trim($this->input->post('tlfCelularAsesor'));
        $idProvincia=trim($this->input->post('idProvincia'));
        $idCiudad=trim($this->input->post('idCiudad'));
        $direccion=trim($this->input->post('direccion'));
        $email=trim($this->input->post('email'));
        $referido=trim($this->input->post('referido'));
        $lider=trim($this->input->post('lider'));
        $tipoContacto=trim($this->input->post('tipoContacto'));
        $fechaActual=trim($this->input->post('fechaActual'));

        $datos = $this->registroAsesor_model->registroAsesoresDeBelleza($pNombreAsesor,$sNombreAsesor,$apellidoPAsesor,$apellidoMAsesor,$fechaNacimientoAsesor,$tipoDocumento,$nroDocumentoAsesor,$tlfFijoAsesor,$tlfCelularAsesor,$idProvincia,$idCiudad, $direccion, $email,$referido,$lider, $tipoContacto, $fechaActual);
        echo json_encode($datos);
    }

    //Metodo para validar el codigo del referido ingresado
    public function validarReferidoIngresado(){
        $codReferido= trim($this->input->post('codReferido'));
        $datos = $this->load->registroAsesor_model->validarReferidoIngresado($codReferido);
        echo json_encode($datos);
    }

    //Metodo para validar el codigo del Lider ingresado
    public function validarLiderIngresado(){
        $codLider= trim($this->input->post('codLider'));
        $datos = $this->load->registroAsesor_model->validarLiderIngresado($codLider);
        echo json_encode($datos);
    }

    //Buscar Id de Cliente para inyectar en la tabla de referidos
    public function buscarIdCliente(){
        $nroDocumentoAsesor= trim($this->input->post('nroDocumentoAsesor'));
        $datos = $this->load->registroAsesor_model->buscarIdCliente($nroDocumentoAsesor);
        echo json_encode($datos);
    }

    //Metodo para ingresar en la tabla tab_referido
    public function ingresarTablaReferidos(){
        $nroDocumentoAsesor = trim($this->input->post('nroDocumentoAsesor'));
        $fechaActual = trim($this->input->post('fechaActual'));
        $codReferido = trim($this->input->post('codReferido'));
        $datos = $this->load->registroAsesor_model->ingresarTablaReferidos($nroDocumentoAsesor,$fechaActual,$codReferido);
        echo json_encode($datos);
    }

    //Metodo para buscar quien es el super lider
    public function buscarIdSuperLider(){
        $mcaSuperLider = trim($this->input->post('mcaSuperLider'));
        $datos = $this->load->registroAsesor_model->buscarIdSuperLider($mcaSuperLider);
        echo json_encode($datos);
    }

    //Metodo para la creacion de credenciales para los vendedores
    public function crearCredencialesVendedor(){
        $nroDocumentoAsesor = trim($this->input->post('nroDocumentoAsesor'));
        $idCliente = trim($this->input->post('idCliente'));
        $nombreCompleto = trim($this->input->post('nombreCompleto'));
        $datos = $this->load->registroAsesor_model->crearCredencialesVendedor($nroDocumentoAsesor,$idCliente, 
            $nombreCompleto);
        echo json_encode($datos);
    }

    //Metodo para cargar los tipos de documentos
    public function obtenerTipoDocumentos(){
        $datos = $this->load->registroAsesor_model->obtenerTipoDocumentos();
        echo json_encode($datos);
    }

    //Metodo para buscar el Id del tipo de documento
    public function buscarIdTipoDocumento(){
        $tipoDocumento = trim($this->input->post('tipoDocumento'));
        $datos = $this->load->registroAsesor_model->buscarIdTipoDocumento($tipoDocumento);
        echo json_encode($datos);
    }
}
?>