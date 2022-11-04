<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slidersController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('sliders');
	}

}

/* End of file sliderController.php */
/* Location: ./application/controllers/sliderController.php */