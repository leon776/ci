<div class="main">

  <form id="rec_form" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/login" method="post">
   <h2>格蕾医疗官网后台-beta1.0</h2>
   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">用户名</label>
    <div class="controls">
     <input id="usrname" name="usrname" type="text" class="input" value="" required="" onkeyup="" autocomplete="off" />
    </div>
   </div>
   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">密码</label>
    <div class="controls">
     <input id="password" name="password" type="password" class="input" value="" required="" onkeyup="" autocomplete="off" />
    </div>
   </div>
   <div class="control-group">
    <div class="controls">
     <button type="submit" class="btn btn-primary" id="submit">提交</button>
     <button type="button" class="btn" onclick="common.hideFancyBox()" style="margin-left:14px;">取消</button>
    </div>
   </div>
  </form>
</div>
<!--main-->
</div>
<!--content-->
<style>
	#rec_form{
		display: block;
		margin: 100px auto;
		width: 420px;
	}
	#rec_form h2{
		text-align: center;
		font-size: 16px;margin: 50px 0;
	}
	.control-group{
		margin-left: -70px;
	}
</style>