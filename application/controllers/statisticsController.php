<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class statisticsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('statistics');
	}

}

/* End of file statisticController.php */
/* Location: ./application/controllers/statisticController.php */