<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllermanagepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('socialData_Model');
		$dulieu = $this->socialData_Model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu );
		$this->load->view('manage-page', $dulieu, FALSE);
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */