<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {


	public function __construct(){
		parent::__construct();

		$this->layouts->set_title('Usuarios');
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
    $usuarios = $this->usuario_model->get_usuarios();
    $this->layouts->view('super_admin/usuario/index',compact('usuarios'));
  }
  public function permisos($id_usuario)
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('empresa', 'Empresa', 'required|callback_check_default');
      $this->form_validation->set_rules('sucursal', 'Sucursal', 'required|callback_check_default');
      if ($this->form_validation->run()) {
        $empresa  = $this->input->post('empresa');
        $sucursal  = $this->input->post('sucursal');
        $verifica = $this->usuario_model->verifica_permisos_repetidos($id_usuario,$empresa,$sucursal);
        if (!$verifica) {
            $this->usuario_model->insert_permisos_usuario($id_usuario,$empresa,$sucursal);
          $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i>Permiso agregado exitosamente</h4>

          </div>');
        }else{
          $this->session->set_flashdata('error', '<div class="alert alert-error alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i>Permisos ya existentes.</h4>

          </div>');
        }
      }
    }
    $permisos = $this->usuario_model->get_permisos_usuario($id_usuario);
    $empresas = $this->empresa_model->get_empresas();
    $this->layouts->view('super_admin/usuario/permisos',compact('permisos','empresas'));
  }
  public function cambiar_estado()
  {
    $id = $this->input->post('id');
    $estado = $this->input->post('estado');
    $this->usuario_model->update_estado_usuario($id,$estado);
  }
	public function eliminar_usuario()
	{
		$id = $this->input->post('id');
		$this->usuario_model->delete_usuario($id);
	}
  function check_default($post_string)
  {
    return $post_string == '0' ? FALSE : TRUE;
  }
	public function editar($id)
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('usuario', 'Usuario', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			// $this->form_validation->set_rules('password', 'Password', 'required');
			// $this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]');



      if ($this->form_validation->run()) {

        $usuario = $this->input->post('usuario');
        $email = $this->input->post('email');

        $verifica = $this->usuario_model->verifica_usuario($usuario);
        if (!$verifica) {
          $id_usuario = $this->usuario_model->update_usuario($id,$usuario,$email);
          messages('success','Usuario editado exitosamente');
          redirect(base_url('super_admin/usuarios/listado'));
        }else{
          messages('error','Nombre de usuario ya existente , intente nuevamente.');
        }

      }

    }
    $empresas = $this->empresa_model->get_empresas();
    $usuario = $this->usuario_model->get_usuario($id);
    $this->layouts->view('super_admin/usuario/editar',compact('empresas','usuario'));
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
        $this->usuario_model->update_password($id,$pass);
        messages('success','Contraseña editada exitosamente.');
        redirect(base_url('super_admin/usuarios/editar/'.$id));
      }else{
        $id = $this->input->post('id');
        messages('error','Ocurrio un problema.');
        redirect(base_url('super_admin/usuarios/editar/'.$id));
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
      $this->form_validation->set_rules('empresa', 'Empresa', 'required|callback_check_default');
      $this->form_validation->set_rules('sucursal', 'Sucursal', 'required|callback_check_default');


      if ($this->form_validation->run()) {

        $usuario = $this->input->post('usuario');
        $email = $this->input->post('email');
        $pass = sha1($this->input->post('password'));
        $pass2 = $this->input->post('password2');
        $estado = 1;
        $verifica = $this->usuario_model->verifica_usuario($usuario);
        if (!$verifica) {
          $id_usuario = $this->usuario_model->insert_usuario($usuario,$email,$pass,$estado);
          $empresa = $this->input->post('empresa');
          $sucursal = $this->input->post('sucursal');
          $this->usuario_model->insert_permisos_usuario($id_usuario,$empresa,$sucursal);
          messages('success','Se ha enviado un correo al cliente');
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
          $html = "<!DOCTYPE html>
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
                  <a href='http://appnet.cl'><img src='http://appnet.cl/super_admin/images/logo.jpg' alt='logo' style='width: 150px;'></a>
                </div>
                <h3 style='font-size:1.5em; margin-top:1em; color:#999;'>Su cuenta ha sido creada, bienvenido!</h3>
                <p style='margin-bottom:30px; color:#999;'>Se ha registrado una cuenta desde <a style='text-decoration:none; color:orange;' href='http://appnet.cl'>Appnet</a>, con los siguientes datos de usuario:</p>
                <ul style='color:#999; font-size:1.1em; list-style:none;'>
                  <li style='margin-bottom:5px;'>Usuario: ".$usuario."</li>
                  <li style='margin-bottom:5px;'>Contraseña: ".$pass2."</li>
                  <li style='margin-bottom:5px;'>Panel de administracion: <a href='http://www.appnet.cl/admin'>AppNet Admin</a></li>
                </ul>
              </section>

            </body>
          </html>";
					$this->email->initialize($configMail);
					$this->email->from('info@appnet.cl');
					$this->email->to($email);
					$this->email->subject('Email de Contacto');
					$this->layouts->setLayout('layout_default');
					$this->email->message($html);
					$this->email->send();





          redirect(base_url('super_admin/usuarios/listado'));
        }else{
          messages('error','Nombre de usuario ya existente , intente nuevamente.');
        }

      }

    }
    $empresas = $this->empresa_model->get_empresas();

    $this->layouts->view('super_admin/usuario/nuevo',compact('empresas'));
  }
  public function carga_sucursal()
  {
    $this->layouts->setLayout('layout-default');
    $id_empresa = $this->input->post('id_empresa');
    $sucursales = $this->sucursal_model->get_sucursales_byID($id_empresa);
    foreach ($sucursales as  $value) {
      echo "<option value=".$value->id.">".$value->nombre."</option>";
    }

  }
}
