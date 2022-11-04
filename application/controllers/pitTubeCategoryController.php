<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pitTubeCategoryController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pittube-category');
	}

}

/* End of file pitTubeCategoryController.php */
/* Location: ./application/controllers/pitTubeCategoryController.php */