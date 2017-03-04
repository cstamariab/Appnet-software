<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planes extends CI_Controller {


  public function __construct(){

    parent::__construct();
    $this->layouts->set_title('Planes');
    $this->layouts->setLayout('layout_admin');
    if (!$this->session->userdata('id_admin')) {
      redirect(base_url("super_admin/login"));
    }
  }
  public function index()
  {
    $this->listado();
  }

  public function editar($id)
  {
    if ($this->input->post()) {

      $this->form_validation->set_rules('plan', 'Plan', 'required');
      $this->form_validation->set_rules('espacio_disco', 'Espacio Disco', 'required|callback_check_default');
      $this->form_validation->set_rules('sucursales', 'Sucursales', 'required|callback_check_default');
      $this->form_validation->set_rules('slides', 'Slides', 'required|callback_check_default');

      if ($this->form_validation->run()) {

        $plan = $this->input->post('plan');
        $espacio_disco = $this->input->post('espacio_disco');
        $sucursales = $this->input->post('sucursales');
        $slides = $this->input->post('slides');

        $this->utl_model->update_plan($id,$plan,$espacio_disco,$sucursales,$slides);
        messages('success','Plan editado exitosamente');

      }
    }
    $plan = $this->utl_model->get_plan($id);
    $this->layouts->view('super_admin/planes/editar',compact('plan'));
  }

  public function cambiar_estado_video()
  {
    $id = $this->input->post('id');
    $estado = $this->input->post('estado');

    $this->utl_model->cambiar_estado_video($id,$estado);
    echo json_encode($estado);
  }
  public function listado()
  {
    $planes = $this->utl_model->get_planes();
    $this->layouts->view('super_admin/planes/index',compact('planes'));
  }
  function check_default($post_string)
  {
    return $post_string == '0' ? FALSE : TRUE;
  }
  public function nuevo()
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('plan', 'Plan', 'required');
      $this->form_validation->set_rules('espacio_disco', 'Espacio Disco', 'required|callback_check_default');
      $this->form_validation->set_rules('sucursales', 'Sucursales', 'required|callback_check_default');
      $this->form_validation->set_rules('slides', 'Slides', 'required|callback_check_default');

      if ($this->form_validation->run()) {
        $plan = $this->input->post('plan');
        $espacio_disco = $this->input->post('espacio_disco');
        $sucursales = $this->input->post('sucursales');
        $slides = $this->input->post('slides');

        if ($this->input->post('video') == 'on') {
          $video = 1;
        }else{
          $video = 0;
        }
        $this->utl_model->insert_plan($plan,$espacio_disco,$sucursales,$slides,$video);
        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i>Plan creado exitosamente.</h4>

        </div>');
        redirect(base_url('super_admin/planes/index'));
      }
    }
    $this->layouts->view('super_admin/planes/nuevo');
  }
}
