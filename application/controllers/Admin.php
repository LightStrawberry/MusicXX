<?php
defined('BASEPATH') OR exit('No direct script access allowed');
;
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
		$data['all_list'] = $this->article_m->get_all_list();
		if(isset($a))
		{
			$this->load->view('admin',$data);
		}
		else{
			$this->load->view("errors");
		}
	}

	public function create()
	{
		$this->load->view('create');
	}

	public function update()
	{
		$id=$this->uri->segment(3);
		$data['artArr']=$this->article_m->get_id_article($id);
		$this->load->view('update',$data);
	}


	public function create_article()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$subheading = $this->input->post('subheading');
		$time = date('Y-m-d H:i:s');

		$artArr = array(
				"title" => $title,
				"subheading" => $subheading,
				"content" => $content,
				"time" => $time,
			);

		$query = $this->article_m->insert($artArr);
		if($query>0)
		{
			header('Location: /MusicXX/Admin');
		}
	}

	public function update_article(){
		$id=$this->uri->segment(3);
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$subheading = $this->input->post('subheading');
		$time = date('Y-m-d H:i:s');
		$a = array(
				"id" => $id,
				"title" => $title,
				"subheading" => $subheading,
				"content" => $content,
				"time" => $time,
			);

		$b = $this->article_m->update_article($a);
		if($b > 0)
		{
			header('Location: /MusicXX/Admin');
		}
	}

	public function delete_article(){
		$id=$this->uri->segment(3);
		$query = $this->article_m->del_article($id);
		if($query>0)
		{
			header('Location: /MusicXX/Admin');
		}
	}
}