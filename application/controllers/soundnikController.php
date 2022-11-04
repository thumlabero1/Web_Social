<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class soundnikController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('soundnik');
	}

}

/* End of file soundnikController.php */
/* Location: ./application/controllers/soundnikController.php */