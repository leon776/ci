<?php
//ui库
class Common_ui {
	/*
		#分页列表
		#总页数、当前页、每页多少个、跳转的url
	*/
	public function ui_page($pages, $page, $num, $url) {
		$htmlStr = '<div class="page">';
		$now = ($page - $num) > 0 ? ($page - $num) : 0;
		$max = min($page + $num, $pages);
		$prePage = $page - 1;
		$nxtPage = $page + 1;
		if($page > 0) {
			$htmlStr .= '<a href="'.base_url("index.php/{$url}/index/0") .'">首页</a>
						 <a class="prev" href="'.base_url("index.php/{$url}/index/{$prePage}") .'">&lt;</a>';
		}
		for($i = $now; $i < $max; $i++) {
			$cls =  $i == $page ? "class='current'" : '';
			$htmlStr .= '<a href="'.base_url("index.php/{$url}/index/{$i}").'/"'. $cls .'>'. ($i + 1) .'</a>';
		}
		if(($page + 1) < $pages) {
			$htmlStr .= '<a class="next" href="'.base_url("index.php/{$url}/index/{$nxtPage}").'">&gt;</a>
			<a href="'.base_url("index.php/{$url}/index/{$max}") .'">尾页</a>';
		}
		$htmlStr .= '</div>';
		return $htmlStr;
	}
}
