<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class privacyController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('privacy');
	}

}

/* End of file privacyController.php */
/* Location: ./application/controllers/privacyController.php */