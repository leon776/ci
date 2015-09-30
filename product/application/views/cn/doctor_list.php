<link href="assets/css/work.css" rel="stylesheet">
<div class="slide page-heading doctor-heading">
     <div class="container">
     	<div class="select-header">
            <button type="button" class="select-toggle collapsed" data-toggle="collapse" data-target=".select-department">
                <span><?php echo urldecode($depart);?></span>
            </button>
            <div class="select-department select-collapse collapse">
                <ul class="nav navbar-nav">
                <li class=""><a href="index.php/doctor/index/0/<?php echo $city;?>/全部">全部科市</a></li>
                 <?php
                    foreach ($departs as $key => $value) {
                        echo '<li class=""><a href="index.php/doctor/index/0/'.$city.'/'.$value['name'].'" data="index.php/doctor/index/0/'.$city.'/'.$value['name'].'">'.$value['name'].'</a></li>';
                    }
                ?>
                <!--
                <li class=''><a href="javascript:" title="耳鼻喉科">耳鼻喉科</a></li> 
                <li class=''><a href="doctor.html" title="心脏科">心脏科</a></li>
                <li class=''><a href="doctor.html" title="生殖科">生殖科</a></li>
                <li class=''><a href="doctor.html" title="肾科">肾科</a></li>
                <li class=''><a href="doctor.html" title="肿瘤科">肿瘤科</a></li>
                <li class=''><a href="doctor.html" title="骨科">骨科</a></li>
                <li class=''><a href="doctor.html" title="妇产科">妇产科</a></li>
                <li class=''><a href="doctor.html" title="泌尿科">泌尿科</a></li>
                -->
                </ul>
            </div><!--/.nav-collapse --> 
       	</div>

         <div class="select-header">
            <button type="button" class="select-toggle collapsed" data-toggle="collapse" data-target=".select-city">
                <span><?php echo urldecode($city);?></span>
            </button>
            <div class="select-city select-collapse collapse">
                <ul class="nav navbar-nav">
                <li class=""><a href="index.php/doctor/index/0/全部/<?php echo $depart;?>/">全部城市</a></li>
                <?php
                    foreach ($citys as $key => $value) {
                        echo '<li class=""><a href="index.php/doctor/index/0/'.$value['name'].'/'.$depart.'" data="index.php/doctor/index/0/'.$value['name'].'">'.$value['name'].'</a></li>';
                    }
                ?>
                </ul>
            </div><!--/.nav-collapse -->
            <input type="hidden" id="depart" value=""> 
            <input type="hidden" id="city" value=""> 
        </div>
        <h1>联系名医</h1>
     </div>
</div>
 
<div class="slide hospital doctor">
	<div class="container"> 
 <?php if(!empty($newsList)){foreach ($newsList as $key => $value) {?>
        <div class="row grid cs-style-3"> <!-- 上传图片大小：360*450px -->
            <div class='col co-xs-6 col-sm-6 col-md-3'>
                <figure>
                    <a href="index.php/doctor/doctor_detail/<?php echo $value['id']?>" class="js-pic-360"><img src='admin/attached/image/<?php echo $value['thumb']?>'  alt=''></a>
                </figure>
            </div>
        
            <div class='col co-xs-6 col-sm-6 col-md-9'>
                <div class="txt">
                	<h4 class="name"><?php echo $value['cn_name']?> </h4>
                    <p class="intro">注册专科：<?php echo $value['department']?></p> 
					<p class="contact">
                        电话： <?php echo $value['tel']?> <br>
                        地址： <?php echo $value['addr']?><br>
                        收费： $<?php echo $value['charge']?>起<br>
                        医院： <?php echo $value['hospital']?>
                    </p>
                    <div class="more">
                    	<a href="index.php/doctor/doctor_detail/<?php echo $value['id']?>" title="了解更多">了解更多 <b>&gt;</b></a>
                    </div>
                </div>
            </div> 
            <div class="line"></div>
        </div><!-- /.row -->
      <?php }}?>   
        <?php echo $page;?>  
        <!--End page-->
    </div>
</div><!-- /.slide.categories -->
