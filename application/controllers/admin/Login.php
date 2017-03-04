<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Carbon\Carbon;
class Login extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->layouts->set_title('Login');
		$this->layouts->setLayout('layout_login');

	}

	public function index()
	{

		if ($this->session->userdata('id_user')) {
			redirect(base_url("admin"));
		}
		if ($this->input->post()) {
			$user = $this->input->post('usuario');
			$pass = sha1($this->input->post('password'));
			$datos = $this->login_model->login_validation_user($user,$pass);
			$dt = Carbon::create();
			$miembro_desde = $dt->toFormattedDateString();
			if ($datos->id != null or $datos->id != 0) {
				$data = array(
					'username' => $datos->username,
					'id_user' => $datos->id,
					'fecha_creacion' => $miembro_desde,
					'img_user' => $datos->img_user,
					'color_panel' => $datos->color_panel
				);
				$this->session->set_userdata($data);
				redirect(base_url()."admin");
			}else{
				messages('error','Datos incorrectos, intente nuevamente.');
				redirect(base_url('admin/login'));
			}
		}
		$this->load->view('admin/login/login');
	}
	public function recuperar_contrasena()
	{
		if ($this->input->post()) {
			$email = $this->input->post('email');
			$token = sha1($email."_".date('Y-m-d').rand());

			$this->utl_model->save_token($email,$token);

			$this->load->library("email");
			$configMail = array(
				'protocol' => 'smtp',
				'smtp_host' => 'localhost',
				'smtp_port' => 25,
				'smtp_user' => 'info@appnet.cl',
				'smtp_pass' => '15000',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n"
			);
			$html ="<!DOCTYPE html>
			<html lang='es'>
			<head>
			<meta charset='utf-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge'>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
			<title>Appnet - Su cuenta ha sido creada</title>
			</head>

			<body style='background-color:#151515; padding:8% 15%; font-family:Arial;'>

			<section style='background-color:#242d3c; padding: 8%;'>
			<div style='float: right;'>
			<a href='http://appnet.cl'><img src='http://appnet.cl/public/super_admin/images/logo.jpg' alt='logo' style='width: 150px;'></a>
			</div>
			<h3 style='font-size:1.5em; margin-top:1em; color:#999;'>Email de recuperacion de contraseña</h3>
			<p style='margin-bottom:30px; color:#999;'>Presione en siguiente link para recuperar su contraseña.</p>
			<ul style='color:#999; font-size:1.1em; list-style:none;'>
			<li style='margin-bottom:5px;'><a href='http://www.appnet.cl/admin/login/actualizar_contrasena/".$token."'>http://www.appnet.cl/admin/login/actualizar_contrasena/".$token."</a></li>
			</ul>
			</section>

			</body>
			</html>
			";
			$this->email->initialize($configMail);
			$this->email->from('info@appnet.cl');
			$this->email->to($email);
			$this->email->subject('Email de Contacto');
			$this->layouts->setLayout('layout_default');
			$this->email->message($html);
			$this->email->send();
			$this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<p><i class="icon fa fa-check"></i>Email enviado exitosamente.</p>
			</div>');
		}
		$this->load->view('admin/login/recuperar');
	}
	public function actualizar_contrasena($token)
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]');
			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$pass = sha1($this->input->post('password'));
				$this->utl_model->update_password_user($email,$pass);

				$this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<p><i class="icon fa fa-check"></i>Contraseña modificada exitosamente</p>
				</div>');
				redirect(base_url('admin/login'));
			}
		}
		$email = $this->utl_model->verifica_token($token);
		if ($email != "") {
			$this->layouts->setLayout('layout_default');
			$this->layouts->view('admin/login/actualizar_contrasena',compact('email'));
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-error alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<p><i class="icon fa fa-check"></i>Token incorrecto , intente nuevamente.</p>
			</div>');
			redirect(base_url('admin/login/recuperar_contrasena'));
		}
	}
	public function logout()
	{

		session_destroy();
		redirect(base_url('admin/login'));
	}

}
