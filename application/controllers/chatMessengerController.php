<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class chatMessengerController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('chat-messenger');
	}

}

/* End of file chatMessengerController.php */
/* Location: ./application/controllers/chatMessengerController.php */