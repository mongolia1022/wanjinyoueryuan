<div class="news2">
    <div class="news2_t">
        <div class="news2_t2">TITLE</div>
        <div class="news2_t4">TIME</div>
    </div>
    <div class="news2_list">
<?php
        if( !empty( $tag['data.results'] ) )
        {?>
        <ul>
        <?php foreach($tag['data.results'] as $k =>$data)
        {?>
            <li>
                <div class="news2_list2">
                    <label><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo sys_substr($data['title'],30,true); ?></a></label>
                </div>
                <div class="news2_list4"><?php echo date('Y-m-d',strtotime($data['dtTime'])); ?></div>
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

</div>
<div class="page">
    <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
</div>