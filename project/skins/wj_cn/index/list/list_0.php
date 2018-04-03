<?php
//首页新闻列表
?>
<div class="idx_news">
	<div class="idx_news_list">
        <dl>
            <dt><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><img src="<?php echo ispic($data['originalPic']); ?>" width="356" height="237" /></a></dt>
            <dd class="title"><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo $data['title']; ?></a></dd>
            <dd class="details">
                <label><?php echo $data['description']; ?></label>
            </dd>
            <div class="clear"></div>
        </dl>
    </div>
</div>