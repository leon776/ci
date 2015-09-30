<link href="assets/css/home.css" rel="stylesheet">
<div id="homeInitialCarousel" class="carousel slide home-initial-carousel" data-ride="carousel"> 
 	<div class="carousel-inner">
        <div class="item slide1 active" style="background-image:url(assets/upload/slide1.jpg);"> 
            <div class="carousel-caption">
            	<h2>四小时行程</h2>
                <h3>专享久负盛名的亚洲医院</h3>
                <p class="more"><a href="index.php/doctor" title="了解更多">了解更多</a></p> 
            </div>
        </div>
    
    	<div class="item slide2" style="background-image:url(assets/upload/slide1.jpg);"> 
            <div class="carousel-caption">
                <h2>全中文沟通</h2>
                <h3>以病人为本的医生团队</h3>
                <p class="more"><a href="index.php/hospital" title="了解更多">了解更多</a></p> 
            </div>
        </div>
        
        <div class="item slide3 " style="background-image:url(assets/upload/slide1.jpg);"> 
            <div class="carousel-caption">
                <h2>常规手术</h2>0
                <h3>依赖全球最新科技的身体检查和诊疗方案</h3>
                <p class="more"><a href="#" title="了解更多">了解更多</a></p> 
            </div>
        </div>
        
        <div class="item slide4" style="background-image:url(assets/upload/slide1.jpg);"> 
            <div class="carousel-caption">
                <h2>全球医保</h2>
                <h3>标准的国际医疗保险让您全程无忧</h3>
                <p class="more"><a href="index.php/insurance" title="了解更多">了解更多</a></p> 
            </div>
        </div>          
  	</div>
    <!-- Indicators -->
    <div class="container">
  		<ol class="carousel-indicators">
        <li class=""><a href="index.php/hospital"><p><b><span class="icon-hospital"></span></b></p>医院</a></li>
        <li class=""><a href="index.php/doctor"><p><b><span class="icon-doctor"></span></b></p>医生</a></li>
        <li class=""><a href="index.php/operate"><p><b><span class="icon-surgery"></span></b></p>手术</a></li> 
        <li class=""><a href="index.php/insurance"><p><b><span class="icon-insurance"></span></b></p>全球医保</a></li> 
  		</ol>        
    </div>
    <a class="carousel-control left" href="#homeInitialCarousel" data-slide="prev"><span class="fa fa-left"></span></a>
    <a class="carousel-control right" href="#homeInitialCarousel" data-slide="next"><span class="fa fa-right"></span></a>

</div><!-- /.carousel --> 

<div class="slide services">
    <div class="container">			
        <div class="header">
            <h2>格蕾医疗</h2> 
            <h3>一生健康，全球共享</h3>
            <p class="map"><img src="assets/images/map.png" alt="map" class="img-responsive"></p>
        </div>         
    </div><!-- /.container -->
</div><!-- /.section.services -->

<div class="slide latest">		
	<div class="container">
    	<div class="row">			
          	<div class="col col-xs-12 col-sm-6 col-md-6">
          		<div class="title"><a class="more" href="index.php/news/" title="更多">更多 <em>&gt;</em></a> 最新资讯</div>
            	<div class="row news_photo">
                	<div class="col col-xs-12 col-sm-6 col-md-4"><a href="index.php/news/detail/<?php echo $newsList[0]['id']?>" class="js-pic-480"><img src="admin/attached/image/<?php echo $newsList[0]['thumb']?>" width="100%" alt="" class="img-responsive"></a></div>
                    <div class="col col-xs-12 col-sm-6 col-md-8">
                    	<h4 class="name"><a href="index.php/news/detail/<?php echo $newsList[0]['id']?>" title=""><?php echo strip_tags($newsList[0]['title']);?></a></h4>
                        <div class="intro">
                        	<?php echo strip_tags($newsList[0]['content']);?>
                        </div>
                        <p class="more"><a href="index.php/news/detail/<?php echo $newsList[0]['id']?>" title="">查看详情</a></p>
                    </div>
              	</div> 
                
                <ul class="news_list">
                <?php
                if(!empty($newsList)) {
                    foreach ($newsList as $key => $value) {
                        if($key === 0) {continue;}
                        echo '<li><a href="index.php/news/detail/'.$value['id'].'"><span class="date">'.date('Y/m/d', $value['create_time']).'</span> '.$value['title'].'</a></li>';
                    }
                }?>
                </ul>
          	</div>
            
            <div class="col col-xs-12 col-sm-6 col-md-6">
       		  	<div class="title"><a class="more" href="index.php/about" title="更多">更多 <em>&gt;</em></a>联系我们</div>
                <div class="address">
                	<p><img src="assets/images/shenzhen.png" width="100%" alt="shenzhen" class="img-responsive"></p>
                    <p>	地址：  深圳深南大道1002号地王大厦1205<br>
                        邮箱：  info@grey.com<br>
                        邮编：  518000<br>
                        电话：  +86 0755 26008787
                    </p>
                </div>
          	</div>
  		</div>
    </div>
</div><!-- /.section.latest --> 
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/common.min.js"></script>  
<script src="assets/js/hammer.min.js"></script>
<script src="assets/js/jquery.hammer.js"></script>    
<script>
var hammer = new Hammer(document.getElementById("homeInitialCarousel"));
    $('#homeInitialCarousel').hammer().on('swipeleft', function(){
    $(this).carousel('next');
 });
 $('#homeInitialCarousel').hammer().on('swiperight', function(){
    $(this).carousel('prev');
 }); 
</script>
