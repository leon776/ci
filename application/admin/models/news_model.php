<?php
class News_model extends CI_Model {
	//列表
	public function __construct() {
		$this->load->database();
		$this->db_name = $this->session->userdata('language').'_news';
	}
	//private $db_name = $this->session->userdata('language').'_news';
	//添加信息
	public function insert($data) {
		unset($data['id']);
		$data['create_time'] = time();
		$this->db->insert($this->db_name, $data); 
	}
	//查询信息列表
	public function get($page, $num) {
		$sql = "SELECT * FROM ".$this->db_name." ORDER BY id DESC 
				LIMIT ". $page * $num .", ". $num;
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		$ret = !empty($ret) ? $ret : NULL;
		return $ret;
	}
	//查询信息详情
	public function get_single($id) {
		$sql = "SELECT * FROM ".$this->db_name." WHERE id = ". $id;
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		$ret = !empty($ret) ? $ret : NULL;
		return $ret[0];
	}
	public function get_count() {
		$sql = "SELECT COUNT(id) FROM ".$this->db_name;
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		$ret = !empty($ret) ? $ret : NULL;
		return $ret[0]["COUNT(id)"];
	}
	
	//删除
	public function del($id) {
		$sql = "DELETE FROM ".$this->db_name." WHERE id = {$id}";
		$query = $this->db->query($sql);
	}
	//修改
	public function update($data) {
		$id = $data['id'];
		unset($data['id']);
		$this->db->where('id', $id);
		$this->db->update($this->db_name, $data); 
	}
}