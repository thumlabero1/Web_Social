<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllerwelcome_message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */