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
		$query=$this->db->get('posts');
		return $query->result_array();
	}

}
?>