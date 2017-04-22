<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Font_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }

  public function get_fonts()
  {
    $query = $this->db->query("SELECT * FROM utl_fonts");
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return FAlSE;
    }
  }
  public function get_fonts_activas()
  {
    $query = $this->db->query("SELECT * FROM utl_fonts WHERE estado = 1");
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return FAlSE;
    }
  }
  public function get_font($id)
  {
    $query = $this->db->query("SELECT * FROM utl_fonts where id = $id");
    if ($query->num_rows > 0) {
      return $query->row();
    }else{
      return FAlSE;
    }
  }
  public function insert_font($nombre,$link,$propiedad,$estado)
  {
    $sql ="INSERT INTO utl_fonts (nombre_font,link_html,propiedad_css,estado)
    VALUES('$nombre','$link','$propiedad','$estado');";

    $this->db->simple_query($sql);
    return TRUE;
  }
  public function delete_font($id)
  {
    $sql = "DELETE from utl_fonts WHERE id = $id";
    $this->db->simple_query($sql);
    return TRUE;
  }
  public function cambiar_estado_font($id,$estado)
  {
    $sql = "UPDATE utl_fonts set estado = $estado WHERE id = $id";
    $this->db->simple_query($sql);
    return TRUE;
  }

}