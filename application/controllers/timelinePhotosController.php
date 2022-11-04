<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class timelinePhotosController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('timeline-photos');
	}

}

/* End of file timelinePhotosController.php */
/* Location: ./application/controllers/timelinePhotosController.php */