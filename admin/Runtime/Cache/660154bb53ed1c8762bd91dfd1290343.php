<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>七里海旅游资讯管理平台</title>
<link href="__PUBLIC__/admin/css/index.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/admin/js/jquery-1.4.1.js"></script>
 <script language="JavaScript">
<!--
/*var PUBLIC	 =	 '__PUBLIC__';
ThinkAjax.image = [	 '__PUBLIC__/Images/loading2.gif', '__PUBLIC__/Images/ok.gif','__PUBLIC__/Images/update.gif' ]
ThinkAjax.updateTip	=	'登录中～';
function loginHandle(data,status){
if (status==1)
{
$('result').innerHTML	=	'<span style="color:blue"><img SRC="__PUBLIC__/Images/ok.gif" WIDTH="20" HEIGHT="20" BORDER="0" ALT="" align="absmiddle" > 登录成功！3 秒后跳转～</span>';
$('form1').reset();
window.location = '__URL__';
}
}
function keydown(e){
	var e = e || event;
	if (e.keyCode==13)
	{
	ThinkAjax.sendForm('form1','__URL__/checkLogin/',loginHandle,'result');
	}
}*/
function fleshVerify(type){ 
//重载验证码
var timenow = new Date().getTime();
//alert('click');
if (type)
{
$('#verifyImg').attr('src','__URL__/verify/adv/1/'+timenow);
}else{
$('#verifyImg').attr('src','__URL__/verify/'+timenow);
}

}
//-->
</script>
</head>

<body bgcolor="#434f2b">
<center>
<div class="main">
	<div class="login">  
    <form action="__APP__/User/login" method="post">
    <table border="0" width="340">
     <tr>
     	<td width="100" height="30">用户名：</td>  <td><input name="username" type="text" width="50" class="input"></td>	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>        
     </tr>
     <tr>
     	<td width="100" height="30">密&nbsp;码：</td>  <td><input name="password" type="password" width="100" class="input"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     </tr>
     <tr>
     	<td width="100" height="30">验证码：</td>  <td><input type="text" width="100" class="input" name="verify"></td>	<td><img src="__APP__/Index/verify/" onClick="fleshVerify()" id="verifyImg" height="20" alt="点击刷新验证码" style="cursor:pointer" title="点击刷新验证码" ></td>
     </tr>
     <tr>
     	<td width="100" height="85">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>  <td><input type="image" src="__ROOT__/Public/admin/images/login.jpg">&nbsp;<a href="#"><img src="__ROOT__/Public/admin/images/reg.jpg" alt="注册"></a></td>	<td><a href="#">忘记密码</a></td>
     </tr>
    </table>
    </form>   
    </div>
</div>
<center>
</body>
</html>