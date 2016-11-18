<?php



class Index extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('admin/rol_model');
 // $this->load->model('academico/academico_model');

    }

    public function index() {



        if($this->session->userdata('loggeado'))
        {

            $idusuario=$this->session->userdata('loggeado')['ID_USUARIO'];
            $usuario=$this->session->userdata('loggeado')['USUARIO'];

            $datos1=$this->rol_model->cabecera($idusuario);
            $this->load->view('templates/header', $datos1);
            $this->load->view('admin/ingresoAlSistema');
            $this->load->view('templates/footer');

        }
        else
        {
          redirect('admin/login', 'refresh');
        }
    }

}

