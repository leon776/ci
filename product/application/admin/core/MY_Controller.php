<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| 自定义控制器基类
|--------------------------------------------------------------------------
| @package     CCS
| @author      32look Dev Team
| @copyright   Copyright (c) 2012 - 2013, 32look Dev Team.
| @since       Version 1.0
|
*/

class MY_Controller extends CI_Controller 
{	
	public $userdata = array();
	public function __construct() {		
		parent::__construct();
		date_default_timezone_set("PRC");
		$this->load->library('session');
		$this->load->helper('url');
		if(
			empty($this->session->userdata('admin')) &&
			$this->router->fetch_method() !== 'login'
		) {
		   redirect(base_url('index.php/admin/login'));
		}
		if(empty($this->session->userdata('language'))) {
			$this->session->set_userdata('language', 'cn');
			$this->session->set_userdata('language_changename', '英文');
		}
	}
	//加载模板
	public function load_temp($page, $data = array(), $header = 'header', $footer = 'footer') {
		$this->load->view($header, $data);
		foreach ($page as $key => $value) {
			$this->load->view($value);
		}
		$this->load->view($footer);
	}
	//回到上一页
	public function go_back($alert = 1, $msg = '操作成功'){
		if($alert === 1) {
			echo "<script>alert('{$msg}');</script>";
		}
		echo "<script>
		location.href = document.referrer</script>";
	}
}