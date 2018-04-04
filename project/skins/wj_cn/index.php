<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $tag['seo.title']; ?></title>
<meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
<meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />
<!--<link rel="stylesheet" type="text/css" href="iconfont/iconfont.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/animate.min.css" />

<!--JQ基础文件-->
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-3.3.1.min.js"></script>

<!--IE6 PNG透明-->
<!--[if lte IE 6]>
<script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]-->

<!--交互动画-->
<script type="text/javascript">
$(function(){
	$('.banner').addClass('animated flipInX');
	<!--logo-->
	$('.logo').hover(function(){
		$(this).addClass('animated pulse');
	},function(){
		$(this).removeClass('animated pulse');
	});
	
	
	<!--导航-->
	$('.nav_in ul li').mouseover(function(){
		$(this).addClass('animated flipInY');
	});
	
	$('.cn_en span a').hover(function(){
		$(this).addClass('animated pulse');
	},function(){
		$(this).removeClass('animated pulse');
	});
	
	$('.nav_in ul li dl dd').hover(function(){
		$(this).addClass('animated swing');
	},function(){
		$(this).removeClass('animated swing');
	});
	
	<!--首页列表图片-->
	$('.idx_news_list dl dt').hover(function(){
		$(this).addClass('animated pulse');
	},function(){
		$(this).removeClass('animated pulse');
	});
	
	<!--滚动互动-->
	$(document).scroll(function() {
		if($(document).scrollTop()>160){
			$(".top").addClass('animated bounceIn');
			$(".nav").addClass('animated bounceIn');
		}
		if($(document).scrollTop()>560){
			$(".idx_news").addClass('animated bounceInUp');
			$(".idx_news").addClass('animated bounceInUp');
		}
	});   
	
});	
</script>


</head>

<body class="bg_autumn">

<!--banner-->
<div class="banner banner_autumn"><img src="<?php echo $tag['path.skin']; ?>images/banner_autumn.jpg" width="100%" /></div>

<!--头部-->
<div class="top">
	<div class="logo"><a href="<?php echo $tag['path.root']; ?>/"><img src="<?php echo $tag['path.skin']; ?>images/logo.png" /></a></div>
    <div class="cn_en">
    	<em><img src="<?php echo $tag['path.skin']; ?>images/dot_wing.png" width="29" height="28" /></em>
        <span><a href="<?php echo $tag['path.root']; ?>/?lang=cn" class="cn">中文</a>/<a href="<?php echo $tag['path.root']; ?>/?lang=en">English</a></span>
    </div>
</div>

<!--导航-->
<div class="nav_autumn nav">
	<div class="nav_autumn_in nav_in">
      <ul>
	  <?php nav_main()?>
            <div class="clear"></div>
            <script type="text/javascript">
            	$(function(){
					$('.nav_autumn_in ul li').mouseover(function(){
						$(this).addClass('now')	
						$(this).nextAll('.nav_autumn ul li').removeClass('now animated flipInY')	
						$(this).prevAll('.nav_autumn ul li').removeClass('now animated flipInY')	
					});
				});
            </script>
      </ul>
    </div>
</div>

<!--首页列表-->
<?php doc_list('3',1,0,0,0,0,true,false,'id',0)?>
<div class="idx_news_more"><a href="<?php echo sys_href(2); ?>"><img src="<?php echo $tag['path.skin']; ?>images/dot_wing.png" width="29" height="28" style="vertical-align:text-bottom" /> 更多新闻动态</a></div>

<!--版权信息-->
<?php doc_article('18',0,0,0,0,0,true,true,'id',0)?>
</body>
</html>
