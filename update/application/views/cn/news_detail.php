<div class="slide page-heading">
     <div class="container">
        <h1><a href="index.php/news/" title="">返回列表</a></h1>
     </div>
</div>
 
<div class="slide hospital news">
    <div class="container"> 
        <div class="news_title">
            <h1><?php echo $new['title'];?></h1>
            <span class="date"><?php echo date('Y-m-d', $new['create_time']);?></span>  
        </div>
        <div class="news_cont">
         <?php echo $new['content'];?>
         </div>
        <div class="return"><a href="index.php/news/" title="返回列表">返回列表</a></div> 
    </div>
</div><!-- /.slide.categories -->