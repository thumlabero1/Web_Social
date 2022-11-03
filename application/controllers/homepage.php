<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

}

/* End of file homepage_Controller.php */
/* Location: ./application/controllers/homepage_Controller.php */