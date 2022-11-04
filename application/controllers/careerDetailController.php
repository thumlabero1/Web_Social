<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class careerDetailController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('career-detail');
	}

}

/* End of file carerSearchResultController.php */
/* Location: ./application/controllers/carerSearchResultController.php */