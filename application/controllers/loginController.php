<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login');
	}

}

/* End of file loginController.php */
/* Location: ./application/controllers/loginController.php */