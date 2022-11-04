<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timelineVideosController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('timeline-videos');
	}

}

/* End of file timelineVideosController.php */
/* Location: ./application/controllers/timelineVideosController.php */