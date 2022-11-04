<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class badgesController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('badges');
	}

}

/* End of file badgesController.php */
/* Location: ./application/controllers/badgesController.php */