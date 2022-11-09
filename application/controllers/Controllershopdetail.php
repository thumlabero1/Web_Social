<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controllershopdetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('shop-detail');
	}

}

/* End of file aboutController */
/* Location: ./application/controllers/aboutController */