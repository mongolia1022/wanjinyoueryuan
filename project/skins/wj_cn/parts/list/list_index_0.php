<?php
        if( !empty( $tag['data.results'] ) )
        {?>
<?php foreach($tag['data.results'] as $k =>$data)
        {?>
<div class="idx_news">
	<div class="idx_news_list">
        <dl>
            <dt><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><img src="<?php echo ispic($data['originalPic']); ?>" width="356" height="237" /></a></dt>
            <dd class="title"><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo sys_substr($data['title'],100,true); ?></a></dd>
            <dd class="details">
                <span><?php echo $data['description']; ?></span>
            </dd>
            <div class="clear"></div>
        </dl>
    </div>
</div>
        <?php
        }?>
        <?php	}
        else
        {
        echo '暂无数据';
        }
        ?>

<div class="page">
    <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
</div>
