<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sidePanelController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('side-panel');
	}

}

/* End of file sidePanelController.php */
/* Location: ./application/controllers/sidePanelController.php */