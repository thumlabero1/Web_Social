<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllersupportandhelpsearchresult extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('support-and-help-search-result');
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */