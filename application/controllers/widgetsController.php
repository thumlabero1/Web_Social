<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class widgetsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('widgets');
	}

}

/* End of file widgetController.php */
/* Location: ./application/controllers/widgetController.php */