<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//$this->load->model('m_reg');
		$this->load->library('pagination');
		$this->load->library('session');
	}

	public function index()
	{
		$data['list']=$this->getlist();
		$data['fuck']="xxxx";
		$this->load->view('blog',$data);
		//var_dump($data);
	}

	public function post()
	{

	}

	public function login()
	{
		$name = $this->input->post('name');
		$passwd = $this->input->post('passwd');

		$res = mysql_query("select * from users where username = '$name' and password ='$passwd'");

		if ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
		        // login seccess
		        // redirect post.php
		        session_start();
		        $_SESSION['userid'] = $row['id'];
		        header('Location: /MusicXX/Admin');
		    }
		    /*(else{
		      echo "error";
		    }*/
		$this->load->view('login');
	}



	protected  function getlist()
	{
		$list = $this->Blog_m->get_all_list();
		return $list;
	}
}
