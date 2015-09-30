<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('hospital_model');
		$this->load->model('city_model');
		$this->load->library('common_ui');
	}
	public $num = 5;
	public function index($page = 0, $city = '') {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] = $data['lang'] == 'cn'?'联系医院':'Hospital';
		$data['city'] = $city == '' ? '全部' : $city;
		$data['citys'] = $this->city_model->get(0, 100);
		$data['newsList'] = $this->hospital_model->get($page, $this->num, $city);
		$data['count'] = $this->hospital_model->get_count();
		$data['page'] = $this->common_ui->ui_page(ceil($data['count']/$this->num), $page, 3, 'hospital');
		$this->load_temp(array(0 => $data['lang'].'/hospital'), $data);
	}
}
