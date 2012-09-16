<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>farmList</title>
<link href="__ROOT__/Public/admin/css/global.css" rel="stylesheet" type="text/css" />
<link href="__ROOT__/Public/admin/css/main.css" rel="stylesheet" type="text/css" />
<link href="__ROOT__/Public/admin/css/farmList.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__ROOT__/Public/admin/js/jquery-1.4.1.js"></script>
<script type="text/javascript" src="__ROOT__/Public/admin/js/jquery-tableUI.js"></script>
<script type="text/javascript" src="__ROOT__/Public/admin/js/tableUI.js"></script>
</head>
<body>
<div id="wrap">
	<div id="header"></div>
    <div id="main">
     <!--left_frame begin-->
		    <!--菜单开始-->
    	<div id="left">
            <h1 class="type">常规管理</h1>
            <div class="content">
            	<div><img src="__ROOT__/Public/admin/images/menu_topline.gif"/></div>
                <div class="li">
              <!--<p><a href="#" target="main">广告增加</a></p>
                  <p><a href="#" target="main">广告管理</a></p>
                  <p><a href="#" target="main">链接增加</a></p>
                  <p><a href="#" target="main">链接管理</a></p>
               -->
			      <p><a href="__APP__/Introduction/introList">七里海介绍管理</a></p>
				  <p><a href="__APP__/Introduction/introAdd">七里海介绍增加</a></p>
				  <p><a href="__APP__/Notice/noticeList">公告管理</a></p>
                  <p><a href="__APP__/Notice/noticeAdd">公告增加</a></p>
				  <p><a href="__APP__/Announcement/annoList">须知管理</a></p>
				  <p><a href="__APP__/Announcement/annoAdd">须知增加</a></p>
<!--
				  <p><a href="__APP__/Lecture/lectureList">科普讲座管理</a></p>
				  <p><a href="__APP__/Lecture/lectureAdd">科普讲座增加</a></p>
-->
              </div>
            </div>
            <h1 class="type">栏目管理</h1>
            <div class="content">
            	<img src="__ROOT__/Public/admin/images/menu_topline.gif" />
                <div class="li">
                  <p><a href="__APP__/Hotel/hotelList">酒店管理</a></p>
                  <p><a href="__APP__/Hotel/hotelAdd">酒店增加</a></p>
                  <p><a href="__APP__/FarmHouse/farmList">农家乐管理</a></p>
                  <p><a href="__APP__/FarmHouse/farmAdd">农家乐增加</a></p>
                  <p><a href="__APP__/Food/foodList">美食管理</a></p>
                  <p><a href="__APP__/Food/foodAdd">美食增加</a></p>
<!--
				  <p><a href="__APP__/ThemeView/themeList">主题风光管理</a></p>
				  <p><a href="__APP__/ThemeView/themeAdd">主题风光增加</a></p>
                  <p><a href="#">团购管理</a></p>
                  <p><a href="#">团购增加</a></p>
-->
                </div>
            </div>
            <h1 class="type">用户管理</h1>
            <div class="content">
            	<img src="__ROOT__/Public/admin/images/menu_topline.gif" />
                <div class="li">
                  <li><a href="__APP__/User/userList">会员管理</a></li>
                  <li><a href="__APP__/Message/msgList">留言管理</a></li>
                  <li><a href="__APP__/Order/orederList">订单管理</a></li>
                </div>
            </div>
<!--            <h1 class="type">其他参数管理</h1>
            <div class="content">
            	<img src="__ROOT__/Public/admin/images/menu_topline.gif" />
                <div class="li">

              <p><a href="#" target="main">管理设置</a></p>
                  <p><a href="#" target="main">主机壮态</a></p>
			  
                  <p><a href="#" target="main">流量分析</a></p>
                  <p><a href="#" target="main">SEO优化</a></p>
                  <p><a href="#" target="main">登陆壮态</a></p>
                  <p><a href="#" target="main">运行壮态</a></p>
-->
                </div>
            </div>
        </div>
     <!--菜单结束-->

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
							<td>农家院ID</td>
							<td>农家院标题</td>
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
										<?php if($vo['status'] == 0): ?><a href="__APP__/FarmHouse/farmOperate/status/<?php echo ($vo['status']); ?>/id/<?php echo ($vo['id']); ?>">发布</a>
										<?php else: ?>
											<a href="__APP__/FarmHouse/farmOperate/status/<?php echo ($vo['status']); ?>/id/<?php echo ($vo['id']); ?>">停用</a><?php endif; ?>
									</td>
									<td><a href="__APP__/FarmHouse/farmModify/id/<?php echo ($vo['id']); ?>">修改</a></td>
									<td><a href="__APP__/FarmHouse/farmDelete/id/<?php echo ($vo['id']); ?>">删除</a></td>
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
		    <div id="footer">
    	<p>津ICP备案 3343432-d &nbsp;&nbsp; 版权所有  &copy; 2012 天津七里海旅游系统  &nbsp;&nbsp;</p>
        <p>地址:天津市 &nbsp;&nbsp; |&nbsp;&nbsp; 联系电话:111111  &nbsp;&nbsp;| &nbsp;&nbsp; 邮编:111111</p>
    </div>
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