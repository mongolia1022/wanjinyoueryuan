<?php
//首页新闻列表
?>
<div class="idx_news">
    <div class="idx_news_list">
        <dl><a href="###" title="<?php echo $data['sourceUrl']?>">
                <dt><img src="<?php echo ispic($data['originalPic']); ?>" width="100%" /></dt>
                <dd class="title"><?php echo $data['title']; ?></dd>
                <dd class="details">
                    <?php echo $data['description']; ?>
                </dd>
                <div class="clear"></div>
            </a></dl>
    </div>
</div>