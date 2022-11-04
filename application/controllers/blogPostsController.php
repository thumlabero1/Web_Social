<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blogPostsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('blog-posts');
	}

}

/* End of file blog-posts.php */
/* Location: ./application/controllers/blog-posts.php */