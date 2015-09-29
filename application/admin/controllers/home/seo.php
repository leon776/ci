<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seo extends M_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('seo_model');
	}
	//表单展示
	public function index() {
		$data = array();
		$data['seo'] = $this->seo_model->get_seo();
		$this->load_temp(array('home/seo'), $data);
	}
	//修改信息
	public function edit() {
		$postData = $_POST;
		$this->seo_model->updata_seo($postData);
		echo "<script>alert('修改成功')</script>";
		$this->go_back();
	}
}

/* End of file seo.php */
/* Location: ./application/controllers/home/seo.php */