<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class supportAndHelpDetailController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('support-and-help-detail');
	}

}

/* End of file supportAndHelpDetailController.php */
/* Location: ./application/controllers/supportAndHelpDetailController.php */