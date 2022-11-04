<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class supportAndHelpSearchResultController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('support-and-help-search-result');
	}

}

/* End of file supportAndHelpSearchResultController.php */
/* Location: ./application/controllers/supportAndHelpSearchResultController.php */