<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllercareer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('career');
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */