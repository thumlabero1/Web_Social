<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class careerController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('career');
	}

}

/* End of file careerController.php */
/* Location: ./application/controllers/careerController.php */