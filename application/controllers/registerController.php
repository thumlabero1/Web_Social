<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registerController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('register');
	}

}

/* End of file registerController.php */
/* Location: ./application/controllers/registerController.php */