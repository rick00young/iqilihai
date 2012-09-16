<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__PUBLIC__/home/css/global.css"" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/home/css/home-index.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/home/css/home-footer.css" rel="stylesheet" type="text/css" />
<title>天津七里海旅游网站</title>
<script type="text/javascript" src="__PUBLIC__/home/js/jquery-1.7.2.min.js"></script>
</head>

<body>
<div id="container">
	<!--the indexNav goes here-->
	<div id="indexNav">
		<p>
			<a href="#">首页</a>&nbsp; | &nbsp;
			<a href="#">注册</a> &nbsp;| &nbsp;
			<a href="#">登陆</a>
		</p>
    </div>
	<!--the real nav goes here-->
	<div id="navBody">
		<div id="navLeft">
			<a href="__APP__/Introduction/index"><div class="navBox" id="nav1"><p class="navText">景区概况</p></div></a>
			<a href="__APP__/Ecology/index"><div class="navBox" id="nav2"><p class="navText">生态旅游</p></div></a>
			<a href="__APP__/FarmHouse/index"><div class="navBox" id="nav3"><p class="navText">趣味钓蟹</p></div></a>
			<a href="__APP__/Notice/index"><div class="navBox" id="nav4"><p class="navText">新闻资讯</p></div></a>
			<div style="clear:both;">
				<a href="__APP__/Hotel/index"><div class="navBox" id="nav5"><p class="navText">酒店服务</p></div></a>
				<a href="__APP__/Food/index"><div class="navBox" id="nav6"><p class="navText">饕餮之旅</p></div></a>
			</div>
		</div>
		<div id="navRight">
			<div id="search">
				<form method="post" action="__APP__/Search/index">
					<input type="text" name="key_word" id="searchInput" />
					<input type="image" src="__PUBLIC__/home/images/searchButton.png">
				</form>
			</div>
			<div id="map">
				<a href="__APP__/Introduction/map"><img src="__PUBLIC__/home/images/map.jpg" /></a>
			</div>
		</div>
	</div>
	<!--the footer goes herr-->
    		<div id="footer">
			<p>天津七里海旅游网 | 版权所有 &copy; copyright all reserved | 津IC备案3423666</p>
			<p>联系地址：天津市河西区 | 联系电话28210037</p>
		</div>
	<!--the footer ends herr-->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		//alert('ff');
		//var $p = $();
		$('.navBox').hover(
			function(){
				//$(this).css('marginTop','0px');
				if( !$('.navBox').is(':animated') ){
					$(this).css('marginTop','0px');
				}
			},
			function(){
				$(this).css('marginTop','15px');
			}
		);

	})
</script>
</body>
</html>