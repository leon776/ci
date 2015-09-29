<link href="assets/css/contact.css" rel="stylesheet">
<div class="slide page-heading">
     <div class="container">
        <h1>F&amp;Q</h1> 
     </div>
</div>
 
<div class="slide faq">
    <div class="container"> 	 
        <ul class="faq_list"> 

        <?php $i=0;foreach ($faqList as $key => $value) {$i++;?>
        <li class="list"> 
            <h3 class="name"><?php echo $i;?>. <?php echo $value['title'];?></h3>
            <p><?php echo $value['content'];?></p> 
        </li>
        <?php }?>
        </ul>
        <?php echo $page;?>  
        <!--End page-->
  	</div><!-- /.container -->
</div><!-- /.slide.faq -->  
