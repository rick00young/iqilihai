<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hotelList</title>
<link href="__ROOT__/Public/admin/css/global.css" rel="stylesheet" type="text/css" />
<link href="__ROOT__/Public/admin/css/main.css" rel="stylesheet" type="text/css" />
<link href="__ROOT__/Public/admin/css/hotelList.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__ROOT__/Public/admin/js/jquery-1.4.1.js"></script>
<script type="text/javascript" src="__ROOT__/Public/admin/js/jquery-tableUI.js"></script>
<script type="text/javascript" src="__ROOT__/Public/admin/js/tableUI.js"></script>
</head>
<body>
<div id="wrap">
	<div id="header"></div>
    <div id="main">
     <!--left_frame begin-->
		
     <!--left_frame end--> 

	 <!--right_frame begin--> 
			<!--id right goes here-->
	 <div id="right">
        	<h2 class="rightType">欢迎来到天津七里海旅游管理平台</h2>
            <div style="width:100%">
            	<form action="" method="post">                
            	<table width="100%" border="1" style="text-align:center;" class="tableUI dataTable">
                	<caption><h2><?php echo ($actionTitle); ?></h2></caption>
					<tr>
							<td>酒店ID</td>
							<td>酒店标题</td>
							<td>创建时间</td>
							<td>编辑时间</td>
							<td>编辑人</td>
							<td>当前状态</td>
							<td>操作</td>
							<td>修改</td>
							<td>删除</td>
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td style="font-size:13px;"><?php echo ($vo['id']); ?></td>
									<td style="font-size:13px;"><?php echo ($vo['title']); ?></td>
									<td style="font-size:13px;"><?php echo (date("y-m-d",$vo['create_time'])); ?></td>
									<td style="font-size:13px;"><?php echo (date("y-m-d",$vo['edit_time'])); ?></td>
									<td style="font-size:13px;"><?php echo ($vo['edit_user']); ?></td>
									<td style="font-size:13px;">
										<?php if($vo['status'] == 1): ?><span style="color:green;">已经发布</span>
										<?php else: ?>
											<span style="color:red;">已经停用</span><?php endif; ?>										
									</td>
									<td>
										<?php if($vo['status'] == 0): ?><a href="__APP__/Introduction/introOperate/status/<?php echo ($vo['status']); ?>/id/<?php echo ($vo['id']); ?>">发布</a>
										<?php else: ?>
											<a href="__APP__/Introduction/introOperate/status/<?php echo ($vo['status']); ?>/id/<?php echo ($vo['id']); ?>">停用</a><?php endif; ?>	
									</td>
									<td><a href="__APP__/Hotel/hotelModify/id/<?php echo ($vo['id']); ?>">修改</a></td>
									<td><a href="__APP__/Hotel/hotelDelete/id/<?php echo ($vo['id']); ?>">删除</a></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tr>
                </table>
                </form>
				<div class="page">
					<p><?php echo ($pageinfo); ?></p>
				</div>
            </div>
      </div>
        <p class="clear"></p>
    </div>
			<!--id right ends here-->
	<!--footer begin-->
		
	<!--footer end-->
	
</div>
<script type="text/javascript">
//$(function(){
//	$('.type').click(function(){
//		$(this).next().children('.li').slideToggle('slow');
//	})
//})

</script>
</body>
</html>