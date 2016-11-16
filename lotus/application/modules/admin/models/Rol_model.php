<?php

class Rol_model extends CI_Model {

    public function __construct() {

        $this->load->database();
        //$this->load->model('academico/academico_model');
    }

     public function cabecera($idusuario) {
       $this->db->trans_start();


        $datos=array();


        $sql = "select u.nombre_completo as NOMBRE, m.nombre_modulo as MODULO,
                        m.icono as ICONO";
        $sql .= "  from  admin_usuario u JOIN admin_rol r ON u.fk_id_rol = r.id_rol ";
		    $sql .= " inner join admin_rol_modulo_funcionalidad rmf ";
		    $sql .= " inner join admin_modulo m ON m.ID_MODULO = rmf.fk_id_modulo where u.ID_USUARIO=".$idusuario;

        $query = $this->db->query($sql);
        $ds = $query->result_array();

        $datos['modulos']=$ds;  


        $sql = "select distinct u.NOMBRE_COMPLETO as NOMBRE, 
						m.nombre_modulo AS MODULO,
						f.FUNCIONALIDAD as FUNCIONALIDAD,
                        f.RUTA as RUTA";
        $sql .= "  from  admin_usuario u inner join admin_rol p ON p.id_rol = u.fk_id_rol ";
		    $sql .= " inner join admin_rol_modulo_funcionalidad rmf ON p.id_rol = rmf.fk_id_rol ";
		    $sql .= " inner join admin_modulo m ON m.ID_MODULO = rmf.fk_id_modulo";
        $sql .= " inner join admin_funcionalidad f ON f.ID_FUNCIONALIDAD = rmf.fk_id_funcionalidad where u.ID_USUARIO=".$idusuario;
		 
        $query = $this->db->query($sql);
        $ds = $query->result_array();

        $datos['funcionalidad']=$ds;  


        $this->db->trans_complete();
        return $datos;


    }
  }