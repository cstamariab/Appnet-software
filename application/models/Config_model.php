<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Config_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function get_config_sucursal($id_sucursal)
  {
    $query = $this->db->query("SELECT suc_conf.id,suc_conf.logo,suc_conf.titulo,suc_conf.img_fondo,suc_conf.activa_logo, suc_conf.color_titulo,suc_conf.size_titulo FROM tbl_sucursal_config as suc_conf WHERE id_sucursal = $id_sucursal");
    if ($query->num_rows > 0) {
      return $query->row();
    }else{
      return FAlSE;
    }
  }
  public function sucursales_plan($id_empresa)
  {
    $query = $this->db->query("SELECT pla.sucursales as cantidad FROM tbl_empresa emp INNER JOIN utl_planes pla ON pla.id = emp.id_plan  WHERE emp.id = $id_empresa");
    if ($query->num_rows > 0) {
      return $query->row()->cantidad;
    }else{
      return FAlSE;
    }
  }
  public function cantidad_sucursales_empresa($id_empresa)
  {
    $query = $this->db->query("SELECT count(*) as cantidad FROM tbl_sucursal  WHERE id_empresa = $id_empresa");
    if ($query->num_rows > 0) {
      return $query->row()->cantidad;
    }else{
      return FAlSE;
    }
  }
  public function get_slides_video_($id_sucursal)
  {
    $sql = "SELECT id,nombre,proveedor_video,link_video,estado FROM tbl_sucursal_slides WHERE id_sucursal = $id_sucursal";

    $query = $this->db->query($sql);
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return FAlSE;
    }
  }
  public function get_slides_video($id_sucursal)
  {
    $sql = "SELECT id,nombre,proveedor_video,link_video,estado FROM tbl_sucursal_slides WHERE id_sucursal = $id_sucursal and estado = 1";

    $query = $this->db->query($sql);
    if ($query->num_rows > 0) {
      return $query->row();
    }else{
      return FAlSE;
    }
  }
  public function get_slides_sucursal($id_sucursal)
  {
    $sql = "SELECT id,nombre,posicion,titulo,descripcion,precio,img_slide,img_fondo,activa_precio,activa_iva,activa_titulo,activa_descripcion,estado,logo_estado_prod as logo_prod,color_titulo,color_desc,color_precio,size_titulo,size_desc,size_precio FROM tbl_sucursal_slides WHERE id_sucursal = $id_sucursal and estado = 1 ORDER BY posicion ASC";

    $query = $this->db->query($sql);
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return FAlSE;
    }
  }
  public function get_slides_sucursal_($id_sucursal)
  {
    $sql = "SELECT id,nombre,posicion,titulo,descripcion,precio,img_slide,img_fondo,activa_precio,activa_iva,activa_titulo,activa_descripcion,estado FROM tbl_sucursal_slides WHERE id_sucursal = $id_sucursal  ORDER BY posicion ASC";

    $query = $this->db->query($sql);
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return FAlSE;
    }
  }
  public function estado_video($id,$id_sucursal,$estado)
  {
    $sql = "UPDATE tbl_sucursal_slides set estado = 0 WHERE id_sucursal = $id_sucursal and link_video <> ''";
    $sql2 = "UPDATE tbl_sucursal_slides set estado = $estado WHERE id = $id ";
    $query = $this->db->query($sql);
    $query = $this->db->query($sql2);
    return true;
  }
  public function get_slide($id_slide)
  {
     $sql = "SELECT * FROM tbl_sucursal_slides WHERE id = $id_slide";
     $query = $this->db->query($sql);
     if ($query->num_rows > 0) {
       return $query->row();
     }else{
       return FAlSE;
     }
  }
  public function get_cant_slides($id_sucursal)
  {
    $sql = "SELECT COUNT(*)as cantidad FROM tbl_sucursal_slides WHERE id_sucursal = $id_sucursal";
    $query = $this->db->query($sql);
    if ($query->num_rows > 0) {
      return $query->row()->cantidad;
    }else{
      return FAlSE;
    }
  }
  public function select_diapositivas($id_sucursal)
  {
    $sql = "SELECT count(*) as cantidad FROM tbl_sucursal_slides WHERE id_sucursal = $id_sucursal";
     $query = $this->db->query($sql);
     if ($query->num_rows > 0) {
       return $query->row()->cantidad;
     }else{
       return FAlSE;
     }
  }
  public function update_slide($id,$nombre,$titulo,$descripcion,$posicion,$precio,$img_url,$img_fondo,$logo_prod,$proveedor,$link,$color_titulo,$color_desc,$color_precio,$size_titulo,$size_desc,$size_precio)
  {
    $sql = "UPDATE tbl_sucursal_slides set img_fondo = '$img_fondo',nombre = '$nombre', titulo = '$titulo',
    descripcion = '$descripcion',posicion = '$posicion',precio='$precio',
    img_slide='$img_url',logo_estado_prod = '$logo_prod',proveedor_video = '$proveedor',
    link_video = '$link' , color_titulo = '$color_titulo', color_desc = '$color_desc' , color_precio = '$color_precio',
    size_titulo = $size_titulo,size_desc = $size_desc, size_precio = $size_precio WHERE id = $id";

     $query = $this->db->query($sql);
  }
  public function delete_slide($id)
  {
    $sql = "SELECT sl.id_sucursal,su.ruta,img_slide FROM tbl_sucursal_slides sl INNER JOIN tbl_sucursal su ON su.id = sl.id_sucursal
     WHERE sl.id = $id";
    $query = $this->db->query($sql);
    $datos = $query->row();
    $sql2 = "DELETE FROM tbl_sucursal_slides WHERE id = $id";
    $query2 = $this->db->query($sql2);
    return $datos;
  }
  public function activar_prop($id,$propiedad,$estado)
  {
    switch ($propiedad) {
      case 'activa_precio':
      $propiedad_ = 'activa_precio = '.$estado;
      break;
      case 'activa_iva':
      $propiedad_ = 'activa_iva = '.$estado;
      break;
      case 'activa_titulo':
      $propiedad_ = 'activa_titulo = '.$estado;
      break;
      case 'activa_descripcion':
      $propiedad_ = 'activa_descripcion = '.$estado;
      break;
      case 'estado':
      $propiedad_ = 'estado = '.$estado;
      break;
    }
    $sql = "UPDATE tbl_sucursal_slides SET $propiedad_ WHERE id = $id";

    $this->db->simple_query($sql);
  }

  public function insert_img_suc($id_sucursal,$img,$posicion,$size)
  {
    $sql2 = "UPDATE utl_img_suc SET estado = 0 WHERE id_sucursal = $id_sucursal and posicion = '$posicion'";
    $this->db->simple_query($sql2);
    $sql = "INSERT INTO utl_img_suc (id_sucursal,url_imagen,posicion,estado,size)VALUES($id_sucursal,'$img','$posicion',1,'$size')";
    $this->db->simple_query($sql);
    return TRUE;
  }
  public function eliminar_img($id,$id_sucursal,$url,$posicion)
  {
    switch ($posicion) {
      case 'logo':
      $filtro = " logo ='' ";
      break;

      case 'img_fondo':
      $filtro = " img_fondo ='' ";
      break;
    }
    $sql3 = "UPDATE tbl_sucursal_config SET $filtro,refresh=1 WHERE id_sucursal = $id_sucursal";
    $this->db->simple_query($sql3);
    $sql = "DELETE FROM utl_img_suc WHERE id = $id";
    $this->db->simple_query($sql);
    return true;
  }
  public function cambiar_img($id,$id_sucursal,$url,$posicion)
  {
    switch ($posicion) {
      case 'logo':
      $filtro = " logo ='$url' ";
      break;

      case 'img_fondo':
      $filtro = " img_fondo ='$url' ";
      break;
    }
    $sql2 = "UPDATE utl_img_suc SET estado = 0 WHERE id_sucursal = $id_sucursal and posicion = '$posicion'";
    $this->db->simple_query($sql2);
    $sql = "UPDATE utl_img_suc SET estado = 1 WHERE id = $id";
    $this->db->simple_query($sql);
    $sql3 = "UPDATE tbl_sucursal_config SET $filtro,refresh=1 WHERE id_sucursal = $id_sucursal";
    $this->db->simple_query($sql3);
    return true;
  }
  public function verifica_img($id_sucursal,$img,$posicion)
  {
    $query = $this->db->query("SELECT id FROM utl_img_suc  WHERE id_sucursal = $id_sucursal AND url_imagen = '$img' and posicion = '$posicion' ");
    if ($query->num_rows > 0) {
      return TRUE;
    }else{
      return FAlSE;
    }
  }
  public function get_img_suc($id_sucursal)
  {
    $query = $this->db->query("SELECT id,url_imagen,posicion,estado,size FROM utl_img_suc  WHERE id_sucursal = $id_sucursal ORDER BY posicion");
    if ($query->num_rows > 0) {
      return $query->result();
    }else{
      return FAlSE;
    }
  }
  public function change_template($id,$id_sucursal)
  {
    $sql = "UPDATE tbl_sucursal SET id_template = $id WHERE id =$id_sucursal";
    $this->db->simple_query($sql);
    $sql2 = "UPDATE tbl_sucursal_config SET refresh = 1 WHERE id_sucursal =$id_sucursal";
    $this->db->simple_query($sql2);
    return TRUE;
  }
  public function remove_refresh($id_sucursal)
  {
    $sql = "UPDATE tbl_sucursal_config SET refresh = 0 WHERE id_sucursal =$id_sucursal";
    $this->db->simple_query($sql);
    return TRUE;
  }
  public function check_changes($id_sucursal)
  {
    $query = $this->db->query("SELECT refresh FROM tbl_sucursal_config  WHERE id_sucursal = $id_sucursal");
    if ($query->num_rows > 0) {
      return $query->row()->refresh;
    }else{
      return FAlSE;
    }
  }

  public function update_conf_suc($id_sucursal,$logo_url,$banner_url,$img_fondo_url,$activa_logo,$color_titulo,$size_titulo)
  {
    $sql = "UPDATE tbl_sucursal_config SET logo = '$logo_url',titulo = '$banner_url',img_fondo ='$img_fondo_url',activa_logo = $activa_logo , color_titulo = '$color_titulo',size_titulo = '$size_titulo' WHERE id_sucursal =$id_sucursal";

    $this->db->simple_query($sql);
    return TRUE;
  }
  public function set_refresh($id_sucursal)
  {
    $sql = "UPDATE tbl_sucursal_config SET refresh = 1 WHERE id_sucursal = $id_sucursal";
    $this->db->simple_query($sql);
    return TRUE;
  }
  public function insert_config_sucursal($id_sucursal)
  {
    $sql = "INSERT INTO tbl_sucursal_config(id_sucursal,activa_logo,color_titulo,size_titulo)VALUES($id_sucursal,0,'#ccc',100)";
    $this->db->simple_query($sql);
    return TRUE;
  }
  public function insert_slide($id_sucursal,$nombre,$titulo,$descripcion,$posicion,$precio,$img_url,$activa_titulo,$activa_desc,$activa_precio,$activa_iva,$estado,$img_fondo,$logo_url,$proveedor,$link,$color_titulo,$color_desc,$color_precio,$size_titulo,$size_desc,$size_precio)
  {
    $sql = "INSERT INTO tbl_sucursal_slides (id_sucursal,nombre,titulo,descripcion,posicion,precio,img_slide,activa_titulo,activa_descripcion,activa_precio,activa_iva,estado,img_fondo,logo_estado_prod,proveedor_video,link_video,color_titulo,color_desc,color_precio,size_titulo,size_desc,size_precio)
    VALUES($id_sucursal,'$nombre','$titulo','$descripcion','$posicion','$precio','$img_url','$activa_titulo','$activa_desc','$activa_precio','$activa_iva','$estado','$img_fondo','$logo_url','$proveedor','$link','$color_titulo','$color_desc','$color_precio','$size_titulo','$size_desc','$size_precio')";
    $sql2 = "UPDATE tbl_sucursal_slides set estado = 0 WHERE id_sucursal = $id_sucursal and link_video <> ''";
    $this->db->simple_query($sql);
    $this->db->simple_query($sql2);
  }

}
