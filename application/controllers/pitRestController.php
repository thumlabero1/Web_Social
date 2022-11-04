<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pitRestController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pitrest');
	}

}

/* End of file popUpModalsController.php */
/* Location: ./application/controllers/popUpModalsController.php */