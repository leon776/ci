<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('common_ui');
	}
	public $num = 5;
	public function index($page = 0) {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] =  $data['lang'] == 'cn'? '新闻列表' : 'News';
		$data['newsList'] = $this->news_model->get($page, $this->num);
		$data['count'] = $this->news_model->get_count();
		$data['page'] = $this->common_ui->ui_page(ceil($data['count']/$this->num), $page, 3, 'news');
		$this->load_temp(array(0 => $data['lang'].'/news_list'), $data);
	}
	public function detail($id) {
		$data['lang'] = $this->session->userdata('language');
		$data['new'] = $this->news_model->get_single($id);
		$data['title'] = $data['new']['title'];
		$this->load_temp(array(0 => $data['lang'].'/news_detail'), $data);
	}
}
