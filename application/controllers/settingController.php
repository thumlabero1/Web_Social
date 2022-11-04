<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class settingController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('setting');
	}

}

/* End of file settingController.php */
/* Location: ./application/controllers/settingController.php */