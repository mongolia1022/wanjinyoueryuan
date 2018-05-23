<?php
        if( !empty( $tag['data.results'] ) )
        {?>
<?php foreach($tag['data.results'] as $k =>$data)
        {?>
            <div class="idx_news">
                <div class="idx_news_list">
                    <dl><a href="###" title="<?php echo sys_href($data['channelId'],'list',$data['id'])?>">
                            <dt><img src="<?php echo ispic($data['originalPic']); ?>" width="100%" /></dt>
                            <dd class="title"><?php echo sys_substr($data['title'],100,true); ?></dd>
                            <dd class="details">
                                <span><?php echo $data['description']; ?></span>
                            </dd>
                            <div class="clear"></div>
                        </a></dl>
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

<div class="news_show">
    <div class="news_show_in">
        <iframe src="" frameborder="0" width="100%" height="100%">
            <p>您的浏览器不支持框架。</p>
        </iframe>
    </div>
    <div class="news_show_close iconfont">&#xe740;</div>
</div>

<script>
    $(function(){
        $('.idx_news_list dl a').click(function(){
            var a_title =  $(this).attr('title');
            $('.news_show').fadeIn();

            $.ajaxPrefilter(function(options) {
                if(options.crossDomain && jQuery.support.cors) {
                    var http = (window.location.protocol === 'http:' ? 'http:' : 'https:');
                    options.url = http + '//cors-anywhere.herokuapp.com/' + options.url;
                }
            });

            var share_link = a_title; //微信文章地址
            $.get(
                share_link,
                function(response) {
                    //console.log("> ", response);
                    var html = response;
                    html = html.replace(/data-src/g, "src");
                    var html_src = 'data:text/html;charset=utf-8,' + html;
                    $("iframe").attr("src", html_src);
                });
        });

        $('.news_show_close').click(function(){
            $('.news_show').fadeOut();
        });
    });
</script>
<div class="page">
    <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
</div>
