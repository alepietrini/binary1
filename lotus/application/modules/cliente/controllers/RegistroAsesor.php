<?php
class RegistroAsesor extends MX_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        //$this->load->model('academico_model');
        $this->load->model('cliente/registroAsesor_model');
    }

    //Metodo parea redireccionar al formulario de registro
  /* public function registroAsesoraBelleza(){

        $datos1=$this->rol_model->cabecera();
        $this->load->view('templates/header', $datos1);
    	$this->load->view('formularioRegistroCliente');
        $this->load->view('templates/footer');
                
                
    }*/

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
    function validarCedulaAsesor(){

        $cedulaAsesor= trim($this->input->post('cedulaAsesor'));
        $datos = $this->load->registroAsesor_model->validarCedulaAsesor($cedulaAsesor);
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
        $cedulaAsesor=trim($this->input->post('cedulaAsesor'));
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

        $datos = $this->registroAsesor_model->registroAsesoresBelleza($pNombreAsesor,$sNombreAsesor,$apellidoPAsesor,$apellidoMAsesor,$fechaNacimientoAsesor,$cedulaAsesor,$tlfFijoAsesor,$tlfCelularAsesor,$idProvincia,$idCiudad, $direccion, $email,$referido,$lider, $tipoContacto, $fechaActual);
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
        $cedulaAsesor= trim($this->input->post('cedulaAsesor'));
        $datos = $this->load->registroAsesor_model->buscarIdCliente($cedulaAsesor);
        echo json_encode($datos);
    }

    //Metodo para ingresar en la tabla tab_referido
    public function ingresarTablaReferidos(){
        $cedulaAsesor = trim($this->input->post('cedulaAsesor'));
        $fechaActual = trim($this->input->post('fechaActual'));
        $idCliente = trim($this->input->post('idCliente'));
        $datos = $this->load->registroAsesor_model->ingresarTablaReferidos($cedulaAsesor,$fechaActual,$idCliente);
        echo json_encode($datos);
    }

    //Metodo para buscar quien es el super lider
    function buscarIdSuperLider(){
        $mcaSuperLider = trim($this->input->post('mcaSuperLider'));
        $datos = $this->load->registroAsesor_model->buscarIdSuperLider($mcaSuperLider);
        echo json_encode($datos);
    }
}
?>