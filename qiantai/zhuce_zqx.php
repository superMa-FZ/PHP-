<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<link rel="stylesheet" href="../css/yhzc.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/yhm.js"></script>
<style type="text/css">
#zt{
	font-size:30px;
	font-weight:boild;
}
#zc{
	width:270px;
	background-color:#3CF;
	color:#FFF;
}
#big{
	width:100%;
	height:500px;
}
#one{
	width:100%;
	height:100px;
}
#two{
	width:100%;
	height:350px;
	background:url(../photo/timg.jpg)
}
#submit1{
	width:40px;
	background-color:#6CC;
	color:#FFF;
}
#zuce_denglu{
	width:150px;
	background-color:#6CC;
	color:#FFF;
  
}
</style>

<script language="javascript">
function isyh(){
	  var d=document.getElementById("yh").value;
      var e=/^[a-zA-Z]+[a-zA-Z0-9]{5,11}$/;
      if(!e.test(d)){
        alert("请正确填写用户名！");
        document.getElementById("yh").value="";
      }
}
function isqrmm(){
	var a=document.getElementById("mm").value;
	var b=document.getElementById("mm1").value;
	if(a!=b){
		 alert("密码不一致，请重新填写!");
        document.getElementById("mm1").value="";
	}
}
$(document).ready(function(){
	$("#zuce_denglu").click(function(){
		window.location.replace("denglu_zqx.php");  
		})
	
});
</script>

<body>
<div id="big">
<div id="one">
<img src="../photo/tp.png">
</div>
<div id="two">
<table name="table1" id="table1  width="300" border="0" align="center"">
<form action="../admin/admin_php/dlym.php" name="form1" id="form1" method="post">
<caption><font id="zt">会员注册</font></caption>

<tr><td class="kuan_td_class"><img src="../photo/denglu_image/yhm.jpg" width="45" height="38"  /></td><td><input type="text" id="user" class="zhai_td_class" name="user" placeholder="  用户名"/></td></tr>

<tr><td></td><td><div id="yhm_cuowu_1" name="yhm_cuowu_1" style="display:none; color:#F00" >用户名不能为空</div> <div id="yhm_cuowu_2" name="yhm_cuowu_2" style="display:none; color:#F00" >用户名由6~16位字母或数字组成</div></td></tr>

<tr><td class="kuan_td_class"><img src="../photo/denglu_image/mima.jpg" width="45" height="38"  /></td><td><input type="text" class="zhai_td_class" id="pasw" name="pasw" placeholder="  密码" /></td></tr>
<tr><td></td><td><div id="mima_1" name="mima_1" style="display:none; color:#F00"  >密码不能为空</div> <div id="mima_2" name="mima_2" style="display:none; color:#F00">密码必须6位以上</div></td></tr>

<tr><td class="kuan_td_class"><img src="../photo/denglu_image/mima.jpg" width="45" height="38"  /></td><td><input type="text" class="zhai_td_class" id="pasw2" name="pasw2" placeholder="  确认密码"/></td></tr>
	
<tr><td></td><td><div id="qrmm_1" name="qrmm_1" style="display:none; color:#F00">两次输入密码必须一致</div ></td></tr>
<tr><td><img src="../photo/denglu_image/yzm.jpg" width="45" height="38"  /></td><td class="yanzheng_td_class"><input type="text" id="yzm" class="yanzheng_td_class" name="yzm" placeholder="  验证码"/> &nbsp; 

<?php include_once("../js/yzm.js");echo '<script type="text/javascript"> 
var yanzhengma=drawPic();
</script>'?>
</td></tr>
<tr><td></td><td><div id="yzm_1" name="yzm_1" style="display:none; color:#F00">验证码错误</div> </td></tr>
<tr><td>
<input type="submit" name="submit1" value="注册" id="submit1" disabled = 'disabled' /></td>
<td><input type="button" name="zuce_denglu" value="已有账号，返回登录" id="zuce_denglu" /></td>
</tr>
 </form>
</table>
</div>
</div>
</body>
</html>