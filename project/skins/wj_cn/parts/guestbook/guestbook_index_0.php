<?php
    // 为方便并保证您以后的快速升级 请使用SHL提供的如下全局数组
	
	// 数组定义/config/doc-global.php
	
	// 如有需要， 请去掉注释，输出数据。
	/*
	echo '<pre>';
		print_r($tag);
	echo '</pre>';
	*/
?>
<!--注册页-->
<div class="process_t"><img src="<?php echo $tag['path.skin']; ?>images/process_t.png" height="60" /></div>

<div class="process_b"><img src="<?php echo $tag['path.skin']; ?>images/process_b.png" height="50" /></div>

<div class="process_t"><img src="<?php echo $tag['path.skin']; ?>images/process_t2.png" height="60" /></div>
<form id="form1" name="form1" method="post" action="<?php echo sys_href($params['id'],'form_action');?>">
<div class="process_input clear">
    <div class="process_txt">幼儿姓名*</div>
    <div class="process_txb"><input type="text" name="name"></div>
    <div class="clear"></div>
    <div class="process_txt">幼儿性别</div>
    <div class="process_txb"><input type="text" id="sex"></div>
    <div class="clear"></div>
    <div class="process_txt">幼儿出生年月日*</div>
    <div class="process_txb"><input type="text" id="birth"></div>
    <div class="clear"></div>
    <div class="process_txt">家长联系方式*</div>
    <div class="process_txb"><input type="text" name="contact"></div>
    <div class="clear"></div>
    <div class="process_txt">预约入读园所*</div>
    <div class="process_txb"><input type="text" id="addr"></div>
    <div class="clear"></div>
    <div class="process_txt">验证码*</div>
    <div class="process_txb">
        <input type="text" name="checkcode">&nbsp;
        <img src="<?php echo URLREWRITE? '/':'./'; ?>inc/verifycode.php" /></div>
    <div class="clear"></div>
    <input id="msg" name="content" style="display: none"/>
    <div class="process_txt"></div>
    <div class="process_txb2"><input class="bg2" type="submit" value="提交"></div>
    <div class="clear"></div>
</div>
</form>

<div class="process_t"><img src="<?php echo $tag['path.skin']; ?>images/process_t3.png" height="60" /></div>

<div class="process_phone">
    TEL. 020-38020321 转Ext: 0 <br/>
    预约受理时间 工作日 AM8:30-PM5:30
</div>

<script>
    $(function(){
        $("form").submit(function(e){
            var $form=$('#form');
            var msg='幼儿性别：'+$('#sex').val()+'，';
            msg+='幼儿出生年月日：'+$('#birth').val()+'，';
            msg+='预约入读园所：'+$('#addr').val();
            $('#msg').val(msg);
            console.log(msg);
            //$form.submit();
            return true;
        });
    });


</script>
