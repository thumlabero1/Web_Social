<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllerredpitcategory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('redpit-category');
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */