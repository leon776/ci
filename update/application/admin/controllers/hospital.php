<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hospital extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('hospital_model');
		$this->load->model('city_model');
		$this->load->library('common_ui');
	}
	public $num = 5;
	//新闻列表
	public function index($page = 0) {
		$data = array();
		$data['newsList'] = $this->hospital_model->get($page, $this->num);
		$data['count'] = $this->hospital_model->get_count();
		$data['page'] = $this->common_ui->ui_page(ceil($data['count']/$this->num), $page, 3, 'news');

		//var_dump($data);
		$this->load_temp(array('function/hospital'), $data);
	}
	public function add() {
		$data = array(
			"id"=> "",
			"cn_name"=> "",
			"en_name"=>  "",
			 "thumb"=>  "",
			 "tel"=>  "",
			 "addr"=>  "",
			 "city"=>  "",
			 "intro"=>  "",
			 "create_time"=>  "",
			 "level" => ""
		);
		$data['citys'] = $this->city_model->get(0, 9999);
		$this->load_temp(array('function/edit_hospital'), $data);
	}
	public function edit($id) {
		$data = $this->hospital_model->get_single($id);
		$data['citys'] = $this->city_model->get(0, 9999);
		//var_dump($data);
		$this->load_temp(array('function/edit_hospital'), $data);
	}
	public function insert($data) {
		$data['create_time'] = time();
		$this->hospital_model->insert($data);
		$this->go_back();
	}
	public function update() {
		$data = $this->input->post();
		if(empty($data['id'])) {
			$this->insert($data);
		} else {
			$this->hospital_model->update($data);
			$this->go_back();
		}
	}
	public function del($id) {
		$this->hospital_model->del($id);
		$this->go_back();
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */