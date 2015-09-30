<link href="assets/en/css/work.css" rel="stylesheet">
<div class="slide page-heading">
     <div class="container">
     	<div class="select-header">
            <button type="button" class="select-toggle collapsed" data-toggle="collapse" data-target=".select-collapse">
                <span><?php echo urldecode($city);?></span>
            </button>
            <div class="select-collapse collapse">
                <ul class="nav navbar-nav">
                <li class=""><a href="index.php/hospital/index/0/">All City</a></li>
                <?php
                    foreach ($citys as $key => $value) {
                        echo '<li class=""><a href="index.php/hospital/index/0/'.$value['name'].'">'.$value['name'].'</a></li>';
                    }
                ?>
                </ul>
            </div><!--/.nav-collapse --> 
       	</div>
        <h1>Hospital</h1>
     </div>
</div>
 
<div class="slide hospital">
	<div class="container"> 
     <?php foreach ($newsList as $key => $value) {?>
        <div class="row grid cs-style-3"> <!-- 上传图片大小：480*312px -->
            <div class='col co-xs-6 col-sm-6 col-md-4'>
                <figure>
                    <div class="js-pic-480">
                    <img src='admin/attached/image/<?php echo $value['thumb']?>'>
                    </div>
                    <figcaption>
                        <div class="name"> 
                            <h3><em><?php echo $value['level'];?></em> <?php echo $value['cn_name'];?></h3>
                            <span><?php echo $value['en_name'];?></span> 
                        </div>
                    </figcaption>
                </figure>
            </div>
        
            <div class='col co-xs-6 col-sm-6 col-md-8'>
                <div class="txt">
                	<h4 class="name">Intro </h4>
                	<p><?php echo $value['intro'];?></p>
					<p class="contact">
                        Website：<?php echo $value['web_site'];?><br>
                        Tel：<?php echo $value['tel'];?>  <br>
                        Addr：<?php echo $value['addr'];?>
                    </p>
                </div>
            </div> 
            <div class="line"></div>
        </div><!-- /.row -->
 <?php }?>
        

               <?php echo $page;?>  
        <!--End page-->
    </div>
</div><!-- /.slide.categories -->

   