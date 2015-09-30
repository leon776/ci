<div class="btn-group" style="margin: 9px 0 25px;">
  <p style="margin-bottom:0;">
    <a href="<?php echo base_url();?>index.php/faq/" class="btn  btn-primary" style="margin-left:0;">返回列表</a>
    
  </p>
</div>
<form id="rec_form" class="form-horizontal" action="<?php echo base_url();?>index.php/faq/insert" method="post">
   <input type="hidden" id="id" name="id" value="0" />
   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">标题</label>
    <div class="controls">
     <input id="title" name="title" type="title" class="input" value="" required="" onkeyup="" autocomplete="off" />
    </div>
   </div>
      <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">位置</label>
    <div class="controls">
     <input id="place" name="place" type="title" class="number" value="" required="" onkeyup="" autocomplete="off" />
    </div>
   </div>
   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="url">内容</label>
    <div class="controls">
     <textarea id="content" name="content" rows="10" autocomplete="off"></textarea>
    </div>
   </div>

   <div class="control-group">
    <div class="controls">
     <button type="submit" class="btn btn-primary" id="submit">提交</button>
     <button type="button" class="btn" onclick="common.hideFancyBox()" style="margin-left:14px;">取消</button>
    </div>
   </div>
</form>
