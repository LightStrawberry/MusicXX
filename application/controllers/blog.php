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
		$list_id = 0;
		$data['list']=$this->getlist($list_id);
		$data['Nextid']=2;
		$data['Lastid']=1;
		$this->load->view('blog',$data);
	}

	public function posts()
	{
		$data['article'] = $this->get_Article_info();
		//var_dump($data);
		$this->load->view('posts',$data);
	}

	public function get($id)
	{
		$list_id = $id - 1;
		$data['list'] = $this->getlist($list_id);
		$data['Nextid'] = $list_id + 2; 
		$data['Lastid'] = $list_id; 
		$this->load->view('blog',$data);
	}

	public function page()
	{
		$showId=$this->uri->segment(3);
		if($showId == 0)
		{
			$id = 1;
		}else{
			$id = $showId;
		}
		//echo $showId;
		//echo $id;
		$this->get($id);
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

	protected  function getlist($id)
	{	
		$list = $this->Blog_m->get_some_list($id);	
		return $list;
	}

	protected function get_Article_info(){
		$showId=$this->uri->segment(3);
		$showArr=$this->article_m->get_id_article($showId);
		return $showArr;
	}
}
