<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class supportAndHelpController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('support-and-help');
	}

}

/* End of file supportAndHelpController.php */
/* Location: ./application/controllers/supportAndHelpController.php */