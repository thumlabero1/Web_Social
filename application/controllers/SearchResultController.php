<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class 	searchResultController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('search-result');
	}

}

/* End of file SearchResultController.php */
/* Location: ./application/controllers/SearchResultController.php */