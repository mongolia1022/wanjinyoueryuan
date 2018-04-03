<?php
//首页产品推荐
		foreach($flash['results'] as $data)
		{
	   ?>
	   <li><a href="<?php echo $data['url'];?>"><span>&gt;&gt;</span><?php echo $data['title'];?></a></li>
		  <?php 
		}
		?>