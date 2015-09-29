<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends My_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('faq_model');
		$this->load->library('common_ui');
	}
	public $num = 5;
	//新闻列表
	public function index($page = 0) {
		$data = array();
		$data['newsList'] = $this->faq_model->get($page, $this->num);
		$data['count'] = $this->faq_model->get_count();
		$data['page'] = $this->common_ui->ui_page(ceil($data['count']/$this->num), $page, 3, 'news');

		//var_dump($data);
		$this->load_temp(array('function/faq'), $data);
	}
	public function add() {
		$this->load_temp(array('function/add_faq'), array());
	}
	public function edit($id) {
		$data = $this->faq_model->get_single($id);
		$this->load_temp(array('function/edit_faq'), $data);
	}
	public function insert() {
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'place' => $this->input->post('place'),
		);
		$this->faq_model->insert($data);
		$this->go_back();
	}
	public function update() {
		$data = array(
			'id' => $this->input->post('id'),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'place' => $this->input->post('place'),
		);
		$this->faq_model->update($data);
		$this->go_back();
	}
	public function del($id) {
		$this->faq_model->del($id);
		$this->go_back();
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */