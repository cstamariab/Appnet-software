<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {


	public function __construct(){

		parent::__construct();
		$this->layouts->set_title('Administrador');
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
		$admins = $this->admin_model->get_administradores();
		$this->layouts->view('super_admin/administrador/index',compact('admins'));
	}
	public function editar($id)
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('usuario', 'Usuario', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			if ($this->form_validation->run()) {
				$usuario = $this->input->post('usuario');
				$email = $this->input->post('email');
				$verifica = $this->admin_model->verifica_admin($usuario);
					// if (!$verifica) {
						$this->admin_model->update_admin($id,$usuario,$email);
						$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i>Administrador editado exitosamente.</h4>
						</div>');
					// }else{
					// 	$this->session->set_flashdata('error', '<div class="alert alert-error alert-dismissible">
					// 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					// 		<h4><i class="icon fa fa-check"></i>Nombre de usuario ya existente , intente nuevamente.</h4>
					//
					// 	</div>');
					// }
			}
		}
		$admin = $this->admin_model->get_admin($id);
		$this->layouts->view('super_admin/administrador/editar',compact('admin'));
	}
	public function cambio_contrasena()
	{
		if ($this->input->post()) {

			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]');
			if ($this->form_validation->run()) {
				$id = $this->input->post('id');
				$pass = sha1($this->input->post('password'));
				$pass2 = sha1($this->input->post('password2'));
				$this->admin_model->update_password($id,$pass);
				$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i>Contraseña editada exitosamente.</h4>
				</div>');
				redirect(base_url('super_admin/administrador/editar/'.$id));
			}else{
				$id = $this->input->post('id');
				$this->session->set_flashdata('error', '<div class="alert alert-error alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i>Ocurrio un problema.</h4>

				</div>');
				redirect(base_url('super_admin/administrador/editar/'.$id));
			}
		}

	}
	public function nuevo()
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('usuario', 'Usuario', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]');
			if ($this->form_validation->run()) {

				$usuario = $this->input->post('usuario');
				$pass = sha1($this->input->post('password'));
				$pass2 = sha1($this->input->post('password2'));
				$email = $this->input->post('email');
				$estado = 1;
				$verifica = $this->admin_model->verifica_admin($usuario);
					if (!$verifica) {
						$this->admin_model->insert_admin($usuario,$pass,$email,$estado);
						$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i>Administrador creado exitosamente.</h4>
						</div>');
						redirect(base_url('super_admin/administrador/listado'));
					}else{
						$this->session->set_flashdata('error', '<div class="alert alert-error alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i>Nombre de usuario ya existente , intente nuevamente.</h4>

						</div>');
					}
			}
		}
		$this->layouts->view('super_admin/administrador/nuevo');
	}
	public function cambiar_estado()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		$this->admin_model->update_estado_admin($id,$estado);
	}
}
