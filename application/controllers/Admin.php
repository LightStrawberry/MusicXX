<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//$this->load->model('m_reg');
		$this->load->library('pagination');
		$this->load->library('session');
	}

	public function index()
	{	
		$a = $this->session->userdata('userid');
		if(isset($a))
		{
			$this->load->view('admin');
		}
	}


	public function create_article()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$time = time();
	}
}