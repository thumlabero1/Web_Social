<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class forumCreateTopicController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('forum-create-topic');
	}

}

/* End of file forumCreatetopic.php */
/* Location: ./application/controllers/forumCreatetopic.php */