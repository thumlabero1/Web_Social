<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class 	 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pittube-search-result');
	}

}

/* End of file pitTubeSearchResultcontroller.php */
/* Location: ./application/controllers/pitTubeSearchResultcontroller.php */