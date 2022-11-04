<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class favPageController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('fav-page');
	}

}

/* End of file favPageController.php */
/* Location: ./application/controllers/favPageController.php */