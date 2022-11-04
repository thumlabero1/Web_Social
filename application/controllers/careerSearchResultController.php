<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class careerSearchResultController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('career-search-result');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */