<?php
defined('BASEPATH') OR exit('No direct script access allowed');
;
class Music extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//$this->load->model('m_reg');
		//$this->load->library('pagination');
		//$this->load->library('session');
	}


	public function index()
	{
		$this->load->view('music');
	}

}