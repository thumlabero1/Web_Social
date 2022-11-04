<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contributionController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('contribution');
	}

}

/* End of file contributionController.php */
/* Location: ./application/controllers/contributionController.php */