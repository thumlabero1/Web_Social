<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class favPageCreateController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('fav-page-create');
	}

}

/* End of file favPageCreateController.php */
/* Location: ./application/controllers/favPageCreateController.php */