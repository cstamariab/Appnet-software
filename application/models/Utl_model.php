<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Utl_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }
  public function get_planes()
  {
    $query = $this->db->query("SELECT * FROM utl_planes");
    if ($query->num_rows() > 0) {
      return $query->result();
    }else{
      return false;
    }
  }
  public function get_plan($id)
  {
    $query = $this->db->query("SELECT * FROM utl_planes WHERE id = $id");
    if ($query->num_rows() > 0) {
      return $query->row();
    }else{
      return false;
    }
  }
  public function rpt_empresas_nuevas($primer_dia_mes,$ultimo_dia_mes)
  {
    $sql = "SELECT count(*) as cantidad FROM tbl_empresa WHERE fecha_creacion between '$primer_dia_mes' AND '$ultimo_dia_mes'";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query->row()->cantidad;
    }else{
      return false;
    }
  }
  public function rpt_empresas_activas($estado)
  {
    $sql = "SELECT count(*) as cantidad FROM tbl_empresa WHERE estado = $estado";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query->row()->cantidad;
    }else{
      return false;
    }
  }
  public function rpt_planes_x_vencer()
  {
    $sql = "SELECT  count(*) cantidad FROM tbl_empresa WHERE DATEDIFF(fecha_finalizacion,NOW()) <= 5 AND estado = 1;";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query->row()->cantidad;
    }else{
      return false;
    }
  }
  public function rpt_planes_vencen_hoy()
  {
    $sql = "SELECT  count(*) cantidad FROM tbl_empresa WHERE DATEDIFF(fecha_finalizacion,NOW()) <= 0  AND estado = 1;";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query->row()->cantidad;
    }else{
      return false;
    }
  }
  public function ver_reporte_empresa($tipo,$primer_dia_mes,$ultimo_dia_mes)
  {
    switch ($tipo) {
      case 'nuevas':
      $sql = "SELECT razon_social as empresa,fecha_activacion,fecha_finalizacion,COALESCE(sucursales,0) as sucursales
      FROM tbl_empresa emp
      LEFT OUTER JOIN ( select id_empresa,count(*)as sucursales from tbl_sucursal  )as suc ON emp.id =suc.id_empresa
      WHERE fecha_creacion between '$primer_dia_mes' AND '$ultimo_dia_mes'";
      break;
      case 'activas':
      $sql = "SELECT razon_social as empresa,fecha_activacion,fecha_finalizacion,COALESCE(sucursales,0) as sucursales
      FROM tbl_empresa emp
      LEFT OUTER JOIN ( select id_empresa,count(*)as sucursales from tbl_sucursal  )as suc ON emp.id =suc.id_empresa
      WHERE estado = 1";
      break;
      case 'x_vencer':
      $sql = "SELECT razon_social as empresa,fecha_activacion,fecha_finalizacion,COALESCE(sucursales,0) as sucursales
      FROM tbl_empresa emp
      LEFT OUTER JOIN ( select id_empresa,count(*)as sucursales from tbl_sucursal  )as suc ON emp.id =suc.id_empresa
      WHERE DATEDIFF(fecha_finalizacion,NOW()) <= 5 AND estado = 1;";
      break;

      case 'vencen_hoy':
      $sql = "SELECT razon_social as empresa,fecha_activacion,fecha_finalizacion,COALESCE(sucursales,0) as sucursales
      FROM tbl_empresa emp
      LEFT OUTER JOIN ( select id_empresa,count(*)as sucursales from tbl_sucursal  )as suc ON emp.id =suc.id_empresa
      WHERE DATEDIFF(fecha_finalizacion,NOW()) <= 0 AND estado = 1;";
      break;
      case 'desactivadas':
      $sql = "SELECT razon_social as empresa,fecha_activacion,fecha_finalizacion,COALESCE(sucursales,0) as sucursales
      FROM tbl_empresa emp
      LEFT OUTER JOIN ( select id_empresa,count(*)as sucursales from tbl_sucursal  )as suc ON emp.id =suc.id_empresa
      WHERE estado = 0;";
      break;
      default:
      # code...
      break;
    }
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query->result();
    }else{
      return false;
    }
  }
  public function rpt_sucursales_activas()
  {
    $sql = "SELECT count(*) as cantidad FROM `tbl_sucursal` WHERE estado = 1;";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      return $query->row()->cantidad;
    }else{
      return false;
    }
  }
  public function update_plan($id,$plan,$espacio_disco,$sucursales,$slides)
  {
    $this->db->simple_query("UPDATE utl_planes SET nombre = '$plan',espacio_disco = $espacio_disco,sucursales = $sucursales,slides = $slides WHERE id = $id ");
  }
  public function save_token($email,$token)
  {
    $this->db->simple_query("INSERT INTO utl_token(email,token) VALUES('$email','$token')");
    return TRUE;
  }
  public function insert_plan($plan,$espacio_disco,$sucursales,$slides,$video)
  {
    $sql = "INSERT INTO utl_planes(nombre,espacio_disco,sucursales,slides,estado,video) VALUES('$plan','$espacio_disco','$sucursales','$slides',1,$video)";

    $this->db->simple_query($sql);
    return TRUE;
  }
  public function cambiar_estado_video($id,$estado)
  {
    $this->db->simple_query("UPDATE utl_planes SET video = '$estado' WHERE id = '$id'");
    return TRUE;
  }
  public function update_password($email,$password)
  {
    $this->db->simple_query("UPDATE tbl_admin SET pass = '$password' WHERE email = '$email'");
    return TRUE;
  }
  public function update_password_user($email,$password)
  {
    $this->db->simple_query("UPDATE tbl_usuarios SET password = '$password' WHERE email = '$email'");
    return TRUE;
  }
  public function select_suc_estado_usuario($estado,$id)
  {
    $sql = "SELECT count(*) as cantidad from tbl_sucursal suc
    INNER JOIN tbl_permisos_usuario pe ON pe.id_sucursal = suc.id
    INNER JOIN tbl_empresa emp ON emp.id = pe.id_empresa
    WHERE pe.id_usuario = $id and suc.estado = $estado";

    $query = $this->db->query($sql);
    if ($query->num_rows() > 0){
      return $query->row()->cantidad;
    }else{
      return FALSE;
    }
  }
  public function select_datos_user($id)
  {
    $sql = "SELECT u.username,u.email,emp.fecha_finalizacion,pl.nombre as plan,u.img_user from tbl_sucursal suc
    INNER JOIN tbl_permisos_usuario pe ON pe.id_sucursal = suc.id
    INNER JOIN tbl_empresa emp ON emp.id = pe.id_empresa
    INNER JOIN utl_planes pl ON pl.id = emp.id_plan
    INNER JOIN tbl_usuarios u ON u.id = pe.id_usuario
    WHERE pe.id_usuario = $id ";

    $query = $this->db->query($sql);
    if ($query->num_rows() > 0){
      return $query->row();
    }else{
      return FALSE;
    }
  }
  public function verifica_token($token)
  {
    $sql = "SELECT token,email FROM utl_token WHERE token = '$token' ;";

    $query = $this->db->query($sql);
    if ($query->num_rows() > 0){
      $sql2 = "DELETE FROM utl_token WHERE token = '$token'";
      $this->db->simple_query($sql2);
      return $query->row()->email;
    }else{
      return FALSE;
    }
  }

}
