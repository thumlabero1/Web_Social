<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class weatherForecastController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('weather-forecast');
	}

}

/* End of file weatherForecastController.php */
/* Location: ./application/controllers/weatherForecastController.php */