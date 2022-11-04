<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pitPointController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pitpoint', $data, FALSE);
	}

}

/* End of file pitpointController.php */
/* Location: ./application/controllers/pitpointController.php */