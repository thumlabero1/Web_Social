<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopCheckoutController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('shop-checkout');
	}

}

/* End of file shopCheckoutController.php */
/* Location: ./application/controllers/shopCheckoutController.php */