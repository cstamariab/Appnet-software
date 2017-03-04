<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }

  public function get_administradores()
  {
    $query = $this->db->query("SELECT id,usuario,estado,email FROM tbl_admin");
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return FAlSE;
    }
  }
  public function get_admin($id)
  {
    $query = $this->db->query("SELECT id,usuario,email,estado FROM tbl_admin WHERE id = $id");
    if ($query->num_rows > 0) {
      return $query->row();
    }else{
      return FAlSE;
    }
  }
  public function verifica_admin($usuario)
  {
    $sql = "SELECT id FROM tbl_admin WHERE usuario = '$usuario'";

    $query = $this->db->query($sql);
    if ($query->num_rows > 0) {
      return TRUE;
    }else{
      return FAlSE;
    }
  }
  public function insert_admin($usuario,$pass,$email,$estado)
  {
    $sql ="INSERT INTO tbl_admin(usuario,pass,email,estado) VALUES('$usuario','$pass','$email','$estado')";
    $this->db->simple_query($sql);
    return TRUE;
  }
  public function update_estado_admin($id,$estado)
  {
    $this->db->simple_query("UPDATE tbl_admin SET estado = $estado WHERE id = $id");
    return TRUE;
  }
  public function update_password($id,$password)
  {
    $this->db->simple_query("UPDATE tbl_admin SET pass = '$password' WHERE id = $id");
    return TRUE;
  }
  public function update_admin($id,$usuario,$email)
  {
    $sql = "UPDATE tbl_admin SET usuario = '$usuario', email = '$email' WHERE id = $id";

    $this->db->simple_query($sql);
    return TRUE;
  }
}
