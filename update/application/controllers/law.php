<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Law extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('common_ui');
	}
	public function index() {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] = $data['lang'] == 'cn'?'法律声明':'Legal-Notice';
		$this->load_temp(array(0 => $data['lang'].'/law'), $data);
	}
}
