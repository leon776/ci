<div class="nav">
	<ul class="breadcrumb" style="margin-bottom: 5px;">
	  	<li><b class="logo"></b><?php echo $title;?> </li>
	  	<li><?php //echo $functionTitle;?></li>
	  	<li style="float:right">
			<a href="javascript:" onclick="changePassWord()">修改密码</a>
			<span class="divider">/</span>
			当前语言为<?php echo $nowlang;?>，切换为（<a href="<?php echo base_url("index.php/index/change_word/")?>"><?php echo $langchangename;?></a>)
			<span class="divider">/</span>
			欢迎您，admin 
			<span class="divider">/</span>
			<a href="<?php echo base_url('index.php/admin/logout');?>">退出</a>
		</li>
	</ul>
</div>
<div class="content">
<div class="menu navbar">
<div class="navbar-inner">
	<ul class="nav">
	<?php
	foreach ($menuTitles as $key => $value) {
	?>
		<li id="menu-<?php echo $key?>">
		<a href="<?php echo base_url("index.php/index/index/{$key}")?>" target="_self">
			<?php echo $value?>
		</a>
		</li>
		<li class="divider-vertical"></li>
	<?php
	}
	?>
	<script language="javascript">
		common.addClass(common.$("menu-<?php echo $subfunction;?>"), "active");
	</script>
	</div>
</div>
</div>


<script type="text/javascript">
      //打开弹窗
      function changePassWord () {
          var strHtml = 
          '<div class="navbar"><div class="navbar-inner" style="border-radius: 0"><h4>修改密码</h4></div></div>'+
          '<form id="rec_form" class="form-horizontal" action="<?php echo base_url();?>index.php/home/other/add" method="post">'+
            '<input type="hidden" id="usrname" name="usrname" value="<?php 
				echo $admin
            ?>"/>'+
            '<div class="control-group" id="aboutSearchBox">'+
              '<label class="control-label" for="name">旧密码</label>'+
              '<div class="controls">'+
                '<input id="oldpassword" name="oldpassword" type="password" class="input" value="" required onkeyup="" autocomplete="off"/>'+
              '</div>'+
            '</div>'+
            '<div class="control-group" id="aboutSearchBox">'+
              '<label class="control-label" for="name">新密码</label>'+
              '<div class="controls">'+
                '<input id="password" name="password" type="password" class="input" value="" required onkeyup="" autocomplete="off"/>'+
              '</div>'+
            '</div>'+
            '<div class="control-group" id="aboutSearchBox">'+
              '<label class="control-label" for="name">确认新密码</label>'+
              '<div class="controls">'+
                '<input id="password_sure" name="password_sure" type="password" class="input" value="" required onkeyup="" autocomplete="off"/>'+
              '</div>'+
            '</div>'+
            '<div class="control-group">'+
              '<div class="controls">'+
                '<button type="submit" class="btn btn-primary" id="submit">提交</button>'+
                '<button type="button" class="btn" onclick="common.hideFancyBox()" style="margin-left:14px;">取消</button>'+
              '</div>'+
            '</div>'+
          '</form>';
          common.showFancyBox(strHtml,540,260);
          $('#rec_form')[0].action = '<?php echo base_url();?>index.php/admin/change_password';
      }
</script>
<!--弹窗插件start-->
<div id="fancybox-overlay" style="position: fixed;background-color: rgb(119, 119, 119); opacity: 0.7; cursor: pointer; height: 100%; display: none;"></div>
<div id="fancybox-wrap" style="height: auto;display: none;">
  <div id="fancybox-outer">
    <div class="fancybox-bg" id="fancybox-bg-n"></div>
    <div class="fancybox-bg" id="fancybox-bg-ne"></div>
    <div class="fancybox-bg" id="fancybox-bg-e"></div>
    <div class="fancybox-bg" id="fancybox-bg-se"></div>
    <div class="fancybox-bg" id="fancybox-bg-s"></div>
    <div class="fancybox-bg" id="fancybox-bg-sw"></div>
    <div class="fancybox-bg" id="fancybox-bg-w"></div>
    <div class="fancybox-bg" id="fancybox-bg-nw"></div>
    <div id="fancybox-content">
      <!--在这里插内容-->
    </div>
    <a id="fancybox-close" style="display: block;" onclick="common.hideFancyBox()"></a>
</div>
</div>
<!--弹窗插件end-->
