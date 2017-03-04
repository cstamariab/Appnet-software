<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Empresa_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }
  public function get_planes()
  {
    $query = $this->db->get('utl_planes', 10);
    return $query->result();
  }
  public function get_empresas()
  {
    $query = $this->db->query('SELECT e.id,rut,giro,razon_social,email,telefono,celular,direccion,fecha_activacion,fecha_creacion,fecha_finalizacion,p.nombre as plan,e.estado FROM tbl_empresa e
      INNER JOIN utl_planes p ON p.id = e.id_plan');
      if ($query->num_rows > 0) {
        return $query->result();
      }else{
        return FAlSE;
      }
    }
    public function insert_empresa($rut,$razon_social,$giro,$direccion,$telefono,$celular,$email,$plan,$activada,$finaliza,$estado)
    {

      $sql = "INSERT INTO tbl_empresa(rut,giro,razon_social,email,telefono,celular,direccion,fecha_activacion,id_plan,fecha_creacion,fecha_finalizacion,estado)
      VALUES ('$rut','$giro','$razon_social','$email','$telefono','$celular','$direccion','$activada','$plan',NOW(),'$finaliza',$estado)";

      $query = $this->db->simple_query($sql);
      if ($query) {
        return TRUE;
      }else{
        $error = $this->db->error();
      }

    }
    public function update_empresa($id,$razon_social,$giro,$direccion,$telefono,$celular,$email,$plan)
    {
      $sql = "UPDATE tbl_empresa set giro='$giro',razon_social='$razon_social',email='$email',
      telefono='$telefono',celular='$celular',direccion='$direccion',id_plan='$plan' WHERE id = $id ";

      $query = $this->db->simple_query($sql);
      if ($query) {
        return TRUE;
      }else{
        return FAlSE;
      }
    }
    public function get_datos_empresa($id)
    {
      $query = $this->db->query("SELECT e.id,rut,giro,razon_social,email,telefono,celular,direccion,p.nombre as plan,id_plan FROM tbl_empresa e
      INNER JOIN utl_planes p ON p.id = e.id_plan WHERE e.id = '$id' ");
      if ($query->num_rows > 0) {
        return $query->row();
      }else{
        return FAlSE;
      }
    }
    public function update_estado_empresa($id)
    {
      $sql = "UPDATE tbl_empresa set fecha_activacion = NOW() WHERE id = $id ";
      $query = $this->db->simple_query($sql);
      if ($query) {
        return TRUE;
      }else{
        return FAlSE;
      }
    }
    public function update_estado_empresa_sucursal($id,$estado,$fecha_inicio,$fecha_fin)
    {
      if ($estado == 1) {
          $sql = "UPDATE tbl_empresa set fecha_activacion = '$fecha_inicio',fecha_finalizacion = '$fecha_fin',estado = 1 WHERE id = $id ";
          $query = $this->db->simple_query($sql);
      }else{
        $sql = "UPDATE tbl_empresa set fecha_activacion = '$fecha_inicio',fecha_finalizacion = NOW(),estado = 0 WHERE id = $id ";
        $sql2 = "UPDATE tbl_sucursal SET estado = 0 WHERE id_empresa = $id";

        $query = $this->db->simple_query($sql);
        $query = $this->db->simple_query($sql2);
      }

      if ($query) {
        return TRUE;
      }else{
        return FAlSE;
      }
    }
    public function get_sucursales_empresa($id_empresa)
    {
      $query = $this->db->query("SELECT id,ruta FROM tbl_sucursal WHERE id_empresa = $id_empresa");
      if ($query->num_rows > 0) {
        return $query->result();
      }else{
        return FAlSE;
      }
    }
    public function eliminar_empresa($id)
    {
      $sql = "DELETE FROM tbl_empresa WHERE id = $id ";
      $query = $this->db->simple_query($sql);
      if ($query) {
        return TRUE;
      }else{
        return FAlSE;
      }
    }
    public function validar_rut($rut)
    {
      $query = $this->db->query("SELECT id FROM `tbl_empresa` WHERE rut = '$rut';");
      if ($query->num_rows > 0) {
        return true;
      }else{
        return false;
      }
    }

    public function update_entry()
    {
      $this->title    = $_POST['title'];
      $this->content  = $_POST['content'];
      $this->date     = time();

      $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

  }
