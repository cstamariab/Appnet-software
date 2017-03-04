<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }
  public function update_usuario_web($id,$usuario,$email,$filename,$color_panel)
  {
    $sql = "UPDATE tbl_usuarios set username = '$usuario' , email = '$email',img_user = '$filename',color_panel = '$color_panel' WHERE id = $id; ";

    $this->db->simple_query($sql);
    return TRUE;
  }
  public function insert_usuario($usuario,$email,$pass,$estado)
  {
    $sql = "INSERT INTO tbl_usuarios (username,password,email,estado,fecha_creacion)VALUES('$usuario','$pass','$email','$estado',NOW())";

    $this->db->simple_query($sql);
    $sql2 = "SELECT id FROM tbl_usuarios order by id DESC LIMIT 1 ";
    $query = $this->db->query($sql2);
    if ($query->num_rows() > 0) {
      return $query->row()->id;
    }else{
      return false;
    }
  }
  public function update_estado_usuario($id,$estado)
  {
    $sql = "UPDATE tbl_usuarios SET estado = $estado WHERE id = $id";

    $this->db->simple_query($sql);
    return TRUE;
  }
  public function update_password($id,$pass)
  {
    $sql = "UPDATE tbl_usuarios SET password = '$pass' WHERE id = $id";

    $this->db->simple_query($sql);
    return TRUE;
  }
  public function update_usuario($id,$usuario,$email)
  {
    $sql = "UPDATE tbl_usuarios SET username = '$usuario',email = '$email'  WHERE id = $id";

    $this->db->simple_query($sql);
    return TRUE;
  }
  public function verifica_usuario($usuario)
  {
    $sql2 = "SELECT id FROM tbl_usuarios WHERE username = '$usuario' ";

    $query = $this->db->query($sql2);
    if ($query->num_rows() > 0) {
      return TRUE;
    }else{
      return false;
    }
  }
  public function delete_usuario($id)
  {
    $sql2 = "DELETE FROM tbl_usuarios WHERE id =  '$id' ";
    $sql = "DELETE FROM tbl_permisos_usuario WHERE id_usuario =  '$id' ";
    $query = $this->db->query($sql2);
    $query = $this->db->query($sql);
    return TRUE;
  }
  public function get_permisos_usuario($id_usuario)
  {
    $sql2 = "SELECT perm.id,emp.razon_social as empresa,suc.ruta as sucursal  FROM tbl_permisos_usuario perm
    INNER JOIN tbl_empresa emp ON emp.id = perm.id_empresa
    INNER JOIN tbl_sucursal suc ON suc.id = perm.id_sucursal
    WHERE perm.id_usuario = $id_usuario";
    $query = $this->db->query($sql2);
    if ($query->num_rows() > 0) {
      return $query->result();
    }else{
      return false;
    }
  }
  public function verifica_permisos_repetidos($id_usuario,$empresa,$sucursal)
  {
    $sql2 = "SELECT id FROM tbl_permisos_usuario WHERE id_empresa = $empresa and id_sucursal = $sucursal and id_usuario = $id_usuario;";

    $query = $this->db->query($sql2);
    if ($query->num_rows() > 0) {
      return true;
    }else{
      return false;
    }
  }
  public function get_usuarios()
  {
    $sql2 = "SELECT id,username,email,estado,fecha_creacion FROM tbl_usuarios ";
    $query = $this->db->query($sql2);
    if ($query->num_rows() > 0) {
      return $query->result();
    }else{
      return false;
    }
  }
  public function get_usuario($id)
  {
    $sql2 = "SELECT id,username,email,estado,fecha_creacion FROM tbl_usuarios WHERE id = $id ";
    $query = $this->db->query($sql2);
    if ($query->num_rows() > 0) {
      return $query->row();
    }else{
      return false;
    }
  }
  public function insert_permisos_usuario($id_usuario,$empresa,$sucursal)
  {
    $sql = "INSERT INTO tbl_permisos_usuario (id_usuario,id_empresa,id_sucursal)VALUES('$id_usuario','$empresa','$sucursal')";

    $this->db->simple_query($sql);
    return TRUE;
  }

}
