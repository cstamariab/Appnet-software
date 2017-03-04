<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informaciones extends CI_Controller {

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
    $this->layouts->setLayout('layout_default');
		$this->layouts->set_title('Appnet');
	}
	public function index()
	{
		$this->acerca_appnet();
	}
  public function acerca_appnet()
  {    
     $this->layouts->view('web/informaciones/acerca_appnet');
  }
  public function planes()
  {
      $this->layouts->view('web/informaciones/planes');
  }
  public function contacto()
  {
      $this->layouts->view('web/informaciones/contacto');
  }
}
