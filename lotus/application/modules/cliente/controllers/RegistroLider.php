<?php
class RegistroLider extends MX_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        //$this->load->model('academico_model');
        $this->load->model('admin/rol_model');
        $this->load->model('cliente/registrolider_model');

    }

    //Metodo para mostrar la pantalla de registro de Lider
    public function mostrarFormularioRegistroLider(){

		$idusuario=$this->session->userdata('loggeado')['ID_USUARIO'];
        $usuario=$this->session->userdata('loggeado')['USUARIO'];

        $datos1=$this->rol_model->cabecera($idusuario);
    	$this->load->view('templates/header', $datos1);
        $this->load->view('formularioRegistroLider');
        $this->load->view('templates/footer');

    }

    //Metodo para cargar los tipos de documentos
    public function obtenerTipoDocumentosLider(){
        $datos = $this->load->registrolider_model->obtenerTipoDocumentosLider();
        echo json_encode($datos);
    }

    //Metodo para retornas las provincias
    public function obtenerProvinciasLider(){
        
        $datos = $this->load->registrolider_model->obtenerProvinciasLider();
        echo json_encode($datos);

    }

    //Metodo para retornar las ciudades
    public function obtenerCiudadesLider(){

        $idProvincia= trim($this->input->post('idProvincia'));
        $datos = $this->load->registrolider_model->obtenerCiudadesLider($idProvincia);
        echo json_encode($datos);

    }

    //Metodo para validar la cedula
    public function validarCedulaLider(){
        $cedulaLider= trim($this->input->post('cedulaLider'));
        $datos = $this->load->registrolider_model->validarCedulaLider($cedulaLider);
        echo json_encode($datos);
    }

    //Metodo para validar el codigo del referido ingresado
    public function validarReferidoIngresadoLider(){
        $codReferidoLider= trim($this->input->post('codReferidoLider'));
        $datos = $this->load->registrolider_model->validarReferidoIngresadoLider($codReferidoLider);
        echo json_encode($datos);
    }

    //Metodo para validar el codigo del Lider ingresado
    public function validarCodigoLiderIngresado(){
        $codLider= trim($this->input->post('codLider'));
        $datos = $this->load->registrolider_model->validarCodigoLiderIngresado($codLider);
        echo json_encode($datos);
    }

    //Metodo para buscar quien es el super lider
    public function buscarIdSuperLider(){
        $mcaSuperLider = trim($this->input->post('mcaSuperLider'));
        $datos = $this->load->registrolider_model->buscarIdSuperLider($mcaSuperLider);
        echo json_encode($datos);
    }

    //Crear Asesor de Belleza
    public function registroLider(){
        
        //Obtencion de parametros para enviarlos al modelo
        $pNombreLider=trim($this->input->post('pNombreLider'));
        $sNombreLider=trim($this->input->post('sNombreLider'));
        $apellidoPLider=trim($this->input->post('apellidoPLider'));
        $apellidoMLider=trim($this->input->post('apellidoMLider'));
        $fechaNacimientoLider=trim($this->input->post('fechaNacimientoLider'));
        $tipoDocumentoLider=trim($this->input->post('tipoDocumentoLider'));
        $cedulaLider=trim($this->input->post('cedulaLider'));
        $tlfFijoLider=trim($this->input->post('tlfFijoLider'));
        $tlfCelularLider=trim($this->input->post('tlfCelularLider'));
        $idProvincia=trim($this->input->post('idProvincia'));
        $idCiudad=trim($this->input->post('idCiudad'));
        $direccion=trim($this->input->post('direccion'));
        $email=trim($this->input->post('email'));
        $referido=trim($this->input->post('referido'));
        $lider=trim($this->input->post('lider'));
        $fechaActual=trim($this->input->post('fechaActual'));

        $datos = $this->registrolider_model->registroLider($pNombreLider,$sNombreLider,$apellidoPLider,$apellidoMLider,$fechaNacimientoLider,$tipoDocumentoLider,$cedulaLider,$tlfFijoLider,$tlfCelularLider,$idProvincia,$idCiudad,$direccion,$email,$referido,$lider,$fechaActual);
        echo json_encode($datos);
    }

    //Metodo para ingresar en la tabla tab_referido
    public function ingresarTablaReferidos(){
        $cedulaLider = trim($this->input->post('cedulaLider'));
        $fechaActual = trim($this->input->post('fechaActual'));
        $codReferido = trim($this->input->post('codReferido'));
        $datos = $this->load->registrolider_model->ingresarTablaReferidos($cedulaLider,$fechaActual,$codReferido);
        echo json_encode($datos);
    }
}
?>
