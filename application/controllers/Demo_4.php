<? class Demo_4 extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		 $this->layouts->setLayout('layout_default') ;

	}
	public function index() {
		 $id_sucursal =72;
		 $sucursal = $this->sucursal_model->get_sucursal($id_sucursal);
		 $slides = $this->config_model->get_slides_sucursal($id_sucursal);
		 $slides_video = $this->config_model->get_slides_video($id_sucursal);
		 $conf = $this->config_model->get_config_sucursal($id_sucursal);
		 $estado_suc = $sucursal->estado;	 if($estado_suc == 1) {
		 $template_name = 'templates/'.$sucursal->template;
	 }else{
		 $template_name = 'templates/404';
	 }
		 $this->layouts->view($template_name,compact('conf','sucursal','slides','slides_video'));
	}

}