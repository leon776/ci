<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends M_Controller {
	private $bodyTpl = "application/document_byuser/tpl/m.xunlei.com/index.tpl";
	private $turnTpl = "application/document_byuser/tpl/m.xunlei.com/turn.tpl";
	private $imgPath = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('turn_model');
		$this->load->model('pro_model');
		$this->load->model('app_model');
		$this->load->model('seo_model');
		$this->load->model('other_model');
		$this->load->library('create_file');
	}
	//生成文件,type为1则为预览文件
	public function create($type = 0) {
		$index = $type == 0 ? 'index' : 'index_test';
		$this->imgPath = $type == 0 ? 'img' : '../../img';
		$filename = "application/document_byuser/file/m.xunlei.com/{$index}.html";
		$tpl = file_get_contents($this->bodyTpl);
		$pro = $this->build_pro($this->pro_model->get_pro());
		$app = $this->build_app($this->app_model->get_app());
		$other = $this->build_other($this->other_model->get_other());
		$seo = $this->seo_model->get_seo();
		$turn = $this->build_turn($this->turn_model->get_download());
		$content_str = sprintf($tpl,
							   $seo['keywords'],
							   $seo['description'],
							   $seo['title'],
							   $turn,
							   $pro, 
							   $app, 
							   $other
							   );
		$this->create_file->createFile($filename, $content_str);
		$this->go_back();
		//echo "<script>location.href='".base_url('application/document_byuser/file')."/{$index}.html';</script>";
	}
	//构造合作伙伴dom结构
	private function build_other($data) {
		$html = '';
		foreach ($data as $key => $value) {
			$html .= '<li><a href="'.$value['url'].'" target="_blank">'.$value['name'].'</a></li>';
		}
		return $html;
	}
	//构造合作应用dom结构
	private function build_app($data) {
		$html = '';
		if (isset($data)) {
			foreach ($data as $key => $value) {
				$html .= '<li class="clist-80">
							<img src="'.$this->imgPath.'/'.$value['thumb'].'" class="clist-pic">
							<span class="clist-name">'.$value['title'].'</span>
							<span class="clist-size">'.$value['size'].'</span>
							<a href="'.$value['url'].'" target="_blank" class="clist-download">下载</a>
							<span class="clist-detail">'.$value['desc'].'</span>
						  </li>';
			}
		}
		return $html;
	}
	//构造产品动态dom结构
	private function build_pro($data) {
		$html = '';
		if (isset($data)) {
			foreach ($data as $key => $value) {
				$newCls = '';
				if($value['uptime'] >= (time() - 3*24*60*60) ) {
					$newCls = 'plist-new-on';
				}
				
				$html .= '
				<li class="plist-'.$key.' '. $newCls .'">
					<img src="'.$this->imgPath.'/'.$value['thumb'].'" data-href="'.$value['page_url'].'" class="plist-pic">
					<div class="plist-new">最近更新</div>
	              	<div class="plist-hover">'.$value['desc'].'
	              		<a href="'.$value['url'].'" class="product-hover">立即下载</a><a href="'.$value['page_url'].'" class="product-hover2">进入官网</a>
	          		</div>
	          		<a href="'.$value['page_url'].'" class="plist-name">'.$value['name'].'</a>
	          		<span class="plist-time">'.date("m-d", $value['uptime']).' 更新</span>
	            </li>';
			}
		}
		return $html;
	}
	//构建轮播图dom结构
	private function build_turn($data) {
		$turnTpl = file_get_contents($this->turnTpl);
		$turn = array(0=>array(),1=>array());
		
		foreach ($data as $key => $value) {
			$turn[$value['turn_pic']]['code_pic'] = ''.$this->imgPath.'/'.$value['code_pic'];
			$turn[$value['turn_pic']]['code_pic_big'] = ''.$this->imgPath.'/'.$value['code_pic_big'];
			$turn[$value['turn_pic']]['jump_url'] = $value['jump_url'];
			$turn[$value['turn_pic']]['down'] = $this->build_downloadlist($value);
		}

		if (empty($turn[0]) || empty($turn[1])) {
			echo '轮播图信息不足，无法生成';
			exit;
		}

		$html = sprintf($turnTpl,
						$turn[0]['jump_url'],
						$turn[0]['down'],
						$turn[0]['code_pic'],
						$turn[0]['code_pic'],
						$turn[0]['code_pic_big'],
						$turn[1]['jump_url'],
						$turn[1]['down'],
						$turn[1]['code_pic'],
						$turn[1]['code_pic'],
						$turn[1]['code_pic_big']
						);
        return $html;
	}
	//构建下拉列表dom结构
	private function build_downloadlist($data) {
		$html = '';
		$text = array(
				'android_url' => array(
						0 => 'Android',
						1 => '下载到本地',
						),
				'ios_url' => array(
						0 => 'App Store',
						1 => '下载到本地',
						),
				'pc_url' => array(
						0 => 'pc客户端',
						1 => '下载',
						),
				);
		foreach ($data as $key => $value) {
			if ($key == 'android_url' && !empty($value)) {
				$html .= '
				<a href="'.$value.'" class="header-dl-ad">
					<span class="header-dl-adtxt">'.$text['android_url'][0].'</span>
					<span class="header-dl-adtxt2">'.$text['android_url'][1].'</span>
				</a>';
			}
			if ($key == 'ios_url' && !empty($value)) {
				$html .= '
				<a href="'.$value.'" class="header-dl-ip">
					<span class="header-dl-adtxt">'.$text['ios_url'][0].'</span>
					<span class="header-dl-adtxt2">'.$text['ios_url'][1].'</span>
				</a>';
			}
			if ($key == 'pc_url' && !empty($value)) {
				$html .= '
				<a href="'.$value.'" class="header-dl-pc">
					<span class="header-dl-adtxt">'.$text['pc_url'][0].'</span>
					<span class="header-dl-adtxt2">'.$text['pc_url'][1].'</span>
				</a>';
			}
		}
		return $html;
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home/home.php */