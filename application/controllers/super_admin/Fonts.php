<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Carbon\Carbon;
class Fonts extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->layouts->set_title('Fonts');
		$this->layouts->setLayout('layout_admin');
		if (!$this->session->userdata('id_admin')) {
			redirect(base_url("super_admin/login"));
		}
	}
  public function index()
  {
    $this->listado();
  }
  public function listado()
  {
    $fonts = $this->font_model->get_fonts();
    $this->layouts->view('super_admin/fonts/index' , compact('fonts'));
  }
  public function nuevo()
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('nombre_font', 'Nombre', 'required');
      $this->form_validation->set_rules('link_html', 'Link', 'required');
      $this->form_validation->set_rules('propiedad_css', 'Propiedad', 'required');
      if ($this->form_validation->run()){

        $nombre = $this->input->post('nombre_font');
        $link = str_replace(array('<','>'),"",$this->input->post('link_html'));
        $propiedad = str_replace("'",'"', $this->input->post('propiedad_css'));
        $estado = 1;

        $this->font_model->insert_font($nombre,$link,$propiedad,$estado);
        messages('success', 'Font creada exitosamente');
        redirect(base_url('super_admin/fonts/index'));
      }
    }
    $this->layouts->view('super_admin/fonts/nuevo');
  }
  public function eliminar_font($id)
  {
    $this->font_model->delete_font($id);
    messages('success', 'Font eliminada exitosamente');
    redirect(base_url('super_admin/fonts/index'));
  }
  public function cambiar_estado()
  {
    $id = $this->input->post('id');
    $estado = $this->input->post('estado');

    $this->font_model->cambiar_estado_font($id,$estado);
  }

}