<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timelineController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('timeline');
	}

}

/* End of file timelineController.php */
/* Location: ./application/controllers/timelineController.php */