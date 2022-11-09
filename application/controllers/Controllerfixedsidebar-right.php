<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllerfixedsidebarright extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('fixed-sidebar-right');
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */