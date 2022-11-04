<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class faqController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('faq');
	}

}

/* End of file faqController.php */
/* Location: ./application/controllers/faqController.php */