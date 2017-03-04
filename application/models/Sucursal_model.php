<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sucursal_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }

  public function insert_sucursal($nombre_suc,$ruta,$template,$empresa,$estado)
  {
    $sql ="INSERT INTO tbl_sucursal (nombre,ruta,id_template,id_empresa,fecha_creacion,estado)VALUES('$nombre_suc','$ruta','$template','$empresa',NOW(),'$estado');";

    $this->db->simple_query($sql);
    return $this->db->insert_id();
  }
  public function delete_suc($id)
  {
    $sql ="DELETE FROM tbl_sucursal WHERE id = $id";
    $sql2 ="DELETE FROM tbl_permisos_usuario WHERE id_sucursal = $id";
    $sql2 ="DELETE FROM tbl_sucursal_config WHERE id_sucursal = $id";

    $this->db->simple_query($sql);
    $this->db->simple_query($sql2);
    return TRUE;
  }
  public function verifica_ruta($ruta)
  {
    $query = $this->db->query("SELECT id FROM `tbl_sucursal` WHERE ruta = '$ruta';");
    if ($query->num_rows > 0) {
      return true;
    }else{
      return false;
    }
  }
  public function verifica_estado_empresa($id)
  {
    $query = $this->db->query("SELECT emp.estado from tbl_sucursal suc INNER JOIN tbl_empresa emp ON emp.id = suc.id_empresa WHERE suc.id = $id");
    if ($query->num_rows > 0) {
      return $query->row()->estado;
    }else{
      return false;
    }
  }
  public function get_sucursales()
  {
    $query = $this->db->query("SELECT suc.id,suc.nombre as sucursal,suc.ruta,suc.fecha_creacion ,suc.estado ,emp.razon_social as empresa ,temp.nombre as template,emp.id as id_empresa
    FROM `tbl_sucursal` suc
    INNER JOIN tbl_empresa emp ON emp.id = suc.id_empresa
    INNER JOIN utl_templates temp ON temp.id = suc.id_template");
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return false;
    }
  }
  public function get_sucursal($id)
  {
    $query = $this->db->query("SELECT pla.sucursales,pla.espacio_disco,suc.id,temp.id as id_template,suc.nombre as sucursal,suc.ruta,suc.fecha_creacion ,suc.estado ,emp.razon_social as empresa ,temp.nombre as template,suc.estado,pla.slides,emp.id as id_empresa
    FROM `tbl_sucursal` suc
    INNER JOIN tbl_empresa emp ON emp.id = suc.id_empresa
    INNER JOIN utl_templates temp ON temp.id = suc.id_template
    INNER JOIN utl_planes pla ON pla.id = emp.id_plan
    WHERE suc.id = $id");
    if ($query->num_rows > 0) {
      return $query->row();
    }else{
      return false;
    }
  }
  public function get_sucursales_usuario($id_usuario)
  {
    $query = $this->db->query("SELECT emp.razon_social as empresa,suc.id,temp.nombre as template,suc.nombre,suc.ruta,id_template,suc.id_empresa,suc.estado,fecha_activacion,fecha_finalizacion,plan.nombre as plan,plan.sucursales,plan.slides,plan.video,plan.espacio_disco FROM tbl_sucursal suc
    INNER JOIN tbl_permisos_usuario pu ON pu.id_sucursal = suc.id
    INNER JOIN tbl_empresa emp ON emp.id = pu.id_empresa
    INNER JOIN utl_planes plan ON plan.id = emp.id_plan
    INNER JOIN utl_templates temp ON temp.id = suc.id_template
    WHERE pu.id_usuario = $id_usuario AND suc.estado = 1;");
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return false;
    }
  }
  public function get_sucursales_byID($id_empresa)
  {
    $query = $this->db->query("SELECT id, nombre FROM tbl_sucursal WHERE id_empresa = $id_empresa");
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return false;
    }
  }
  public function update_estado_sucursal($id,$estado)
  {
    $sql = "UPDATE tbl_sucursal set estado = $estado WHERE id = $id ";
    $query = $this->db->simple_query($sql);
    if ($query) {
      return TRUE;
    }else{
      $error = $this->db->error();
    }
  }
  public function update_sucursal($id_sucursal,$nombre_suc,$id_template)
  {
    $sql = "UPDATE tbl_sucursal set nombre = '$nombre_suc',id_template = $id_template WHERE id = $id_sucursal ";

    $query = $this->db->simple_query($sql);
    if ($query) {
      return TRUE;
    }else{
      $error = $this->db->error();
    }
  }
}
