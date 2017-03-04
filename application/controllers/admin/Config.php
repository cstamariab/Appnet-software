<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->layouts->setLayout('layout_usuario');
    $this->layouts->set_title('Config Sucursales');

    if (!$this->session->userdata('id_user')) {
      redirect(base_url("admin/login"));
    }
  }
  public function index()
  {
    $this->listado();
  }
  public function listado()
  {
    $sucursales = $this->sucursal_model->get_sucursales_usuario($this->session->userdata('id_user'));
    $this->layouts->view('admin/config/listado', compact('sucursales'));
  }
  public function check_changes()
  {
    $id_sucursal = $this->input->post('id_sucursal');
    $refresh = $this->config_model->check_changes($id_sucursal);
    echo ($refresh);
  }
  public function remove_refresh()
  {
    $id_sucursal = $this->input->post('id_sucursal');
    $refresh = $this->config_model->remove_refresh($id_sucursal);
  }
  public function cambiar_img()
  {
    $id = $this->input->post('id');
    $id_sucursal = $this->input->post('id_sucursal');
    $url = $this->input->post('url');
    $posicion = $this->input->post('posicion');
    $this->config_model->cambiar_img($id,$id_sucursal,$url,$posicion);

  }
  public function elimina_img()
  {
    $id = $this->input->post('id');
    $id_sucursal = $this->input->post('id_sucursal');
    $url = $this->input->post('url');
    $posicion = $this->input->post('posicion');
    $this->config_model->eliminar_img($id,$id_sucursal,$url,$posicion);
  }
  public function configurar_slides($id_sucursal)
  {
    $sucursal = $this->sucursal_model->get_sucursal($id_sucursal);
    $slides = $this->config_model->get_slides_sucursal_($id_sucursal);
    $slides_video = $this->config_model->get_slides_video_($id_sucursal);

    $this->layouts->view('admin/config/config_slides', compact('sucursal','slides','slides_video'));
  }
  public function activar_prop()
  {
    $id = $this->input->post('id');
    $id_sucursal = $this->input->post('id_sucursal');
    $propiedad = $this->input->post('propiedad');
    $estado = $this->input->post('estado');
    $this->config_model->set_refresh($id_sucursal);

    $this->config_model->activar_prop($id,$propiedad,$estado);
  }
  public function eliminar_slide($id)
  {
    $datos = $this->config_model->delete_slide($id);
    if (file_exists('./public/sucursales/'.$datos->ruta.'/'.$datos->img_slide)) {
      unlink('./public/sucursales/'.$datos->ruta.'/'.$datos->img_slide);
    }
    messages('success','Diapositiva eliminada exitosamente');
    redirect(base_url()."admin/config/configurar_slides/".$datos->id_sucursal);
  }
  public function editar_slide($id_sucursal,$id_slide)
  {
    $sucursal = $this->sucursal_model->get_sucursal($id_sucursal);
    $slide = $this->config_model->get_slide($id_slide);
    if ($this->input->post()) {
      $this->form_validation->set_rules('nombre'				, 'Nombre', 'required');
      $this->form_validation->set_rules('titulo', 'Titulo', 'required');
      $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
      $this->form_validation->set_rules('posicion', 'Posicion', 'required|numeric');
      $this->form_validation->set_rules('precio', 'Precio', 'required|numeric');

      $this->form_validation->set_rules('color_precio', 'Color precio', 'required');
      $this->form_validation->set_rules('color_descripcion', 'Color descripcion', 'required');
      $this->form_validation->set_rules('color_titulo', 'Color titulo', 'required');

      $this->form_validation->set_rules('size_precio', 'Tamaño precio', 'required|numeric|greater_than[1]');
      $this->form_validation->set_rules('size_desc', ' Tamaño descripcion', 'required|numeric|greater_than[1]');
      $this->form_validation->set_rules('size_titulo', 'Tamaño titulo', 'required|numeric|greater_than[1]');

      if ($this->form_validation->run()) {
        $nombre = $this->input->post('nombre');
        $titulo = $this->input->post('titulo');
        $desc = $this->input->post('descripcion');
        $posicion = $this->input->post('posicion');
        $precio = str_replace('.','',$this->input->post('precio'));

        $img= $_FILES['img']['name'];
        $img_fondo= $_FILES['img_fondo']['name'];

        $archivos_size = round(($_FILES['img']['size']+$_FILES['img_fondo']['size'])/1000000,2);
        // // VERIFICA TAMAÑO EN DISCO
        //

        $color_titulo = $this->input->post('color_titulo');
        $color_desc = $this->input->post('color_descripcion');
        $color_precio = $this->input->post('color_precio');

        $size_titulo = $this->input->post('size_titulo');
        $size_desc = $this->input->post('size_desc');
        $size_precio = $this->input->post('size_precio');

        $espacio_actual = size_folder($sucursal->ruta);
        $total_mb = $archivos_size+$espacio_actual;

        if ($img == "") {
          $img_url = $this->input->post('img_antigua');
        }else{
          $img_url_antigua = $this->input->post('img_antigua');
          $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
          $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
          if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$img_url_antigua)) {
            unlink('./public/sucursales/'.$sucursal->ruta.'/'.$img_url_antigua);
          }
          if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$img)) {
            unlink('./public/sucursales/'.$sucursal->ruta.'/'.$img);
          }

          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          if ($this->upload->do_upload('img')) {
            $data = $this->upload->data();
            $img_url = $data['file_name'];
          } else {
            $error = array('error' => $this->upload->display_errors());
            echo dd($error);
          }
        }
        if ($img_fondo == "") {
          $img_fondo = $this->input->post('img_fondo_antigua');
        }else{
          $img_fondo_antigua = $this->input->post('img_fondo_antigua');
          $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
          $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
          if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$img_fondo_antigua)) {
            unlink('./public/sucursales/'.$sucursal->ruta.'/'.$img_fondo_antigua);
          }
          if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$img_fondo)) {
            unlink('./public/sucursales/'.$sucursal->ruta.'/'.$img_fondo);
          }

          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          if ($this->upload->do_upload('img_fondo')) {
            $data = $this->upload->data();
            $img_fondo = $data['file_name'];
          } else {
            $error = array('error' => $this->upload->display_errors());
            echo dd($error);
          }
        }
        if ($total_mb > round($sucursal->espacio_disco/cantidad_sucursales_empresa($sucursal->id_empresa))) {
          messages('error','Limite de datos excedido , total datos utilizados : '.size_folder($sucursal->ruta)." MB");
          redirect(base_url()."admin/config/editar_slide/".$id_sucursal."/".$slide->id);
        }
        $logo_prod = "";
        $proveedor_video = "";
        $video = "";
        $this->config_model->update_slide($slide->id,$nombre,$titulo,$desc,$posicion,$precio,$img_url,$img_fondo,$logo_prod,$proveedor_video,$video,$color_titulo,$color_desc,$color_precio,$size_titulo,$size_desc,$size_precio);
        $this->config_model->set_refresh($id_sucursal);
        messages('success','Diapositiva editada exitosamente');
        redirect(base_url()."admin/config/editar_slide/".$id_sucursal."/".$slide->id);
      }
    }
    $this->layouts->view('admin/config/editar',compact('slide','sucursal'));
  }
  public function nuevo_slide($id_sucursal)
  {
    $sucursal = $this->sucursal_model->get_sucursal($id_sucursal);
    if ($this->config_model->get_cant_slides($sucursal->id) >= $sucursal->slides) {
      messages('error','Cantidad de slides supera plan actual.');
      redirect(base_url().'admin/config/configurar_slides/'.$id_sucursal);
    }
    if ($this->input->post()) {
      $this->form_validation->set_rules('nombre'				, 'Nombre', 'required');
      $this->form_validation->set_rules('titulo', 'Titulo', 'required');
      $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
      $this->form_validation->set_rules('posicion', 'Posicion', 'required|numeric');
      $this->form_validation->set_rules('precio', 'Precio', 'required|numeric');
      // $this->form_validation->set_rules('img', 'Imagen producto', 'required');
      // $this->form_validation->set_rules('img_fondo', 'Imagen fondo', 'required');
      $this->form_validation->set_rules('color_precio', 'Color precio', 'required');
      $this->form_validation->set_rules('color_descripcion', 'Color descripcion', 'required');
      $this->form_validation->set_rules('color_titulo', 'Color titulo', 'required');

      $this->form_validation->set_rules('size_precio', 'Tamaño precio', 'required|numeric|greater_than[1]');
      $this->form_validation->set_rules('size_desc', ' Tamaño descripcion', 'required|numeric|greater_than[1]');
      $this->form_validation->set_rules('size_titulo', 'Tamaño titulo', 'required|numeric|greater_than[1]');

      if ($this->form_validation->run()) {

        $nombre = $this->input->post('nombre');
        $titulo = $this->input->post('titulo');
        $desc = $this->input->post('descripcion');
        $posicion = $this->input->post('posicion');
        $precio = str_replace('.','',$this->input->post('precio'));

        if ($this->input->post('activa_titulo') == 'on') {
          $activa_titulo = 1;
        }else{
          $activa_titulo = 0;
        }
        if ($this->input->post('activa_desc') == 'on') {
          $activa_desc = 1;
        }else{
          $activa_desc = 0;
        }
        if ($this->input->post('activa_precio') == 'on') {
          $activa_precio = 1;
        }else{
          $activa_precio = 0;
        }
        if ($this->input->post('activa_iva') == 'on') {
          $activa_iva = 1;
        }else{
          $activa_iva = 0;
        }
        // Color picker
        $color_titulo = $this->input->post('color_titulo');
        $color_desc = $this->input->post('color_descripcion');
        $color_precio = $this->input->post('color_precio');

        $size_titulo = $this->input->post('size_titulo');
        $size_desc = $this->input->post('size_desc');
        $size_precio = $this->input->post('size_precio');
        // VARIABLES DE IMG
        $img= $_FILES['img']['name'];
        $img_fondo= $_FILES['img_fondo']['name'];
        $archivos_size = round($_FILES['img']['size']/1000000,2);

        // // VERIFICA TAMAÑO EN DISCO
        $espacio_actual = size_folder($sucursal->ruta);
        $total_mb = $archivos_size+$espacio_actual;


        // SETEAMOS RUTA UPLOAD
        $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
        $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
        if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$img)) {
          unlink('./public/sucursales/'.$sucursal->ruta.'/'.$img);
        }
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $img_url = "";
        if ($this->upload->do_upload('img')) {
          $data = $this->upload->data();
          $img_url = $data['file_name'];
        } else {
          $error = array('error' => $this->upload->display_errors());
          echo dd($error);
        }
        $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
        $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
        if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$img_fondo)) {
          unlink('./public/sucursales/'.$sucursal->ruta.'/'.$img_fondo);
        }
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $img_fondo = "";
        if ($this->upload->do_upload('img_fondo')) {
          $data = $this->upload->data();
          $img_fondo = $data['file_name'];
        } else {
          $error = array('error' => $this->upload->display_errors());
          echo dd($error);
        }
        if ($total_mb > round($sucursal->espacio_disco/cantidad_sucursales_empresa($sucursal->id_empresa))) {
          messages('error','Limite de datos excedido , total datos utilizados : '.size_folder($sucursal->ruta)." MB");
          redirect(base_url()."admin/config/configurar_slides/".$id_sucursal);
        }
        $estado = 1;
        $this->config_model->insert_slide(
          $id_sucursal,$nombre,$titulo,$desc,$posicion,$precio,$img_url
          ,$activa_titulo,$activa_desc,$activa_precio,$activa_iva,$estado,$img_fondo,'','','',
          $color_titulo,$color_desc,$color_precio,$size_titulo,$size_desc,$size_precio);
          $this->config_model->set_refresh($id_sucursal);
          messages('success','Diapositiva creada exitosamente');
          redirect(base_url('admin/config/configurar_slides/'.$id_sucursal));
        }
      }
      $this->layouts->view('admin/config/nuevo');
    }

    public function nuevo_slide_tmp_2($id_sucursal)
    {
      $sucursal = $this->sucursal_model->get_sucursal($id_sucursal);
      if ($this->config_model->get_cant_slides($sucursal->id) >= $sucursal->slides) {
        messages('error','Cantidad de slides supera plan actual.');
        redirect(base_url().'admin/config/configurar_slides/'.$id_sucursal);
      }
      if ($this->input->post()) {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('titulo', 'Titulo', 'required');
        $this->form_validation->set_rules('posicion', 'Posicion', 'required|numeric');
        $this->form_validation->set_rules('precio', 'Precio', 'required|numeric');
        $this->form_validation->set_rules('color_precio', 'Color precio', 'required');
        $this->form_validation->set_rules('color_titulo', 'Color titulo', 'required');
        $this->form_validation->set_rules('size_precio', 'Tamaño precio', 'required|numeric|greater_than[1]');
        $this->form_validation->set_rules('size_titulo', 'Tamaño titulo', 'required|numeric|greater_than[1]');

        if ($this->form_validation->run()) {
          $nombre = $this->input->post('nombre');
          $titulo = $this->input->post('titulo');
          $posicion = $this->input->post('posicion');
          $precio = str_replace('.','',$this->input->post('precio'));

          if ($this->input->post('activa_titulo') == 'on') {
            $activa_titulo = 1;
          }else{
            $activa_titulo = 0;
          }
          if ($this->input->post('activa_precio') == 'on') {
            $activa_precio = 1;
          }else{
            $activa_precio = 0;
          }
          if ($this->input->post('activa_iva') == 'on') {
            $activa_iva = 1;
          }else{
            $activa_iva = 0;
          }

          // Color picker
          $color_titulo = $this->input->post('color_titulo');
          $color_precio = $this->input->post('color_precio');
          $size_titulo = $this->input->post('size_titulo');
          $size_precio = $this->input->post('size_precio');

          $logo = $_FILES['logo_estado']['name'];
          $img = $_FILES['img']['name'];
          $espacio_actual = size_folder($sucursal->ruta);
          $archivos = round(($_FILES['logo_estado']['size']+$_FILES['img']['size'])/1000000,2);
          $total_mb = $archivos+$espacio_actual;


          if ($img == "") {
            $img_url = '';
          }else{
            $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
            $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
            if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$img)) {
              unlink('./public/sucursales/'.$sucursal->ruta.'/'.$img);
            }
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('img')) {
              $data = $this->upload->data();
              $img_url = $data['file_name'];
            } else {
              $error = array('error' => $this->upload->display_errors());
              echo dd($error);
            }
          }
          if ($logo == "") {
            $logo_url = '';
          }else{
            $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
            $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
            if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$logo)) {
              unlink('./public/sucursales/'.$sucursal->ruta.'/'.$logo);
            }
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('logo_estado')) {
              $data = $this->upload->data();
              $logo_url = $data['file_name'];
            } else {
              $error = array('error' => $this->upload->display_errors());
              echo dd($error);
            }
          }
          if ($total_mb > round($sucursal->espacio_disco/cantidad_sucursales_empresa($sucursal->id_empresa))) {
            messages('error','Limite de datos excedido , total datos utilizados : '.size_folder($sucursal->ruta)." MB");
            redirect(base_url()."admin/config/nuevo_slide_tmp_2/".$id_sucursal);
          }
          $estado = 1;
          $this->config_model->insert_slide($id_sucursal,$nombre,$titulo,'',$posicion,$precio,$img_url,$activa_titulo,'',$activa_precio,$activa_iva,$estado,'',$logo_url,'','',$color_titulo,'',$color_precio,$size_titulo,"",$size_precio);
          $this->config_model->set_refresh($id_sucursal);
          messages('success','Diapositiva creada exitosamente');
          redirect(base_url()."admin/config/configurar_slides/".$id_sucursal);
        } // form validation
      }
      $this->layouts->view('admin/config/nuevo_tmp_2');
    }
    public function estado_video()
    {
      $id = $this->input->post('id');
      $id_sucursal = $this->input->post('id_sucursal');
      $estado  = $this->input->post('estado');
      $this->config_model->estado_video($id,$id_sucursal,$estado);
      $this->config_model->set_refresh($id_sucursal);
    }
    public function editar_slide_tmp_2($id_sucursal,$id_slide)
    {
      $sucursal = $this->sucursal_model->get_sucursal($id_sucursal);
      $slide = $this->config_model->get_slide($id_slide);
      if ($this->input->post()) {
        $this->form_validation->set_rules('nombre'				, 'Nombre', 'required');
        $this->form_validation->set_rules('titulo', 'Titulo', 'required');
        $this->form_validation->set_rules('posicion', 'Posicion', 'required|numeric');
        $this->form_validation->set_rules('precio', 'Precio', 'required|numeric');

        $this->form_validation->set_rules('color_precio', 'Color precio', 'required');
        $this->form_validation->set_rules('color_titulo', 'Color titulo', 'required');
        $this->form_validation->set_rules('size_precio', 'Tamaño precio', 'required|numeric|greater_than[1]');
        $this->form_validation->set_rules('size_titulo', 'Tamaño titulo', 'required|numeric|greater_than[1]');

        if ($this->form_validation->run()) {
          $nombre = $this->input->post('nombre');
          $titulo = $this->input->post('titulo');
          $desc = $this->input->post('descripcion');
          $posicion = $this->input->post('posicion');

          $precio = str_replace('.','',$this->input->post('precio'));

          $color_titulo = $this->input->post('color_titulo');
          $color_precio = $this->input->post('color_precio');
          $size_titulo = $this->input->post('size_titulo');
          $size_precio = $this->input->post('size_precio');

          $logo = $_FILES['logo_estado']['name'];
          $img = $_FILES['img']['name'];
          if ($img == "") {
            $img_url = $slide->img_slide;
          }else{
            $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
            $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
            if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$img)) {
              unlink('./public/sucursales/'.$sucursal->ruta.'/'.$img);
            }
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('img')) {
              $data = $this->upload->data();
              $img_url = $data['file_name'];
            } else {
              $error = array('error' => $this->upload->display_errors());
              echo dd($error);
            }
          }
          if ($logo == "") {
            $logo_url = $slide->logo_prod;
          }else{
            $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
            $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
            if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$logo)) {
              unlink('./public/sucursales/'.$sucursal->ruta.'/'.$logo);
            }
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('logo_estado')) {
              $data = $this->upload->data();
              $logo_url = $data['file_name'];
            } else {
              $error = array('error' => $this->upload->display_errors());
              echo dd($error);
            }
          }

          $this->config_model->update_slide($slide->id,$nombre,$titulo,'',$posicion,$precio,$img_url,'',$logo_url,'','',$color_titulo,'',$color_precio,$size_titulo,0,$size_precio);
          $this->config_model->set_refresh($id_sucursal);
          messages('success','Diapositiva editada exitosamente');
          redirect(base_url()."admin/config/editar_slide_tmp_2/".$id_sucursal."/".$slide->id);

        }
      }
      $this->layouts->view('admin/config/edit_tmp_2',compact('sucursal','slide'));
    }
    function check_default($post_string)
    {
      return $post_string == '0' ? FALSE : TRUE;
    }
    public function nuevo_slide_video($id_sucursal)
    {
      $sucursal = $this->sucursal_model->get_sucursal($id_sucursal);
      if ($this->input->post()) {

        $this->form_validation->set_rules('proveedor_video', 'Posicion', 'required|callback_check_default');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run()) {
          $nombre = $this->input->post('nombre');
          $proveedor_video = $this->input->post('proveedor_video');
          $link = $this->input->post('link');

          $estado = 1;
          $this->config_model->insert_slide($id_sucursal,$nombre,'','','','','','','','','',$estado,'','',$proveedor_video,$link);
          $this->config_model->set_refresh($id_sucursal);
          messages('success','Diapositiva creada exitosamente');
          redirect(base_url('admin/config/configurar_slides/'.$id_sucursal));
        }
      }
      $this->layouts->view('admin/config/nuevo_slide_video',compact('sucursal'));
    }
    public function editar_slide_video($id_sucursal,$id_slide)
    {
      $sucursal = $this->sucursal_model->get_sucursal($id_sucursal);
      $slide = $this->config_model->get_slide($id_slide);
      if ($this->input->post()) {

        $this->form_validation->set_rules('proveedor_video', 'Posicion', 'required|callback_check_default');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run()) {
          $nombre = $this->input->post('nombre');
          $proveedor_video = $this->input->post('proveedor_video');
          $link = $this->input->post('link');

          $estado = 1;
          $this->config_model->update_slide($slide->id,$nombre,'','','','','','','',$proveedor_video,$link);
          $this->config_model->set_refresh($id_sucursal);
          messages('success','Diapositiva editada exitosamente');
          redirect(base_url('admin/config/editar_slide_video/'.$id_sucursal."/".$slide->id));
        }
      }
      $this->layouts->view('admin/config/editar_slide_video',compact('sucursal','slide'));
    }
    public function configurar_sucursal($id)
    {
      $sucursal = $this->sucursal_model->get_sucursal($id);
      $conf = $this->config_model->get_config_sucursal($id);
      $img_conf = $this->config_model->get_img_suc($id);

      if ($this->input->post()) {


        $id_sucursal = $this->input->post('id_sucursal');
        $titulo = $this->input->post('titulo');
        $logo = $_FILES['logo']['name'];

        $img_fondo = $_FILES['img_fondo']['name'];
        if ($this->input->post('activa_logo') == 'on') {
          $activa_logo = 1;
        }else{
          $activa_logo = 0;
        }
        $archivos_size = $_FILES['logo']['size']+$_FILES['img_fondo']['size'];
        $archivos_size = round($archivos_size/1000000,2);
        // // VERIFICA TAMAÑO EN DISCO
        //
        $espacio_actual = size_folder($sucursal->ruta);
        $total_mb = $archivos_size+$espacio_actual;

        $color_titulo = $this->input->post('color_titulo');
        $size_titulo = $this->input->post('size_titulo');
        //
        //
        // echo "Sumatoria : ".$total."<br>";die;


        if ($logo == "") {
          $logo_url = $conf->logo;
        }else{
          $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
          $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
          if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$logo)) {
            unlink('./public/sucursales/'.$sucursal->ruta.'/'.$logo);
          }
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          if ($this->upload->do_upload('logo')) {
            $data = $this->upload->data();
            $logo_url = $data['file_name'];
            $verifica = $this->config_model->verifica_img($id_sucursal,$logo_url,'logo');
            if (!$verifica) {
              $this->config_model->insert_img_suc($id_sucursal,$logo_url,'logo',round($_FILES['logo']['size']/1000000,2));
            }
          } else {
            $error = array('error' => $this->upload->display_errors());
            echo dd($error);
          }
        }


        if ($img_fondo == "") {
          $img_fondo_url = $conf->img_fondo;
        }else{
          $config['file_name'] = $sucursal->ruta."_".date('Y-m-d H:i:s');
          $config['upload_path']          = './public/sucursales/'.$sucursal->ruta.'/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
          if (file_exists('./public/sucursales/'.$sucursal->ruta.'/'.$img_fondo)) {
            unlink('./public/sucursales/'.$sucursal->ruta.'/'.$img_fondo);
          }
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          if ($this->upload->do_upload('img_fondo')) {
            $data = $this->upload->data();
            $img_fondo_url = $data['file_name'];
            $verifica = $this->config_model->verifica_img($id_sucursal,$img_fondo_url,'img_fondo');
            if (!$verifica) {
              $this->config_model->insert_img_suc($id_sucursal,$img_fondo_url,'img_fondo',round($_FILES['img_fondo']['size']/1000000,2));
            }

          } else {
            $error = array('error' => $this->upload->display_errors());
            echo dd($error);
          }
        }
        if ($total_mb > round($sucursal->espacio_disco/cantidad_sucursales_empresa($sucursal->id_empresa))) {
          messages('error','Limite de datos excedido , total datos utilizados : '.size_folder($sucursal->ruta)." MB");
          redirect(base_url()."admin/config/configurar_sucursal/".$id_sucursal);
        }
        $this->config_model->update_conf_suc($id_sucursal,$logo_url,$titulo,$img_fondo_url,$activa_logo,$color_titulo,$size_titulo);

        $this->config_model->set_refresh($id_sucursal);
        messages('success','Sucursal editada  exitosamente ');
        redirect(base_url('admin/config/configurar_sucursal/'.$id_sucursal));
      }


      $templates = $this->template_model->get_templates();
      $this->layouts->view('admin/config/config', compact('conf','templates','sucursal','img_conf'));
    }
    public function change_template()
    {
      $id = $this->input->post('id');
      $id_sucursal = $this->input->post('id_sucursal');
      $this->config_model->change_template($id,$id_sucursal);
    }
  }
