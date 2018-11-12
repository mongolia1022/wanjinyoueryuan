<?php 
//首页产品列表
?>
<li>
    <a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>">
        <span><?php echo sys_push_one($data['spec'],1) ?></span>
        <label><?php echo $data['title'];?></label>
        <img src="<?php echo $data['originalPic'];?>" width="360" height="360" />
        <em><?php echo $data['description'] ?></em>
        <i>More</i>
    </a>
</li>
