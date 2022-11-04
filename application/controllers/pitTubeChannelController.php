<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pitTubeChannelController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pittube-channel');
	}

}

/* End of file bitTubechannelController.php */
/* Location: ./application/controllers/bitTubechannelController.php */