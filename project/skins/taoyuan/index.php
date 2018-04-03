
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

<!--JQ基础文件-->
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-1.9.1.min.js"></script>

<!--IE6 PNG透明-->
<!--[if lte IE 6]>
<script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]-->

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>dist/css/swiper.min.css">

</head>

<body>

<!-- 头部 -->
<div class="top_link">
	<div class="top_link_in iconfont">
    	<div class="top_link_in">
        	<label>Welcome to Taoyuan aluminum</label>
			<span>&#xe67f; Tel: 400-888-8888  +86-757-88888888　<a href="/?lang=cn" class="not">CN</a> <font color="#666666">/</font> <a href="/?lang=en">EN</a> </span>
            <div class="top_link_in_pro"><img src="<?php echo $tag['path.skin']; ?>images/top_pro.png" width="180" height="236" /></div>
        </div>
    </div>
</div>
<div class="top">
	<div class="top_in">
    	<div class="logo">
        	<!--<img src="images/logo.png" />
            <img src="images/logo_ge.png" />
            <img src="images/logo_r.png" />-->
            <a href="#"><img src="<?php echo $tag['path.skin']; ?>images/logo2.png" /></a>
            <span class="verticalAlign"></span>
        </div>
        <div class="search">
        	<form action="<?php echo $tag['form.action.search']; ?>" method="post">
                <div class="search_txt"><input name="keyword" type="text" value="请输入搜索内容" onfocus="if(value==defaultValue){value='';this.style.color='#000'}" onblur="if(!value){value=defaultValue;this.style.color='#999999'}" style="color:#999999"></div>
                <div class="search_btn"><input type="image" src="<?php echo $tag['path.skin']; ?>images/search_btn.png" /></div>
                </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="nav">
    	<div class="nav_in">
        	<ul>
            	<li class="now"><a href="<?php echo $tag['path.root']; ?>/">Home</a></li>
                <?php nav_main()?>
            </ul>
        </div>
		<script>
					$(function(){
						$('.nav_in ul li').mouseover(function(){
							$(this).children('ul').stop(true,true).slideDown(200);	
						})	
						$('.nav_in ul li').mouseleave(function(){
							$(this).children('ul').stop(true,true).slideUp(200);	
						})	
					})
				</script>
    </div>
</div>

<!-- Swiper -->
<div class="swiper-container swiper1" style="height:518px;">
    <div class="swiper-wrapper">
        <?php doc_focus('1',3,0,0,0,true,'ordering',0)?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>
<!-- Swiper JS -->
<script src="<?php echo $tag['path.skin']; ?>dist/js/swiper.min.js"></script>
<script>
	var swiper1 = new Swiper('.swiper1', {
		pagination: '.swiper-pagination',
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		paginationClickable: true,
		spaceBetween: 30,
		centeredSlides: true,
		autoplay: 2500,
		autoplayDisableOnInteraction: false,
		effect: 'fade'
	});
</script>

<!-- 首页关于我们 -->
<div class="idx_about">
	<div class="idx_about_t"></div>
    <div class="ct_r">
    	<ul>
        	<li>
            	<a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct1.png" width="42" height="42" /></a>
                <div class="ct_qr"><img src="<?php echo $tag['path.skin']; ?>images/qr_idx.jpg" width="100%" height="100%" /></div>
            </li>
        	<li><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct2.png" width="42" height="42" /></a></li>
        	<li><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct3.png" width="42" height="42" /></a></li>
        	<li><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct4.png" width="42" height="42" /></a></li>
        	<li><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct5.png" width="42" height="42" /></a></li>
            <script>
            	$(function(){
					$('.ct_r ul li').mouseover(function(){
						$(this).children('.ct_qr').css('display','block');	
					});	
					$('.ct_r ul li').mouseleave(function(){
						$(this).children('.ct_qr').css('display','none');	
					});	
				});
            </script>
        </ul>
    </div>
    <div class="idx_about_title"></div>
    <div class="idx_about_l"><img src="<?php echo $tag['path.skin']; ?>images/idx_about_pic.jpg" width="558" height="340" /></div>
    <div class="idx_about_r">
    	<div class="idx_about_r_t"><img src="<?php echo $tag['path.skin']; ?>images/idx_about_av.png" width="499" height="99" /></div>
        <div class="idx_about_r_b"><?php doc_article('9',0,0,0,0,0,true,true,'id',0)?></div>
    </div>
    <div class="clear"></div>
</div>

<!-- 首页产品列表 -->
<div class="idx_pro">
	<ul>
        <?php doc_product('10',6,0,0,0,0,true,false,'id',0)?>
        <div class="clear"></div>
    </ul>
</div>

<!-- 底部 -->
<div class="bottom_t"></div>
<div class="bottom_b">
	<div class="bottom_b_in">
    	<div class="bottom_l">
        	<ul>
            	<li class="first">Products recommend</li>
				<?php doc_focus('2',5,1,0,0,true,'id',0)?>
                <div class="clear"></div>
            </ul>
        	<ul>
            	<li class="first">Company introduction</li>
            	<?php doc_focus('3',5,1,0,0,true,'id',0)?>
                <div class="clear"></div>
            </ul>
        	<ul>
            	<li class="first">Legal Info</li>
            	<?php doc_focus('4',5,1,0,0,true,'id',0)?>
                <div class="clear"></div>
            </ul>
			<div class="clear"></div>
        </div>
        <div class="bottom_m">
        	<div class="bottom_m">
            	<div class="bottom_m_t">Socialize With Us!</div>
				<div class="bottom_m_m">
                	<ul>
                    	<li>
                        	<a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct1.png" width="24" height="24"></a>
                            <div class="ct_qr"><img src="<?php echo $tag['path.skin']; ?>images/qr_idx.jpg" width="100%" height="100%" /></div>
                        </li>
                    	<li><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct2.png" width="24" height="24"></a></li>
                    	<li><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct3.png" width="24" height="24"></a></li>
                    	<li><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct4.png" width="24" height="24"></a></li>
                    	<li><a href="#"><img src="<?php echo $tag['path.skin']; ?>images/ct5.png" width="24" height="24"></a></li>
                        <script>
							$(function(){
								$('.bottom_m_m ul li').mouseover(function(){
									$(this).children('.ct_qr').css('display','block');	
								});	
								$('.bottom_m_m ul li').mouseleave(function(){
									$(this).children('.ct_qr').css('display','none');	
								});	
							});
						</script>
                    </ul>
                </div>
                <div class="bottom_m_b"><?php doc_article('11',10,0,0,0,0,true,true,'id',0)?></div>
            </div>
        </div>
        <div class="bottom_qr">
			<?php doc_focus('5',1,2,0,0,true,'id',0)?>
            <span class="iconfont">&#xe6c4; Mobile website</span>
        </div>
		<div class="clear"></div>
    </div>
</div>


</body>
</html>
