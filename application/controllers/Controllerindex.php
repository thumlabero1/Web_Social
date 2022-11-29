<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllerindex extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->view('showData_View');
		$this->load->model('socialData_Model');
		$dulieu = $this->socialData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );//change dulieu to array
		//echo '<pre>';
		//var_dump($dulieu);
		
		$this->load->view('index', $dulieu, FALSE);
		//$this->load->view('index');
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */