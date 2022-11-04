<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class comingSoonController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('coming-soon');
	}

}

/* End of file comingSoonController.php */
/* Location: ./application/controllers/comingSoonController.php */