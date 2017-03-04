<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }

  public function login_validation($usuario,$pass)
  {

    $query = $this->db->query("SELECT id,usuario FROM tbl_admin WHERE usuario = '$usuario' and pass = '$pass' and estado = 1 ");
    if ($query->num_rows > 0) {
      return $query->row();
    }else{
      $error = $this->db->error();
      return $error;
    }
  }
  public function login_validation_user($usuario,$pass)
  {

    $query = $this->db->query("SELECT id,username,fecha_creacion,img_user,color_panel FROM tbl_usuarios WHERE username = '$usuario' and password = '$pass' and estado = 1 ");
    if ($query->num_rows > 0) {
      return $query->row();
    }else{
      $error = $this->db->error();
      return $error;
    }
  }
}
