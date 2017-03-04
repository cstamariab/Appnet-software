<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function dd($array)
{
  echo "<pre>";echo print_r($array);echo "</pre>";
}

function messages($estado,$mensaje)
{
  $CI =& get_instance();
  $CI->session->set_flashdata($estado, '<div class="alert alert-'.$estado.' alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i>'.$mensaje.'</h4>

  </div>');
}

function size_folder($ruta)
{
  $f = './public/sucursales/'.$ruta;
  $io = popen ( '/usr/bin/du -sk ' . $f, 'r' );
  $size = fgets ( $io, 4096);
  $size = substr ( $size, 0, strpos ( $size, "\t" ) );
  pclose ( $io );
  if ($size == "") {
    $size = 0;
  }
  return round($size/1000,2);

}
function diapositivas($id_sucursal)
{
  $CI =& get_instance();
  $diapositivas = $CI->config_model->select_diapositivas($id_sucursal);
  return $diapositivas ;
}
function cantidad_sucursales_empresa($id_empresa)
{
  $CI =& get_instance();
  $sucursales = $CI->config_model->cantidad_sucursales_empresa($id_empresa);
  return $sucursales ;
}
 function sucursales_plan($id_empresa)
{
  $CI =& get_instance();
  $sucur = $CI->config_model->sucursales_plan($id_empresa);
  return $sucur ;
}

function deleteDirectory($dirPath) {
  if (is_dir($dirPath)) {
    $objects = scandir($dirPath);
    foreach ($objects as $object) {
      if ($object != "." && $object !="..") {
        if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
          deleteDirectory($dirPath . DIRECTORY_SEPARATOR . $object);
        } else {
          unlink($dirPath . DIRECTORY_SEPARATOR . $object);
        }
      }
    }
    reset($objects);
    rmdir($dirPath);
  }
}
