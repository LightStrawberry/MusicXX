<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_m extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->tableName = (isset($arr['tableName'])) ? $arr['tableName'] : 'my_article';
	}

	public function go()
	{
		echo "goxx";
	}

	public function get_all_list(){
		$this->db->order_by("id", "desc"); 
		$query = $this->db->get('posts');
		return $query->result_array();
	}

	public function get_some_list($id){
		$sql = "select * from posts order by id desc limit ?,10";
		$query = $this->db->query($sql, array($id*10));
		return $query->result_array();
	}
}
?>