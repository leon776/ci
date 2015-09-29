<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('common_ui');
	}
	public function index() {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] = '首页';
		$data['newsList'] = $this->news_model->get(0, 4);
		$this->load_temp(array(0 => $data['lang'].'/index'), $data);
	}
	public function change_word() {
		$nl = $this->session->userdata('language');
		if($nl === 'cn' ) {
			$this->session->set_userdata('language', 'en');
			$this->session->set_userdata('language_changename', '中文');
		} else {
			$this->session->set_userdata('language', 'cn');
			$this->session->set_userdata('language_changename', '英文');
		}
		$this->go_back(0);
	}
}
