<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class notificationsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('notifications');
	}

}

/* End of file notificationController.php */
/* Location: ./application/controllers/notificationController.php */