<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pricePlansController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('price-plans');
	}

}

/* End of file pricePlansController.php */
/* Location: ./application/controllers/pricePlansController.php */