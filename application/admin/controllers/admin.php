<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
	}
	//首页，目前仅支持二级目录
	public function login() {
		$postData = $this->input->post();
		if(empty($postData['password'])) {
			$this->load_temp(array('admin'), array('title'=>'请登录'));
			return;
		}
		if(md5($postData['password']) !== $this->get_password($postData['usrname'])) {
			$this->go_back(1, '密码错误');
		} else {
			$this->session->set_userdata('admin', 'admin');
			header("Location:".base_url('index.php')."");
			exit;
		}	
	}

	public function logout() {
		$this->session->unset_userdata('admin');
		$this->go_back();
	}
	public function change_password() {
		$postData = $this->input->post();
		if($postData['password'] !== $postData['password_sure']) {
			$this->go_back(1, '两次输入密码不一致');
		} elseif(md5($postData['oldpassword']) !== $this->get_password($postData['usrname']) ) {
			$this->go_back(1, '旧密码输入不正确');
		} else {
			$this->admin_model->update($postData);
			$this->go_back();
		}
	}
	private function get_password($usrname) {
		$tmp = $this->admin_model->get_usr($usrname);
		return $tmp[0]['password'];
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */