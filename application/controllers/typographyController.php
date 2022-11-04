<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class typographyController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('typography');
	}

}

/* End of file typographyController.php */
/* Location: ./application/controllers/typographyController.php */