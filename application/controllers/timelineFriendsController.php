<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timelineFriendsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('timeline-friends');
	}

}

/* End of file timelineFriendController.php */
/* Location: ./application/controllers/timelineFriendController.php */