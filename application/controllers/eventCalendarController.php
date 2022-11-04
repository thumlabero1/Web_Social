<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class eventCalendarController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('event-calendar');
	}

}

/* End of file eventCalendarController.php */
/* Location: ./application/controllers/eventCalendarController.php */