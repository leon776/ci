<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('faq_model');
		$this->load->library('common_ui');
	}
	public $num = 5;
	public function index($page = 0) {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] = '新闻列表';
		$data['faqList'] = $this->faq_model->get($page, $this->num);
		$data['count'] = $this->faq_model->get_count();
		$data['page'] = $this->common_ui->ui_page(ceil($data['count']/$this->num), $page, 3, 'faq');
		$this->load_temp(array(0 => $data['lang'].'/faq'), $data);
	}
}
