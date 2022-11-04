<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('shop');
	}

}

/* End of file shopController.php */
/* Location: ./application/controllers/shopController.php */