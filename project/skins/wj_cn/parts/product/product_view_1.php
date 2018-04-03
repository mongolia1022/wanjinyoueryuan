<?php 
$data=$tag['data.row'];
$originalPic = explode('|',$data['originalPic']);
?>
<img src="<?php echo ispic($originalPic[0])?>" />