<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class newsFeedController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('newsfeed');
	}

}

/* End of file newsFeedController.php */
/* Location: ./application/controllers/newsFeedController.php */