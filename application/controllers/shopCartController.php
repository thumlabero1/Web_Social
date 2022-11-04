<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopCartController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('shop-cart');
	}

}

/* End of file shopCartController.php */
/* Location: ./application/controllers/shopCartController.php */