<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('doctor_model');
		$this->load->model('department_model');
		$this->load->model('city_model');
		$this->load->library('common_ui');
	}
	public $num = 5;
	//新闻列表
	public function index($page = 0) {
		$data = array();
		$data['newsList'] = $this->doctor_model->get($page, $this->num);
		$data['count'] = $this->doctor_model->get_count();
		$data['page'] = $this->common_ui->ui_page(ceil($data['count']/$this->num), $page, 3, 'news');

		//var_dump($data);
		$this->load_temp(array('function/doctor'), $data);
	}
	public function add() {
		$data = array(
			"id"=> "",
			"cn_name"=> "",
			"en_name"=>  "",
			 "thumb"=>  "",
			 "department"=> "",
			 "tel"=>  "",
			 "addr"=>  "",
			 "charge"=>  "",
			 "city"=>  "",
			 "skill"=>  "",
			 "time"=>  "",
			 "operate"=>  "",
			 "hospital"=>  "",
			 "service"=>  "",
			 "other"=>  "",
			 "create_time"=>  "",
		);
		$data['citys'] = $this->city_model->get(0, 9999);
		$data['departments'] = $this->department_model->get(0, 9999);
		$this->load_temp(array('function/edit_doctor'), $data);
	}
	public function edit($id) {
		$data = $this->doctor_model->get_single($id);
		$data['citys'] = $this->city_model->get(0, 9999);
		$data['departments'] = $this->department_model->get(0, 9999);
		//var_dump($data);
		$this->load_temp(array('function/edit_doctor'), $data);
	}
	public function insert($data) {
		$data['create_time'] = time();
		$this->doctor_model->insert($data);
		$this->go_back();
	}
	public function update() {
		$data = $this->input->post();
		if(empty($data['id'])) {
			$this->insert($data);
		} else {
			$this->doctor_model->update($data);
			$this->go_back();
		}
	}
	public function del($id) {
		$this->doctor_model->del($id);
		$this->go_back();
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */