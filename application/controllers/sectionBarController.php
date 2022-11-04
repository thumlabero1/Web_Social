<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sectionBarController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('section-bar');
	}

}

/* End of file sectionBarController.php */
/* Location: ./application/controllers/sectionBarController.php */