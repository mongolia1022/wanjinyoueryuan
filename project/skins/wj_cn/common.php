<?php
$tempname="winter";
$prootid=sys_menu_info('id',true);
if($prootid==3){
    $tempname="spring";
}else if($prootid==5){
    $tempname="spring";
}
?>
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
	
	<!--滚动互动-->
	$(document).scroll(function() {
		if($(document).scrollTop()>300){
			$(".about_b").addClass('animated bounceInUp');
		}
		if($(document).scrollTop()>560){
			$(".team_member").addClass('animated bounceInUp');
		}
	});   
	
	
	
});	
</script>

<!--TAB JS-->
<script type="text/javascript"> 
function setTab(m,n){ 
var menu=document.getElementById("tab"+m).getElementsByTagName("li");  
var div=document.getElementById("tablist"+m).getElementsByTagName("div"); 
var showdiv=[]; 
	for (i=0; j=div[i]; i++)
	{  
		if((" "+div[i].className+" ").indexOf(" tablist ")!=-1)
		{  
			showdiv.push(div[i]); 
		} 
	}  
	for(i=0;i<menu.length;i++)
	{  
		menu[i].className=i==n?"now":"";  
		showdiv[i].style.display=i==n?"block":"none"; 
	}  
}  
</script>

</head>

<body class="bg_<?php echo $tempname; ?>">

<!--头部-->
<div class="top">
    <div class="logo"><a href="<?php echo $tag['path.root']; ?>/"><img src="<?php echo $tag['path.skin']; ?>images/logo.png" /></a></div>
    <div class="cn_en">
        <em><img src="<?php echo $tag['path.skin']; ?>images/dot_wing.png" width="29" height="28" /></em>
        <span><a href="<?php echo $tag['path.root']; ?>/?lang=cn" class="cn"=>中文</a>/<a href="<?php echo $tag['path.root']; ?>/?lang=en">English</a></span>
    </div>
</div>

<!--导航-->
<div class="nav_<?php echo $tempname; ?> nav">
	<div class="nav_<?php echo $tempname; ?>_in nav_in">
      <ul>
          <div class="logo2"><a href="<?php echo $tag['path.root']; ?>"></a><img src="<?php echo $tag['path.root']; ?>images/logo2.png" width="100%" /></div>
          <?php nav_main()?>
            <div class="clear"></div>
      </ul>
    </div>
</div>
<?php sys_parts() ?>


<!--版权信息-->
<?php doc_article('18',0,0,0,0,0,true,true,'id',0)?>

</body>
</html>
