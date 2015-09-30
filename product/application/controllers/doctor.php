<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('doctor_model');
		$this->load->model('city_model');
		$this->load->model('department_model');
		$this->load->library('common_ui');
	}
	public $num = 5;
	public function index($page = 0, $city = '', $depart = '') {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] = $data['lang'] == 'cn'?'联系名医':'Doctor';
		$data['city'] = $city == '' ? '全部' : $city;
		$data['citys'] = $this->city_model->get(0, 100);
		$data['depart'] = $depart == '' ? '全部' : $depart;
		$data['departs'] = $this->department_model->get(0, 100);
		$city = $city == urlencode('全部') ? '' : $city;

		$depart = $depart == urlencode('全部') ? '' : $depart;

		$data['newsList'] = $this->doctor_model->get($page, $this->num, $city, $depart);

		$data['count'] = $this->doctor_model->get_count();
		$data['page'] = $this->common_ui->ui_page(ceil($data['count']/$this->num), $page, 3, 'doctor');
		$this->load_temp(array(0 => $data['lang'].'/doctor_list'), $data);
	}
	public function doctor_detail($id) {
		$data['lang'] = $this->session->userdata('language');
		$data['doctor'] = $this->doctor_model->get_single($id);
		$data['title'] = $data['doctor']['cn_name'];
		$this->load_temp(array(0 => $data['lang'].'/doctor_detail'), $data);
	}
}
