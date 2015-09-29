<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class turn extends M_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('turn_model');
	}
	//轮播图管理
	public function index() {
		$data = array();
		$data['title'] = '轮播图管理';
		$data['download'] = $this->turn_model->get_download();
		$this->load_temp(array('home/turn'), $data);
	}
	//add
	public function add() {
		$postData = $_POST;
		$postData['turn_pic'] = $postData['turn_pic'] -1;//编辑看到的是1，实际上是0
		$this->turn_model->add($postData);
		echo "<script>alert('添加成功')</script>";
		$this->go_back();
	}
	//删除
	public function del($id) {
		$this->turn_model->del($id);
		echo "<script>alert('删除成功')</script>";
		$this->go_back();
	}
	//修改
	public function edit() {
		$postData = $_POST;
		$postData['turn_pic'] = $postData['turn_pic'] -1;
		$this->turn_model->edit($postData);
		echo "<script>alert('修改成功')</script>";
		$this->go_back();
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */