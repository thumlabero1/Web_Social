<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllerforumscategory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('forums-category');
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */