<?php defined('BASEPATH') OR exit('No direct script access allowed');
use Carbon\Carbon;
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
		$this->layouts->setLayout('layout_admin');
		$this->layouts->set_title('Index');

		if (!$this->session->userdata('id_admin')) {
			redirect(base_url("super_admin/login"));
		}
	}
	public function index($tipo = null)
	{

		$dt = Carbon::create();
		$dt2 = Carbon::create();
		$primer_dia_mes = $dt->startOfMonth();
		$ultimo_dia_mes = $dt2->endOfMonth();

		$rpt_empresas_nuevas = $this->utl_model->rpt_empresas_nuevas($primer_dia_mes,$ultimo_dia_mes);
		$rpt_empresas_activas =  $this->utl_model->rpt_empresas_activas(1);
		$rpt_empresas_desactivadas =  $this->utl_model->rpt_empresas_activas(0);
		$rpt_planes_x_vencer = $this->utl_model->rpt_planes_x_vencer();
		$rpt_planes_vencen_hoy = $this->utl_model->rpt_planes_vencen_hoy();
		$rpt_sucursales_activas = $this->utl_model->rpt_sucursales_activas();

		if ($tipo != null) {
			$datos = $this->utl_model->ver_reporte_empresa($tipo,$primer_dia_mes,$ultimo_dia_mes);
		}
		$this->layouts->view(
			'super_admin/index/index',
			compact('rpt_empresas_nuevas','rpt_empresas_activas','rpt_empresas_desactivadas',
			'rpt_planes_x_vencer','rpt_planes_vencen_hoy','rpt_sucursales_activas','datos')
		);
	}


}
