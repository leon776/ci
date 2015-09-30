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
                    <p class="intro"><?php echo $doctor['en_name']?></p> 
                    <p class="contact f3">
                        City：<?php echo $doctor['city']?><br>
                        Department：<?php echo $doctor['department']?><br>
                        Suport:<?php echo $doctor['operate']?>
                    </p>
                    <p class="en">Consultation <br>Cardiac Surgery (Adults and Paediatrics)</p>
                    <p class="contact">
                        Tel： <span class="f3"><?php echo $doctor['tel']?></span><br>
                        Addr： <span class="f3"><?php echo $doctor['addr']?></span>
                    </p>
                    <p class="contact">Hospital： <span class="f3"><?php echo $doctor['hospital']?></span></p>
                </div>
            </div> 
        </div><!-- /.row --> 
    </div>
</div><!-- /.slide.doctor -->

<div class="slide hospital doctor">
	<div class="container"> 
    	<dl class="doctor_intro">
        <dt>Professional</dt>
        <dd><?php echo $doctor['skill']?>
        </dd>
        </dl>
        
        <dl class="doctor_intro">
        <dt>Time</dt>
        <dd><?php echo $doctor['time']?></dd>
        </dl>
        
        <dl class="doctor_intro">
        <dt>Charge</dt>
        <dd><?php echo $doctor['charge']?></span>
        </dd>
        </dl> 
        
        
        <dl class="doctor_intro">
        <dt>Service：<?php echo $doctor['service']?></dt>
        <dd>· Consultation  <span class="spacing">· Cardiac Surgery (Adults and Paediatrics) </span>
        </dd>
        </dl> 
        <p><?php echo $doctor['other']?></p>
        
        <div class="return"><a href="index.php/doctor" title="Return">Return</a></div>
    </div>
</div><!-- /.slide.doctor -->
