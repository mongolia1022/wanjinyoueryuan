<div class="pj_pic2">
<?php
    if( !empty( $tag['data.results'] ) )
    {?>
    <ul>
        <?php foreach($tag['data.results'] as $k =>$data)
        {?>
        <li class="view view-third">
            <img src="<?php echo $data['originalPic']; ?>" width="230" height="230">
            <div class="mask">
                <p><?php echo $data['title'];?></p>
                <a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>" class="info">MORE+</a>
            </div>
        </li>
        <?php
        }?>
        <div class="clear"></div>
    </ul>
    <?php	}
    else
    {
    echo '暂无数据';
    }
    ?>
    </div>
   <div class="page"><?php if($tag['pager.en']) echo $tag['pager.en']; ?></div>