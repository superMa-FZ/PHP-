<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link rel="stylesheet" href="../admin_css/yhzc.css">
<script type="text/javascript" src="../admin_js/jquery.js"></script>
<script type="text/javascript" src="../admin_js/yhm.js"></script>
<body>
<form action="dlym.php" name="form1" id="form1" method="post">
<table name="table1" id="table1">
<tr>
<td class="kuan_td_class"><img src="../image/yhm.jpg" width="45" height="38"  /></td><td><input type="text" id="user" class="zhai_td_class" name="user" placeholder="  用户名"/></td></tr>


<tr><td></td><td><div id="yhm_cuowu_1" name="yhm_cuowu_1" style="display:none; color:#F00" >用户名不能为空</div> <div id="yhm_cuowu_2" name="yhm_cuowu_2" style="display:none; color:#F00" >用户名由6~16位字母或数字组成</div></td></tr>

<tr><td class="kuan_td_class"><img src="../image/mima.jpg" width="45" height="38"  /></td><td><input type="text" class="zhai_td_class" id="pasw" name="pasw" placeholder="  密码" /></td></tr>
<tr><td></td><td><div id="mima_1" name="mima_1" style="display:none; color:#F00"  >密码不能为空</div> <div id="mima_2" name="mima_2" style="display:none; color:#F00">密码必须6位以上</div></td></tr>

<tr><td class="kuan_td_class"><img src="../image/mima.jpg" width="45" height="38"  /></td><td><input type="text" class="zhai_td_class" id="pasw2" name="pasw2" placeholder="  确认密码"/></td></tr>
	
<tr><td></td><td><div id="qrmm_1" name="qrmm_1" style="display:none; color:#F00">两次输入密码必须一致</div ></td></tr>
<tr><td><img src="../image/yzm.jpg" width="45" height="38"  /></td><td class="yanzheng_td_class"><input type="text" id="yzm" class="yanzheng_td_class" name="yzm" placeholder="  验证码"/> &nbsp; 

<?php include_once("../admin_js/yzm.js");echo '<script type="text/javascript"> 
var yanzhengma=drawPic();
</script>'?>
</td></tr>
<tr><td></td><td><div id="yzm_1" name="yzm_1" style="display:none; color:#F00">验证码错误</div> </td></tr>
<tr><td>
<input type="submit" name="submit1" value="注册" id="submit1" disabled = 'disabled' /></td></tr>
</table>
</form>
</div>
</body>
</html>