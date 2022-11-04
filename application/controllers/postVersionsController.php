<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class postVersionsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('post-versions');
	}

}

/* End of file postVersionsController.php */
/* Location: ./application/controllers/postVersionsController.php */