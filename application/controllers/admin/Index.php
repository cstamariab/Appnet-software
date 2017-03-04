<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/
	public function __construct(){
		parent::__construct();
		$this->layouts->setLayout('layout_usuario');
		$this->layouts->set_title('Inicio');

		if (!$this->session->userdata('id_user')) {
			redirect(base_url("admin/login"));
		}
	}
	public function cambio_contrasena()
	{

		if ($this->input->post()) {

			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]');
			if ($this->form_validation->run()) {
				$pass = sha1($this->input->post('password'));
				$pass2 = sha1($this->input->post('password2'));
				$this->usuario_model->update_password($this->session->userdata('id_user'),$pass);
				messages('success','Contraseña editada exitosamente.');
				redirect(base_url('admin'));
			}

		}
	}
	public function index()
	{
		$datos_user = $this->utl_model->select_datos_user($this->session->userdata('id_user'));
		if ($this->input->post()) {


			$this->form_validation->set_rules('username', 'Usuario', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			if ($this->form_validation->run()) {

				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$color_panel = $this->input->post('color_skin');
				$archivo = $_FILES['userfile']['name'];
				$filename = $datos_user->img_user;
				if ($archivo != "") {
					unlink('./public/admin/img_user/'.$archivo);
					$config['upload_path']          = './public/admin/img_user/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']             = 100;
					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('userfile'))
					{
						$error = array('error' => $this->upload->display_errors());

					}
					else
					{
						$data = $this->upload->data();
						$filename = $data['file_name'];
						$this->session->set_userdata('img_user',$filename);
					}
				}

				$this->session->set_userdata('color_panel',$color_panel);
				$verifica = $this->usuario_model->verifica_usuario($username);

				if ($verifica) {
					$username = $datos_user->username;

				}
				$this->usuario_model->update_usuario_web($this->session->userdata('id_user'),$username,$email,$filename,$color_panel);
				messages('success','Usuario editado exitosamente');

				redirect(base_url('admin'));

			}
		}
		$sucursales = $this->sucursal_model->get_sucursales_usuario($this->session->userdata('id_user'));
		$suc_activas = $this->utl_model->select_suc_estado_usuario(1,$this->session->userdata('id_user'));
		$suc_desact = $this->utl_model->select_suc_estado_usuario(0,$this->session->userdata('id_user'));
		
		$this->layouts->view('admin/index/index',compact('sucursales','suc_activas','suc_desact','datos_user'));
	}
	function check_default($post_string)
	{
		return $post_string == '0' ? FALSE : TRUE;
	}

}
