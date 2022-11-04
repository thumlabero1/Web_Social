<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class favEventsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('fav-events');
	}

}

/* End of file favEventsController.php */
/* Location: ./application/controllers/favEventsController.php */