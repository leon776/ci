<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operate extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('common_ui');
	}
	public function index($id = 1) {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] =  $data['lang'] == 'cn'? '常规手术' : 'Operation';
		$this->load_temp(array(0 => $data['lang'].'/operate/'.$id.'.php'), $data);
	}
}
