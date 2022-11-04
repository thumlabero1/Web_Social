<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class socialPostDetailController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('social-post-detail');
	}

}

/* End of file socialPostDetailController.php */
/* Location: ./application/controllers/socialPostDetailController.php */