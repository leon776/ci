<div class="btn-group" style="margin: 9px 0 25px;">
  <p style="margin-bottom:0;">
    <a href="<?php echo base_url();?>index.php/news/" class="btn  btn-primary" style="margin-left:0;">返回列表</a>
    
  </p>
</div>
<form id="rec_form" class="form-horizontal" action="<?php echo base_url();?>index.php/news/insert" method="post">
   <input type="hidden" id="id" name="id" value="0" />
   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">新闻标题</label>
    <div class="controls">
     <input id="title" name="title" type="title" class="input" value="" required="" onkeyup="" autocomplete="off" />
    </div>
   </div>
   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="url">新闻内容</label>
    <div class="controls">
     <textarea id="content" name="content" autocomplete="off"></textarea>
    </div>
   </div>
<div class="control-group" id="">
  <label class="control-label" for="thumb">新闻封面</label>
  <div class="controls">
    <input type="file" id="file" style="visibility:hidden;position:absolute;top:-9999em" onchange="transfer(this.files, $('#dropBox_1')[0])" />
    <input name="thumb" type="hidden" id="pic1" size="50" readonly="readonly" value="<?php
      echo $thumb;
     ?>"/>
  <div class="drop_img">
    <div class="uploadpic" id="dropBox_1" data-width="0" data-height="0" nth="1">
    <label for="file" style="width:100%;height:100%;"><img style="width:100%;height:100%;" id="pic_url" src="
<?php
      echo base_url('attached/image/'.$thumb);
     ?>
    "></label>
  </div>
  <div class="process" style="display:">
    <progress id="p_1" max="100" value="0"></progress>
    <span style="display:none"></span>
  </div>
    <span></span>
    </div>
  </div>
</div>
   <div class="control-group">
    <div class="controls">
     <button type="submit" class="btn btn-primary" id="submit">提交</button>
     <button type="button" class="btn" onclick="common.hideFancyBox()" style="margin-left:14px;">取消</button>
    </div>
   </div>
</form>
<script charset="utf-8" src="<?php echo base_url();?>/js/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo base_url();?>/js/kindeditor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
            window.editor = K.create('#content', {
              width : '80%',
              height : '600px'
            });
        });
</script>
<script charset="utf-8" src="<?php echo base_url();?>/js/upload.js"></script>