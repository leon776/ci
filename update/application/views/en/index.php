<link href="assets/en/css/home.css" rel="stylesheet">
<div id="homeInitialCarousel" class="carousel slide home-initial-carousel" data-ride="carousel"> 
 	<div class="carousel-inner">
        <div class="item slide1 active" style="background-image:url(assets/en/upload/slide1.jpg);"> 
            <div class="carousel-caption">
                <h2>Four hours journey</h2>
                <h3>Exclusive prestigious hospital in Asia</h3>
                <p class="more"><a href="index.php/hospital" title="Learn More">Learn More</a></p> 
            </div>
        </div>
    
        <div class="item slide2" style="background-image:url(assets/en/upload/slide1.jpg);"> 
            <div class="carousel-caption">
                <h2>All Chinese communication</h2>
                <h3>Based on the patient doctor team</h3>
                <p class="more"><a href="index.php/doctor" title="Learn More">Learn More</a></p> 
            </div>
        </div>
        
        <div class="item slide3" style="background-image:url(assets/en/upload/slide1.jpg);"> 
            <div class="carousel-caption">
                <h2>Depend on the latest technology</h2>
                <h3>of the world's physical examination and diagnosis and treatment plan</h3>
                <p class="more"><a href="index.php/surgery" title="Learn More">Learn More</a></p> 
            </div>
        </div>
        
        <div class="item slide4" style="background-image:url(assets/en/upload/slide1.jpg);"> 
            <div class="carousel-caption">
                <h2>Medicare</h2>
                <h3>The standard of international medical insurance let you all the way</h3>
                <p class="more"><a href="index.php/insurance" title="Learn More">Learn More</a></p> 
            </div>
        </div>          
    </div>
    <!-- Indicators -->
    <div class="container">
  		<ol class="carousel-indicators">
        <li class=""><a href="index.php/hospital"><p><b><span class="icon-hospital"></span></b></p>Hospital</a></li>
        <li class=""><a href="index.php/doctor"><p><b><span class="icon-doctor"></span></b></p>Doctor</a></li>
        <li class=""><a href="index.php/operate"><p><b><span class="icon-surgery"></span></b></p>Operation</a></li> 
        <li class=""><a href="index.php/insurance"><p><b><span class="icon-insurance"></span></b></p>Medicare</a></li> 
  		</ol>        
    </div>
        <a class="carousel-control left" href="#homeInitialCarousel" data-slide="prev"><span class="fa fa-left"></span></a>
    <a class="carousel-control right" href="#homeInitialCarousel" data-slide="next"><span class="fa fa-right"></span></a>

</div><!-- /.carousel --> 

<div class="slide services">
    <div class="container">			
        <div class="header">
             <h2>Gery Medical</b></h2> 
            <h3>Life time health management by medical globalization</h3>
            <p class="map"><img src="assets/en/images/map.png" alt="map" class="img-responsive"></p>
        </div>         
    </div><!-- /.container -->
</div><!-- /.section.services -->

<div class="slide latest">		
	<div class="container">
    	<div class="row">			
          	<div class="col col-xs-12 col-sm-6 col-md-6">
          		<div class="title"><a class="more" href="index.php/news/" title="More">More <em>&gt;</em></a> Latest News</div>
            	<div class="row news_photo">
                	<div class="col col-xs-12 col-sm-6 col-md-4"><a href="index.php/news/detail/<?php echo $newsList[0]['id']?>" class="js-pic-480"><img src="admin/attached/image/<?php echo $newsList[0]['thumb']?>" width="100%" alt="" class="img-responsive"></a></div>
                    <div class="col col-xs-12 col-sm-6 col-md-8">
                    	<h4 class="name"><a href="index.php/news/detail/<?php echo $newsList[0]['id']?>" title=""><?php echo strip_tags($newsList[0]['title']);?></a></h4>
                        <div class="intro">
                        	<?php echo strip_tags($newsList[0]['content']);?>
                        </div>
                        <p class="more"><a href="index.php/news/detail/<?php echo $newsList[0]['id']?>" title="">View More</a></p>
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
                <div class="title"><a class="more" href="index.php/contact" title="More">More <em>&gt;</em></a> Contact Us</div>
                <div class="address">
                    <p><img src="assets/images/shenzhen.png" width="100%" alt="shenzhen" class="img-responsive"></p>
                    <p> Address: shenzhen shennan avenue diwang<br>
                        Email：  info@grey.com<br>
                        Postcode：  518000<br>
                        Tel：  +86 0755 26008787
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