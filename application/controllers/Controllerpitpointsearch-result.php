<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllerpitpointsearchresult extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('socialData_Model');
		$dulieu = $this->socialData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );
		$this->load->view('pitpoint-search-result',	);
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */