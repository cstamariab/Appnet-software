<?php
class Sucursal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layouts->set_title('Sucursal');
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

		$this->layouts->set_title('Sucursales');

		$sucursales = $this->sucursal_model->get_sucursales();
		$this->layouts->view('super_admin/sucursal/index',compact('sucursales'));
	}
	public function delete_suc()
	{
		$id = $this->input->post('id');
		$ruta = $this->input->post('ruta');
		$this->sucursal_model->delete_suc($id);
		deleteDirectory("./public/sucursales/".$ruta);
		if (file_exists(APPPATH.'controllers/'.ucfirst($ruta).'.php')) {
        unlink(APPPATH.'controllers/'.ucfirst($ruta).'.php');
    }
	}
	public function cambiar_estado()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');

		$estado_verif = $this->sucursal_model->verifica_estado_empresa($id);
		if ($estado_verif == 0) {
			echo json_encode(0);
		}else{
			$this->sucursal_model->update_estado_sucursal($id,$estado);
			if ($estado == 1) {
				echo json_encode(1);
			}else{
				echo json_encode(2);
			}
		}

	}
	public function editar($id_sucursal)
	{
		$this->layouts->set_title('Editar sucursal');
		if ($this->input->post()) {
			$this->form_validation->set_rules('nombre_suc', 'Nombre Sucursal', 'required');

			$this->form_validation->set_rules('template', 'Template', 'required|callback_check_default');

			if ($this->form_validation->run()) {

				$id_template = $this->input->post('template');
				$nombre_suc = $this->input->post('nombre_suc');

				$id_sucursal = $this->sucursal_model->update_sucursal($id_sucursal,$nombre_suc,$id_template);

				$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i>Sucursal editada exitosamente.</h4>
				</div>');
				redirect('super_admin/sucursal/listado');

			}
		}
		$sucursal = $this->sucursal_model->get_sucursal($id_sucursal);

		$templates = $this->template_model->get_templates();
		$this->layouts->view('super_admin/sucursal/editar',compact('sucursal','templates'));
	}
	public function nueva()
	{
		$this->layouts->set_title('Nueva sucursal');
		if ($this->input->post()) {
			$this->form_validation->set_rules('nombre_suc', 'Nombre Sucursal', 'required');
			$this->form_validation->set_rules('ruta', 'Nombre Sucursal', 'required');
			$this->form_validation->set_rules('template', 'Template', 'required|callback_check_default');
			$this->form_validation->set_rules('empresa', 'Empresa', 'required|callback_check_default');


			if ($this->form_validation->run()) {

				$nombre_suc = $this->input->post('nombre_suc');
				$ruta = $this->input->post('ruta');
				$id_template = $this->input->post('template');
				$empresa = $this->input->post('empresa');
				$estado = 1 ; // ACtIVADO

				if (cantidad_sucursales_empresa($empresa) >= sucursales_plan($empresa) ) {
					messages('error', 'Cantidad de sucursales para este plan superado.');
					redirect('super_admin/sucursal/nueva');
				}


				$ruta = trim($ruta);
				$ruta = str_replace('-','_',$ruta);
				$ruta = str_replace(array('.',',',"'",' '),'',$ruta);
				$verifica = $this->sucursal_model->verifica_ruta($ruta);
				if (!$verifica) {
					$id_sucursal = $this->sucursal_model->insert_sucursal($nombre_suc,$ruta,$id_template,$empresa,$estado);
					$this->config_model->insert_config_sucursal($id_sucursal);
					$layout_name = $this->template_model->get_empresa_template($id_sucursal)->temp_nombre;
					$this->controller($ruta,$layout_name,$id_sucursal);
					if (!file_exists('public/sucursales/'.$ruta)) {
						mkdir('public/sucursales/'.$ruta, 0777, true);
					}
					$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i>Sucursal creada exitosamente.</h4>
					</div>');
					redirect('super_admin/sucursal/listado');
				}else{
					$this->session->set_flashdata('error', '<div class="alert alert-error alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i>La ruta especificada ya existe.</h4>
					</div>');
					redirect('super_admin/sucursal/nueva');
				}

			}
		}
		$empresas = $this->empresa_model->get_empresas();
		$templates = $this->template_model->get_templates();
		$this->layouts->view('super_admin/sucursal/nueva',compact('empresas','templates'));
	}

	public function controller ($name,$layout_name,$id_sucursal, $extends = NULL)
	{
		$file = $this->_create_folders_from_name($name, 'controllers');

		$data = '<? ';
		$data .= $this->_class_open($file['file'], __METHOD__, $extends);
		$data .= $this->_crud_methods_contraller($layout_name,$id_sucursal);
		$data .= $this->_class_close();
		$path = APPPATH . 'controllers/' . $file['path'] . ucfirst($file['file']) . '.php';
		write_file($path, $data);

	}
	private function _class_open ($name, $type = NULL, $extends = NULL)
	{
		$string = '';
		$this->_php_open();
		$string .= "class " . ucfirst($name) . " ";
		if ($extends === NULL && $type !== NULL) {
			$string .= "extends CI_Controller";
		}
		if ($extends !== NULL) {
			$string .= "extends $extends ";
		}
		$string .= "\n{";
			return $string;
		}
		private function _php_open ()
		{
			return '<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');' . "\n";
		}
		private function _create_folders_from_name ($name, $base_folder)
		{
			$this->load->helper('directory');
			$name = str_replace('%5C', '/', $name);

			// Check if folders exist. If not, create them.
			$folders = explode('/', $name);

			// Remove the last index, because that is the file
			$file = array_pop($folders);

			// Check if folders exist and create them if they don't
			$path = '';
			if (count($folders)) {
				$current_folder = directory_map(APPPATH . $base_folder);
				$current_path = APPPATH . $base_folder;
				foreach ($folders as $folder) {

					if (! isset($current_folder[$folder])) {
						$this->msg[] = 'Created new folder: ' . $folder;
						mkdir($current_path . '/' . $folder);
					}

					$current_folder = @$current_folder[$folder];
					$current_path .= '/' . $folder;
					$path .= $folder . '/';
				}
			}

			return array('path' => $path, 'file' => $file);
		}
		private function _class_close ()
		{
			return "\n}";
		}
		private function _crud_methods_contraller ($layout_name,$id_sucursal)
		{

			$string = '';
			$string .= "\n\tpublic function __construct() {\n";
				$string .= "\t\tparent::__construct();\n";
				$string .= "\t\t \$this->layouts->setLayout('layout_default') ;\n";
				$string .= "\n\t}\n";


				if ($estado_suc == 1) {
					$template_name = 'templates/'.$sucursal->template;
				}else{
					$template_name = 'templates/404';
				}
				$this->layouts->view($template_name,compact('conf','sucursal'));

				$string .= "\tpublic function index() {\n";
					$string .= "\t\t \$id_sucursal =".$id_sucursal.";\n";
					$string .= "\t\t \$sucursal = \$this->sucursal_model->get_sucursal(\$id_sucursal);\n";
					$string .= "\t\t \$slides = \$this->config_model->get_slides_sucursal(\$id_sucursal);\n";
					$string .= "\t\t \$slides_video = \$this->config_model->get_slides_video(\$id_sucursal);\n";


					$string .= "\t\t \$conf = \$this->config_model->get_config_sucursal(\$id_sucursal);\n";
					$string .= "\t\t \$estado_suc = \$sucursal->estado;";
					$string .= "\t if(\$estado_suc == 1) {\n";
					$string .= "\t\t \$template_name = 'templates/'.\$sucursal->template;\n";
					$string .= "\t }else{\n";
					$string .= "\t\t \$template_name = 'templates/404';\n";
					$string .= "\t }\n";

					$string .= "\t\t \$this->layouts->view(\$template_name,compact('conf','sucursal','slides','slides_video'));";

					$string .= "\n\t}\n";




							return $string;
						}
						function check_default($post_string)
						{
							return $post_string == '0' ? FALSE : TRUE;
						}


					}
