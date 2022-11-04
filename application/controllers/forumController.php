<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class forumController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('forum');
	}

}

/* End of file forumController.php */
/* Location: ./application/controllers/forumController.php */