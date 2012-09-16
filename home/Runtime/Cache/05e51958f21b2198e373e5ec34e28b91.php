<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__PUBLIC__/home/css/global.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/home/css/bannerAndNav.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/home/css/home-intro.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/home/css/home-notice.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/home/css/home-footer.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/home/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/home/js/notice.js"></script>
<title>天津七里海旅游网站</title>
</head>

<body>
	<div id="container">
		<!--the banner goes here-->
				<div id="banner">
			<div id="logo"><a href="__APP__/Index/index" title=""><img src="__PUBLIC__/home/images/logo.png" alt="图片说明" /></a></div>
			<div id="navAndSer">
				<div id="nav">
					<a href="__APP__/Introduction/index" title="">景区概况</a> | 
					<a href="__APP__/Ecology/index" title="">生态旅游</a> | 
					<a href="__APP__/Food/index" title="">饕餮之旅</a> | 
					<a href="__APP__/Hotel/index" title="">酒店服务</a> | 
					<a href="__APP__/FarmHouse/index" title="">趣味钓蟹</a> | 
					<a href="__APP__/Notice/index" title="">新闻资讯</a>
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<a href="__APP__/User/login" title="">登陆</a> 	 | 
					<a href="__APP__/User/register" title="">注册</a>
				</div>
				<div id="searchBox">
					<form action="#" method="post">
						<input type="text" name="key_word" style="width:100px;height:24px;height:23px\9;">
						<input type="image" src="__PUBLIC__/home/images/searchbg.png" style="vertical-align:top;">
					</form>
				</div>
			</div>
		</div>
		<div class="clear"> </div>
		<!--the banner ends here-->
		<div id="content">
			<!--the introLeft goes here-->
			<div id="introLeft">
				<div id="newsYiList" class="listShow">
						<p class="noticeTitle">七里海一期</p>
						<div><center><img src="__PUBLIC__/home/images/separateLine.png" alt="" /></center></div>
						<div class="introPic"><img src="__PUBLIC__/home/images/introPic1.png" alt="" /></div>
						<div class="introList">
<!--
							<p><span class="noticeTime">2012-01-12</span> <span class="newsLink" des="ttttttttt" type="1" author="o">七里海湿地走廊即将峻工</span></p>
							<p><span class="noticeTime">2012-01-12</span> <span class="newsLink" des="ttttttttt" type="1" author="o">七里海湿地走廊即将峻工</span></p>
							<p><span class="noticeTime">2012-01-12</span> <span class="newsLink" des="ttttttttt" type="1" author="o">七里海湿地走廊即将峻工</span></p>
-->
							<?php if(is_array($one)): $i = 0; $__LIST__ = $one;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><span class="noticeTime">20<?php echo (date("y-m-d",$vo['create_time'])); ?></span> <span class="newsLink" des="<?php echo ($vo['content']); ?>" type="1" author="系统发布"><?php echo ($vo['title']); ?></span></p><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>

				</div>
					<div class="newsCon" id="newsEr" style="display:none;">
						<p><span class="closeNews">x</span></p>
						<p class="newsTitle">主题多种多样</p>
						<p class="newsInfo">作者:<span class="author"></span>&nbsp;&nbsp;&nbsp;发表时间:<span class="publishTime"></span></p>
						<div class="newsDes"> 主题多种多样主题多种多样主题多种多样主题多种多样主题多种多样主题多种多样</div>
					</div>
			</div>
			<!--the introRight goes here-->
			<div id="introRight">
					<div id="newsErList" class="listShow">
						<p class="noticeTitle">七里海二期</p>
						<div><center><img src="__PUBLIC__/home/images/separateLine.png" alt="" /></center></div>
						<div class="introPic"><img src="__PUBLIC__/home/images/introPic2.png" alt="" /></div>
						<div class="introList">
<!--
							<p><span class="noticeTime">2012-01-12</span> <span class="newsLink" des="ttttttttt" type="2">七里海湿地走廊即将峻工</span></p>
							<p><span class="noticeTime">2012-01-12</span> <span class="newsLink" des="ttttttttt" type="2">七里海湿地走廊即将峻工</span></p>
							<p><span class="noticeTime">2012-01-12</span> <span class="newsLink" des="ttttttttt" type="2">七里海湿地走廊即将峻工</span></p>
-->
							<?php if(is_array($two)): $i = 0; $__LIST__ = $two;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><span class="noticeTime">20<?php echo (date("y-m-d",$vo['create_time'])); ?></span> <span class="newsLink" des="<?php echo ($vo['content']); ?>" type="2" author="系统发布"><?php echo ($vo['title']); ?></span></p><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="newsCon" id="newsYi" style="display:none;">
						<p><span class="closeNews">x</span></p>
						<p class="newsTitle">主题多种多样</p>
						<p class="newsInfo">作者:<span class="author"></span>&nbsp;&nbsp;&nbsp;发表时间:<span class="publishTime"></span></p>
						<div class="newsDes"> 主题多种多样主题多种多样主题多种多样主题多种多样主题多种多样主题多种多样</div>
					</div>
			</div>
		</div>
		<!--the footer goes here-->
		<div class="clear"> </div>
				<div id="footer">
			<p>天津七里海旅游网 | 版权所有 &copy; copyright all reserved | 津IC备案3423666</p>
			<p>联系地址：天津市河西区 | 联系电话28210037</p>
		</div>
		<!--the footer ends here-->
	</div>
</body>
</html>