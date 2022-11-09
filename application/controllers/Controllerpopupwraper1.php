<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllerpopupwraper1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('popup-wraper1');
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */