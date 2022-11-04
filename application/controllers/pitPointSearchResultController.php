<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pitPointSearchResultController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pitpoint-search-result');
	}

}

/* End of file pitPointSearchResultController.php */
/* Location: ./application/controllers/pitPointSearchResultController.php */