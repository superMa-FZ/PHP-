<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head><br>
<script type="text/javascript" src="../js/jquery.js"></script>
<style type="text/css">
#zt{
	font-size:30px;
	font-weight:boild;
}
#dl{
	width:270px;
	background-color:#3CF;
	color:#FFF;
}
#big{
	width:100%;
	height:400px;
}
#one{
	width:100%;
	height:100px;
}
#two{
	width:100%;
	height:300px;
	background:url(../photo/timg.jpg)
}
#zc{
	width:270px;
	background-color:#6CC;
	color:#FFF;
}
</style>
<script language="javascript">
function isyh(){
	  var d=document.getElementById("yh").value;
      var e=/^[a-zA-Z0-9]{6,16}$/;
      if(!e.test(d)){
        alert("请正确填写用户名！");
        document.getElementById("yh").value="";
      }
}
$(document).ready(function(){
	$("#zc").click(function(){
		window.location.replace("zhuce_zqx.php");  
		})
	
});
</script>

<body>
<div id="big">
<div id="one">
<img src="../photo/tp.png">
</div>
<div id="two">
<table width="300" border="0" align="center">
<form action="../admin/admin_php/dlym.php" method="post">
<caption><font id="zt">会员登陆</font></caption>
  <tr>
    <td>用户名</td>
    <td><input name="yhmm1" id="yh" type="text" onBlur="isyh()"></td>
  </tr>
  <tr>
    <td>密码</td>
    <td><input name="pasw1" id="mm" type="password"></td>
  </tr>
  <tr >
    <td colspan="2"><input type="submit" name="submit2" id="dl" value="登录" /></td>
  </tr>
  <tr>
    <td colspan="2"><input name="zc" id="zc" type="button" value="没有帐号?点击注册"></td>
  </tr>
  </form>
</table>
</div>
</div>
</body>
</html>