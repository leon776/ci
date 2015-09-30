<div class="btn-group" style="margin: 9px 0 25px;">
  <p style="margin-bottom:0;">
    <a href="<?php echo base_url();?>/hospital/" class="btn  btn-primary" style="margin-left:0;">返回列表</a>
    
  </p>
</div>
<form id="rec_form" class="form-horizontal" action="<?php echo base_url();?>index.php/hospital/update" method="post">
   <input type="hidden" id="id" name="id" value="<?php
      echo $id;
     ?>" />
   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">医院中文名</label>
    <div class="controls">
     <input id="cn_name" name="cn_name" type="title" class="input" value="<?php
      echo $cn_name;
     ?>" required="" onkeyup="" autocomplete="off" placeholder="不超过12个字"/>
    </div>
   </div>

   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">医院英文名</label>
    <div class="controls">
     <input id="en_name" name="en_name" type="title" class="input" value="<?php
      echo $en_name;
     ?>" required="" onkeyup="" autocomplete="off" placeholder="不超过12个字"/>
    </div>
   </div>

   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">所在城市</label>
    <div class="controls">
     <select name="city" id="city">
       <?php 
        foreach ($citys as $key => $value) {
          ?>
            <option value="<?php echo $value['name']?>" <?php 
              if($city === $value['name']) {
                echo 'selected';
              }
            ?>
            ><?php echo $value['name']?></option>
          <?php
        }
       ?>
     </select>
    </div>
   </div>

   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">医院等级</label>
    <div class="controls">
     <input id="level" name="level" type="text" class="text" value="<?php
      echo $level;
     ?>" required="" onkeyup="" autocomplete="off" placeholder="例：三级甲等"/>
    </div>
   </div>

<div class="control-group" id="">
  <label class="control-label" for="thumb">医院照片</label>
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


   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">电话号码</label>
    <div class="controls">
     <input id="tel" name="tel" type="title" class="number" value="<?php
      echo $tel;
     ?>" required="" onkeyup="" autocomplete="off" placeholder="不超过12个字"/>
    </div>
    </div>



   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">联系地址</label>
    <div class="controls">
     <input id="addr" name="addr" type="title" class="input" value="<?php
      echo $en_name;
     ?>" required="" onkeyup="" autocomplete="off" placeholder="不超过12个字"/>
    </div>
   </div>


   <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">网址</label>
    <div class="controls">
     <input id="web_site" name="web_site" type="title" class="input" value="<?php
      echo $en_name;
     ?>" required="" onkeyup="" autocomplete="off" placeholder="不超过100个字"/>
    </div>
   </div>

       <div class="control-group" id="aboutSearchBox">
    <label class="control-label" for="name">医院简介</label>
    <div class="controls">
     <textarea id="intro" name="intro"><?php
      echo $intro;
     ?></textarea>  
    </div>
   </div>

   <div class="control-group">
    <div class="controls">
     <button type="submit" class="btn btn-primary" id="submit">提交</button>
     <button type="button" class="btn" onclick="common.hideFancyBox()" style="margin-left:14px;">取消</button>
    </div>
   </div>
</form>
<script charset="utf-8" src="<?php echo base_url();?>/js/upload.js"></script>