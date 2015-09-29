<?php
//ui库
class Common_ui {
	/*
		#分页列表
		#总页数、当前页、每页多少个、跳转的url
	*/
	public function ui_page($pages, $page, $num, $url) {
		$htmlStr = '<div class="pagination pagination-centered">
						<ul>';
		$now = ($page - $num) > 0 ? ($page - $num) : 0;
		$max = min($page + $num, $pages);
		$prePage = $page - 1;
		$nxtPage = $page + 1;
		if($page > 0) {
			$htmlStr .= '<li><a href="'.base_url("index.php/{$url}/index/0") .'">首页</a></li>
						 <li><a href="'.base_url("index.php/{$url}/index/{$prePage}") .'">上一页</a></li>';
		}
		for($i = $now; $i < $max; $i++) {
			$cls =  $i == $page ? "class='active'" : '';
			$htmlStr .= '<li '. $cls .'><a href="'. base_url("index.php/{$url}/index/{$i}") .'/">第'. ($i + 1) .'页</a></li>';
		}
		if(($page + 1) < $pages) {
			$htmlStr .= '<li><a href="'.base_url("index.php/{$url}/index/{$nxtPage}") .'">下一页</a></li>
						 <li><a href="'.base_url("index.php/{$url}/index/{$max}") .'">尾页</a></li>';
		}
		$htmlStr .= '
			<li class="pagination-fast">
				<span>共'. ceil($pages) .'页</span>
				<div class="input-append">
				<input type="text" class="input-mini" value="'. ($page+1) .'"/>
				<a href="javascript:" class="btn" onclick="location.href= \''. urldecode(base_url("index.php/{$url}/index/")) .'\' + \'/\' + (this.previousSibling.previousSibling.value-1)">转至</a>
				</div>
			</li>
			</ul>
		</div>';
		return $htmlStr;
	}
}
