<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class friendsBirthdayController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('friends-birthday');
	}

}

/* End of file friendsBirthdayController.php */
/* Location: ./application/controllers/friendsBirthdayController.php */