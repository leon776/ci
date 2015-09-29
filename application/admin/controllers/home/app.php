<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app extends M_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('app_model');
	}
	//展示
	public function index() {
		$data = array();
		$data['title'] = '合作网站';
		$data['app'] = $this->app_model->get_app();
		$this->load_temp(array('home/app'), $data);
	}
	//增加信息
	public function add() {
		$postData = $_POST;
		$this->app_model->add($postData);
		echo "<script>alert('添加成功')</script>";
		$this->go_back();
	}
	//修改
	public function edit() {
		$postData = $_POST;
		$this->app_model->edit($postData);
		echo "<script>alert('修改成功')</script>";
		$this->go_back();
	}
	//删除
	public function del($id) {
		$this->app_model->del($id);
		echo "<script>alert('删除成功')</script>";
		$this->go_back();
	}
}

/* End of file other.php */
/* Location: ./application/controllers/home/other.php */