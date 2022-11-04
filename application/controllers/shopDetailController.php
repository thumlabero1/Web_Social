<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopDetailController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('shop-detail');
	}

}

/* End of file shopDetailController.php */
/* Location: ./application/controllers/shopDetailController.php */