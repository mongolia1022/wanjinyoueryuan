<?php
    // 为方便并保证您以后的快速升级 请使用SHL提供的如下全局数组
	
	// 数组定义/config/doc-global.php
	
	// 如有需要， 请去掉注释，输出数据。
	/*
	echo '<pre>';
		print_r($tag);
	echo '</pre>';
	*/
?>
<!--lightbox css-->
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>css/lightbox.css">
<?php $data=$tag['data.row'];?>
<!--growth_record-->
<div class="growth_record_t"><?php echo $data['title']; ?></div>
<div class="growth_record">
	<div class="growth_record_list">
    	<ul id="picContent">
		<?php 
			$originalPic = explode('|',$data['originalPic']);
			$middlePic   = explode('|',$data['middlePic']);
			$smallPic    = explode('|',$data['smallPic']);
			$total=count($originalPic);
			for($i=0;$i<$total;$i++)
			{
          ?>
		  <li>
		  <a class="example-image-link" href="<?php echo ispic($originalPic[$i])?>" data-lightbox="example-set" data-title="<?php echo $data['description']; ?>"><img src="<?php echo ispic($smallPic[$i])?>" width="356" height="237" /></a>
		  </li>
        <?php
			}?>
        </ul>
    </div>
</div>
<!--页码-->
<div class="page" id="pager">
</div>

			
			<!--lightbox js-->
<script src="<?php echo $tag['path.skin']; ?>js/lightbox.js"></script>
<script src="<?php echo $tag['path.skin']; ?>js/jqpaginator.min.js"></script>

<script>
var bigpics='<?php echo $data['originalPic'] ?>'.split("|");
var smallpics='<?php echo $data['smallPic'] ?>'.split("|");
var pagesize=9;
$('#pager').jqPaginator({
    totalCounts: <?php echo $total ?>,
	pageSize:pagesize,
    visiblePages: 5,
    currentPage: 1,

    // first: '<li class="first"><a href="javascript:void(0);">First</a></li>',
    prev: '<img src="<?php echo $tag['path.skin']; ?>images/dot_wing2.png" width="29" height="29" />&nbsp;<a href="javascript:void(0);">上一页</a>&nbsp;&nbsp;&nbsp;',
    next: '<a href="javascript:void(0);">下一页</a>&nbsp;<img src="<?php echo $tag['path.skin']; ?>images/dot_wing.png" width="29" height="29" />',
    // last: '<li class="last"><a href="javascript:void(0);">Last</a></li>',
    page: '<a href="javascript:void(0);">{{page}}</a>&nbsp;&nbsp;&nbsp;',
    onPageChange: function (num) {
		$('#picContent').html('');
		var bigs;
		var smalls;
		var end=num*pagesize;
		if(bigpics.length>end){
			bigs=bigpics.slice((num-1)*pagesize,end);
			smalls=smallpics.slice((num-1)*pagesize,end);
		}else{
			bigs=bigpics.slice((num-1)*pagesize);
			smalls=smallpics.slice((num-1)*pagesize);
		}
		for(var i=0;i<bigpics.length;i++){
			var b=bigs[i];
			var s=smalls[i];
			var str='<li>';
			str+='<a class="example-image-link" href="'+b+'" data-lightbox="example-set" data-title="<?php echo $data['description']; ?>"><img src="'+s+'" width="356" height="237" /></a>';
			str+='</li>';
			$('#picContent').append(str);
		}
    }
});

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2196019-1']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>



