<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shop2Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('shop2');
	}

}

/* End of file shop2Controller.php */
/* Location: ./application/controllers/shop2Controller.php */