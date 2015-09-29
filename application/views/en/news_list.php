<link href="assets/en/css/work.css" rel="stylesheet">
<div class="slide page-heading">
     <div class="container">
        <h1>新闻中心</h1>
     </div>
</div>
 
<div class="slide hospital news">
    <div class="container"> 
    <?php foreach ($newsList as $key => $value) {?>
        <div class="row grid cs-style-3"> <!-- 上传图片大小：480*320px -->
            <div class='col co-xs-6 col-sm-6 col-md-4'>
                <figure>
                    <a href="<?php echo "index.php/news/detail/".$value['id']?>" class="js-pic-480"><img src="admin/attached/image/<?php echo $value['thumb']?>"  alt=''></a>
                </figure>
            </div>
        
            <div class='col co-xs-6 col-sm-6 col-md-8'>
                <div class="txt">
                    <h4 class="name"><span class="date"><?php echo date('Y-m-d', $value['create_time']);?></span>  <a href="<?php echo "index.php/news/detail/".$value['id']?>" title=""><?php echo $value['title']?></a></h4>
                    <p><?php echo mb_substr(strip_tags($value['content']), 0, 200);?></p> 
                </div>
            </div> 
            <div class="line"></div>
        </div><!-- /.row -->
     <?php }?>
       
        <?php echo $page;?>  

    </div>
</div><!-- /.slide.categories -->
