<!DOCTYPE html>
<html lang="cn">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title><?php echo $title;?> - 格蕾医疗</title> 
<meta name="keywords" content="格蕾医疗">  
<meta name="description" content="三小时 四城 亚洲名医">
<meta name="GOOGLEBOT" content="INDEX, FOLLOW" />
<meta name="robots" content="index, follow" />    
<link href="assets/images/touch/apple-touch-icon.png" rel="apple-touch-icon" />
<link href="images/touch/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
<link href="images/touch/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
<link href="images/touch/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
<link href="images/touch/favicon.png" rel="icon" type="image/x-icon" />
<link href="images/touch/favicon.png" rel="shortcut icon">
<script type="text/javascript"> var lang_code="cn";var base_url="http://www.ileiqie.com/";var controller="home";var sub_controller="";</script>   
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<base href="<?php echo base_url();?>">
<link href="assets/css/main.min.css" rel="stylesheet">
<!--
<link href="assets/css/home.css" rel="stylesheet">
<link href="assets/css/work.css" rel="stylesheet">
<link href="assets/css/services.css" rel="stylesheet">
<link href="assets/css/contact.css" rel="stylesheet">
<link href="assets/css/about.css" rel="stylesheet">
-->
<script>

</script>
</head>
<body>
<div class="body-page-heading"><h1>格蕾医疗</h1></div>
<div class="navbar navbar-default navbar-fixed-top main-menu tiny" role="navigation">
  	<div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">目录</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-collapse collapse " style="height: auto;">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php" title="首页">首页</a></li>
                <li class=""><a href="index.php/news" title="新闻中心">新闻中心</a></li>
                <li class=""><a href="index.php/about" title="关于我们">关于我们</a></li>
                <li class=""><a href="index.php/faq" title="F&amp;Q">F&amp;Q</a></li> 
              </ul>
            </div><!--/.nav-collapse -->
            <?php if($lang === 'cn') { ?>
				<a class="navbar-language" href="<?php echo base_url('index.php/index/change_word');?>" title="英文版"><img src="assets/images/language_1.png" width="26" height="19" alt="英文版"></a>
        	<?php } else { ?>
				<a class="navbar-language" href="<?php echo base_url('index.php/index/change_word');?>" title="中文版"><img src="assets/images/language_0.jpg" width="26" height="19" alt="中文版"></a>
        	<?php } ?>
            
            <a class="navbar-brand" href="index.php" title="格蕾医疗"><img src="assets/images/blank.png" alt="格蕾医疗"></a>
        </div>        
  	</div>
</div>