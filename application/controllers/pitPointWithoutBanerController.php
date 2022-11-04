<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pitPointWithoutBanerController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pitpoint-without-baner');
	}

}

/* End of file pitPointWithoutBanerController.php */
/* Location: ./application/controllers/pitPointWithoutBanerController.php */