<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pitPointListController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pitpoint-list');
	}

}

/* End of file pitPointListController.php */
/* Location: ./application/controllers/pitPointListController.php */