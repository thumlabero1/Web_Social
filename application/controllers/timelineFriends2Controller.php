<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timelineFriends2Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('timeline-friends2');
	}

}

/* End of file timelineFriend2Controller.php */
/* Location: ./application/controllers/timelineFriend2Controller.php */