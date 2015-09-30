<?php
class Admin_model extends CI_Model {
	//列表
	public function __construct() {
		$this->load->database();
		$this->db_name = 'admin';
	}
	//private $db_name = $this->session->userdata('language').'_news';
	//添加信息
	public function get_usr($usrname) {
		$sql = "SELECT * FROM ".$this->db_name." WHERE usrname = '{$usrname}'";
		$query = $this->db->query($sql);
		$ret = $query->result_array();
		$ret = !empty($ret) ? $ret : NULL;
		return $ret;
	}
	//修改
	public function update($data) {
		$usrname = $data['usrname'];
		unset($data['oldpassword']);
		unset($data['password_sure']);
		$data['password'] = md5($data['password']);
		$this->db->where('usrname', $usrname);
		$this->db->update($this->db_name, $data); 
	}
}