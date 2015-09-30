<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('common_ui');
	}
	public function index() {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] = $data['lang'] == 'cn'?'联系我们':'Contact Us';
		$this->load_temp(array(0 => $data['lang'].'/contact'), $data);
	}
}