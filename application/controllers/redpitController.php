<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class redpitController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('redpit');
	}

}

/* End of file redpitController.php */
/* Location: ./application/controllers/redpitController.php */