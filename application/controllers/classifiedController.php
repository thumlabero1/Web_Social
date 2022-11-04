<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class classifiedController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('classified');
	}

}

/* End of file classifieldController.php */
/* Location: ./application/controllers/classifieldController.php */