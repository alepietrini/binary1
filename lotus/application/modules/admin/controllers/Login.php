<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends MX_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('usuarios_model');
    }

    function check_usuario_clave() 
    {   
        $usuario = $this->input->post('usuario');
        $clave = $this->input->post('clave');
        $result = $this->usuarios_model->login($usuario, $clave);
       
        if ($result) 
        {
            $sess_array = array();
            foreach ($result as $row) 
            {
                $sess_array = array(
                                    'ID_USUARIO' => $row->ID_USUARIO,
                                    'USUARIO' => $row->USUARIO,
                                    );
                $this->session->set_userdata('loggeado', $sess_array);
            }
            return true;
        } 
        else 
        {
            $this->session->set_userdata('loggeado', $sess_array=array('USUARIO' =>"binary"));
            return false;
        }
    }


    function index() 
    {        
        //This method will have the credentials validation
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('usuario', 'usuario', 'trim|required');
        $this->form_validation->set_rules('clave', 'clave', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) 
        {
            //Field validation failed.  User redirected to login page
            $this->load->view('login');
        } 
        else 
        {
            if($this->check_usuario_clave())
            {
                redirect('index/index', 'refresh');
            }
            else
            {
                 $this->load->view('login',array('error'=>'Usuario o clave inválido.'));
            }
        }
    }
    
     function logout()
        {
          $this->session->unset_userdata('loggeado');
          session_destroy();
          redirect('admin/login', 'refresh');
        }

        function getPeriodo()
    {
        $this->db->select('VALOR');
        $this->db->from('acad_parametro');
        $this->db->where('ID_PARAMETRO', 8);
        $query = $this->db->get();
        $ds = $query->row_array();
        $valor = $ds['VALOR'];
        $this->db->select('FECHA_INICIO,FECHA_FIN');
        $this->db->from('acad_periodo_academico');
        $this->db->where('ID_PERIODO_ACADEMICO', intval($valor));
        $query = $this->db->get();
        $anios = $query->row_array();
        $valor =date('Y\-m\-d',strtotime($anios['FECHA_INICIO']))." <strong> Hasta: </strong>".date('Y\-m\-d',strtotime($anios['FECHA_FIN']));
        return $valor;
    }
    

    
}
