<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class soundnikDetailController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('soundnik-detail');
	}

}

/* End of file soundnikDetailController.php */
/* Location: ./application/controllers/soundnikDetailController.php */