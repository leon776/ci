<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pro extends M_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('pro_model');
	}
	//展示
	public function index() {
		$data = array();
		$data['title'] = '产品动态';
		$data['pro'] = $this->pro_model->get_pro();
		$this->load_temp(array('home/pro'), $data);
	}
	//增加信息
	public function add() {
		$postData = $_POST;
		$postData['uptime'] = strtotime($postData['uptime']);
		$this->pro_model->add($postData);
		echo "<script>alert('添加成功')</script>";
		$this->go_back();
	}
	//修改
	public function edit() {
		$postData = $_POST;
		$postData['uptime'] = strtotime($postData['uptime']);
		$this->pro_model->edit($postData);
		echo "<script>alert('修改成功')</script>";
		$this->go_back();
	}
	//删除
	public function del($id) {
		$this->pro_model->del($id);
		echo "<script>alert('删除成功')</script>";
		$this->go_back();
	}
}

/* End of file other.php */
/* Location: ./application/controllers/home/other.php */