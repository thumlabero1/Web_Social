<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class companyLandingController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('company-landing');
	}

}

/* End of file companyLandingController.php */
/* Location: ./application/controllers/companyLandingController.php */