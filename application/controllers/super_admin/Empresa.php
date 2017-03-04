<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Carbon\Carbon;
class Empresa extends CI_Controller {


	public function __construct(){
		parent::__construct();

		$this->layouts->set_title('Empresa');
		$this->layouts->setLayout('layout_admin');
		if (!$this->session->userdata('id_admin')) {
			redirect(base_url("super_admin/login"));
		}
	}
	public function index()
	{

		$this->listado();
	}
	function check_default($post_string)
  {
    return $post_string == '0' ? FALSE : TRUE;
  }
	public function listado()
	{
		$empresas = $this->empresa_model->get_empresas();

		$this->layouts->view('super_admin/empresa/index',compact('empresas'));
	}
	public function nueva()
	{
		if ($this->input->post()) {

			$this->form_validation->set_rules('rut', 'Rut', 'required');
			$this->form_validation->set_rules('razon_social', 'Razon Social', 'required');
			$this->form_validation->set_rules('giro'				, 'Giro', 'required');
			$this->form_validation->set_rules('direccion', 'Direccion', 'required');
			$this->form_validation->set_rules('telefono', 'Telefono', 'required|numeric');
			$this->form_validation->set_rules('celular', 'Celular', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('plan', 'Plan', 'required|callback_check_default');


			if ($this->form_validation->run()) {

				$rut 					= $this->input->post('rut');
				$rut 					= str_replace('.','',$rut);
				$razon_social = $this->input->post('razon_social');
				$giro 				= $this->input->post('giro');
				$direccion 		= $this->input->post('direccion');
				$telefono 		= $this->input->post('telefono');
				$celular			= $this->input->post('celular');
				$email 				= $this->input->post('email');
				$plan					= $this->input->post('plan');

				if ($this->input->post('activada') == 'on') {
					$activada = Carbon::now();
					$finaliza = Carbon::now()->addMonths(1);
					$estado = 1;
				}else{
					$activada = "";
					$finaliza = "";
					$estado = 0;
				}

				$existe_rut = $this->empresa_model->validar_rut($rut);
				if (!$existe_rut) {
					$this->empresa_model->insert_empresa($rut,$razon_social,$giro,$direccion,$telefono,$celular,$email,$plan,$activada,$finaliza,$estado);
					$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i>Empresa ingresada exitosamente.</h4>

					</div>');
				}else{
					$this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i>El rut ingresado ya existe.</h4>
					</div>');
				}
				redirect(base_url()."super_admin/empresa");

			}

		}
		$planes = $this->utl_model->get_planes();
		$this->layouts->view('super_admin/empresa/nueva',compact('planes'));
	}
	public function cambiar_estado()
	{
		$id = $this->input->post('id');
		$this->empresa_model->update_estado_empresa($id);
	}
	public function cambiar_estado_empresa()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		$fecha_inicio = Carbon::now();
		$fecha_fin= Carbon::now()->addMonths(1);
		$this->empresa_model->update_estado_empresa_sucursal($id,$estado,$fecha_inicio,$fecha_fin);
	}
	public function eliminar_empresa()
	{
		$id = $this->input->post('id');
		$sucursales = $this->empresa_model->get_sucursales_empresa($id);
		$this->empresa_model->eliminar_empresa($id);
		foreach ($sucursales as $value) {
			$this->sucursal_model->delete_suc($value->id);
			deleteDirectory("./public/sucursales/".$value->ruta);
			if (file_exists(APPPATH.'controllers/'.ucfirst($value->ruta).'.php')) {
					unlink(APPPATH.'controllers/'.ucfirst($value->ruta).'.php');
			}
		}

	}
	public function editar($id = null)
	{
		if ($id == null) {
			redirect(base_url()."super_admin/empresa/");
		}
		if ($this->input->post()) {

			$this->form_validation->set_rules('razon_social', 'Razon Social', 'required');
			$this->form_validation->set_rules('giro'				, 'Giro', 'required');
			$this->form_validation->set_rules('direccion', 'Direccion', 'required');
			$this->form_validation->set_rules('telefono', 'Telefono', 'required|numeric');
			$this->form_validation->set_rules('celular', 'Celular', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('plan', 'Plan', 'required|callback_check_default');
			if ($this->form_validation->run()) {


				$razon_social = $this->input->post('razon_social');
				$giro 				= $this->input->post('giro');
				$direccion 		= $this->input->post('direccion');
				$telefono 		= $this->input->post('telefono');
				$celular			= $this->input->post('celular');
				$email 				= $this->input->post('email');
				$plan					= $this->input->post('plan');



				$this->empresa_model->update_empresa($id,$razon_social,$giro,$direccion,$telefono,$celular,$email,$plan);
				$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i>Empresa editada exitosamente.</h4>
					</div>');
				redirect(base_url()."super_admin/empresa");
			}

		}
		$empresa = $this->empresa_model->get_datos_empresa($id);
		$planes = $this->utl_model->get_planes();
		$this->layouts->view('super_admin/empresa/editar',compact('empresa','planes'));
	}

}
