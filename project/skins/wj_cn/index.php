<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $tag['seo.title']; ?></title>
<meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
<meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>iconfont/iconfont.css" />
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

    <!--logo-->
    $('.logo2').mouseenter(function(){
        $(this).addClass('now animated flipInY');

    });
    $('.logo2 a').mouseleave(function(){
        $(this).parent('.logo2').removeClass('now animated flipInY');

    });

    <!--导航-->
    $('.nav_in ul li').mouseenter(function(){
        $(this).addClass('now animated flipInY');
        $(this).nextAll('.nav_in ul li').removeClass('now animated flipInY');
        $(this).prevAll('.nav_in ul li').removeClass('now animated flipInY');

    });

    $('.nav_in ul li dl').mouseleave(function(){
        $(this).parent('.nav_in ul li').removeClass('now animated flipInY');
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
	
	<!--头部动画-->
	$(".top").addClass('animated bounceIn');
	$(".nav").addClass('animated bounceIn');  
	
	<!--相册页列表图片-->
	$('.growth_record_list ul li img').hover(function(){
		$(this).addClass('animated pulse');
	},function(){
		$(this).removeClass('animated pulse');
	});
	
	$(".about_t").addClass('animated fadeInUp');
	
	
	
	
	
});	
</script>

</head>

<body class="bg_autumn">

<!--banner-->
<div class="banner banner_autumn">
    <img src="<?php echo $tag['path.skin']; ?>images/banner_autumn2.jpg" width="100%" />

    <div class="cn_en">
        <em><img src="<?php echo $tag['path.skin']; ?>images/dot_wing.png" height="20" /></em>
        <span><a href="<?php echo $tag['path.root']; ?>/?lang=cn" class="cn"=>中文</a>/<a href="<?php echo $tag['path.root']; ?>/?lang=en">English</a></span>
    </div>
</div>

<!--导航-->
<div class="nav_autumn nav">
	<div class="nav_autumn_in nav_in">
      <ul>
          <div class="logo2"><a href="<?php echo $tag['path.root']; ?>"></a><img src="<?php echo $tag['path.skin']; ?>images/logo2.png" width="100%" /></div>
          <?php nav_main()?>
            <div class="clear"></div>
      </ul>
    </div>
</div>

<!--首页列表-->
<?php doc_list('10',3,0,0,0,0,true,false,'id',0)?>
<div class="news_show">
    <div class="news_show_in">
        <iframe src="" frameborder="0" width="100%" height="100%">
            <p>您的浏览器不支持框架。</p>
        </iframe>
    </div>
    <div class="news_show_close iconfont">&#xe740;</div>
</div>

<script>
    $(function(){
        $('.idx_news_list dl a').click(function(){
            var a_title =  $(this).attr('title');
            $('.news_show').fadeIn();

            $.ajaxPrefilter(function(options) {
                if(options.crossDomain && jQuery.support.cors) {
                    var http = (window.location.protocol === 'http:' ? 'http:' : 'https:');
                    options.url = http + '//cors-anywhere.herokuapp.com/' + options.url;
                }
            });

            var share_link = a_title; //微信文章地址
            $.get(
                share_link,
                function(response) {
                    //console.log("> ", response);
                    var html = response;
                    html = html.replace(/data-src/g, "src");
                    var html_src = 'data:text/html;charset=utf-8,' + html;
                    $("iframe").attr("src", html_src);
                });
        });

        $('.news_show_close').click(function(){
            $('.news_show').fadeOut();
        });
    });
</script>
<div class="idx_news_more"><a href="<?php echo sys_href(2); ?>"><img src="<?php echo $tag['path.skin']; ?>images/dot_wing.png" width="29" height="28" style="vertical-align:text-bottom" /> 更多新闻动态</a></div>

<!--版权信息-->
<?php doc_article('18',0,0,0,0,0,true,true,'id',0)?>
</body>
</html>
