<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('common_ui');
	}
	public function index() {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] = $data['lang'] == 'cn'?'关于我们':'About Us';
		$this->load_temp(array(0 => $data['lang'].'/about'), $data);
	}
}
