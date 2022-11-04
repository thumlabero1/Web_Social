<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class topbarStickController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('topbar-Stick');
	}

}

/* End of file topbarStickController.php */
/* Location: ./application/controllers/topbarStickController.php */