<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }

  public function get_templates($id = null)
  {
    $query = $this->db->query("SELECT id,nombre FROM utl_templates WHERE estado = 1 ");
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      $error = $this->db->error();
      return $error;
    }
  }
  public function get_empresa_template($id)
  {
    $query = $this->db->query("SELECT suc.id_template,tem.nombre as temp_nombre,suc.estado FROM utl_templates tem INNER JOIN tbl_sucursal suc ON tem.id = suc.id_template WHERE suc.id = $id");
    if ($query->num_rows > 0) {
      return $query->row();
    }else{
      $error = $this->db->error();
      return $error;
    }
  }
}
