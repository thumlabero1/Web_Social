<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timelineGroupsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('timeline-groups');
	}

}

/* End of file timelineGroupsController.php */
/* Location: ./application/controllers/timelineGroupsController.php */