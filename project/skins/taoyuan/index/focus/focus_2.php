<?php
/*底部二维码*/
		foreach($flash['results'] as $data)
		{
	   ?>
<img src="<?php echo $data['picpath'];?>" width="152" height="152">
		  <?php 
		}
		?>