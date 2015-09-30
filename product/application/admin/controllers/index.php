<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('common_ui');
	}
	//首页，目前仅支持二级目录
	public function index($subfunction = 'news', $arg = '') {
		$menuTitles = array(
							'news'  => '新闻管理',
							'hospital'  => '医院管理',
							'doctor'  => '医生管理',
							'department'  => '科室管理',
							'city'  => '地区管理',
							'faq'  => 'FAQ管理',
						);
		$data['title']         = '格蕾官网后台1.0 - beta';
		$data['subfunction']   = urldecode($subfunction);
		$data['iframe']        = base_url('/index.php/').'/'.$subfunction;
		$data['functionTitle'] = $menuTitles[$subfunction];
		$data['menuTitles']    = $menuTitles;
		$data['admin']    = $this->session->userdata('admin');
		$data['langchangename']= $this->session->userdata('language_changename');
		$data['nowlang']= $this->session->userdata('language') === 'cn' ? '中文' : '英文';
		$this->load_temp(array('menu','index'), $data);
	}
	//切换数据语言
	public function change_word() {
		$nl = $this->session->userdata('language');
		if($nl === 'cn' ) {
			$this->session->set_userdata('language', 'en');
			$this->session->set_userdata('language_changename', '中文');
		} else {
			$this->session->set_userdata('language', 'cn');
			$this->session->set_userdata('language_changename', '英文');
		}
		$this->go_back(0);
	}
	//上传图片
	public function upload() {
		$time = md5(microtime());
		$files = $_FILES['file'];
		$img_dir = dirname(__FILE__) . '/' . "../../../admin/attached/image/".date("Ymd");
		$lastName = $files['name'];
		$lastName = substr(strrchr($lastName, '.'), 1);
		$pic_name = "/screen-".$time.".".$lastName;
		if(!is_dir($img_dir)){
			mkdir($img_dir, 0777);
		};
		//var_dump($img_dir);
		move_uploaded_file($files['tmp_name'], $img_dir.$pic_name);
		$img = getimagesize($img_dir.$pic_name);
		$ret = array();
		$ret['name'] = date("Ymd").$pic_name;
		$ret['width'] = $img[0];
		$ret['height'] = $img[1];
		echo json_encode($ret);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */