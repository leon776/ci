<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance extends My_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$data['lang'] = $this->session->userdata('language');
		$data['title'] =  $data['lang'] == 'cn'? '全球医保' : 'Medicare';
		$this->load_temp(array(0 => $data['lang'].'/insurance'), $data);
	}
}
