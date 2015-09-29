<link href="assets/en/css/work.css" rel="stylesheet">
<div class="slide page-heading doctor-heading">

</div>
 
<div class="slide hospital doctor_detail">
	<div class="container"> 
      	<p class="line"></p>
        <div class="row grid cs-style-3"> <!-- 上传图片大小：360*450px -->
            <div class='col co-xs-6 col-sm-6 col-md-3'>
                <figure class="js-pic-360">
                    <img src='admin/attached/image/<?php echo $doctor['thumb']?>'  alt=''>  
                </figure>
            </div>
        
            <div class='col co-xs-6 col-sm-6 col-md-9'>
                <div class="txt"> 
					<h4 class="name"><?php echo $doctor['cn_name']?> </h4>
                    <p class="intro">英文名：<?php echo $doctor['en_name']?></p> 
                    <p class="contact f3">
                        城市：<?php echo $doctor['city']?><br>
                        注册专科：<?php echo $doctor['department']?><br>
                        提供醫療程序及手術:<?php echo $doctor['operate']?>
                    </p>
                    <p class="en">Consultation <br>Cardiac Surgery (Adults and Paediatrics)</p>
                    <p class="contact">
                        电话： <span class="f3"><?php echo $doctor['tel']?></span><br>
                        地址： <span class="f3"><?php echo $doctor['addr']?></span>
                    </p>
                    <p class="contact">医院： <span class="f3"><?php echo $doctor['hospital']?></span></p>
                </div>
            </div> 
        </div><!-- /.row --> 
    </div>
</div><!-- /.slide.doctor -->

<div class="slide hospital doctor">
	<div class="container"> 
    	<dl class="doctor_intro">
        <dt>专业资格</dt>
        <dd><?php echo $doctor['skill']?>
        </dd>
        </dl>
        
        <dl class="doctor_intro">
        <dt>诊治时间</dt>
        <dd><?php echo $doctor['time']?></dd>
        </dl>
        
        <dl class="doctor_intro">
        <dt>门诊收费</dt>
        <dd><?php echo $doctor['charge']?></span>
        </dd>
        </dl> 
        
        
        <dl class="doctor_intro">
        <dt>診所以外提供的服务：<?php echo $doctor['service']?></dt>
        <dd>· Consultation  <span class="spacing">· Cardiac Surgery (Adults and Paediatrics) </span>
        </dd>
        </dl> 
        <p><?php echo $doctor['other']?></p>
        
        <div class="return"><a href="index.php/doctor" title="返回列表">返回列表</a></div>
    </div>
</div><!-- /.slide.doctor -->
