<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>帕力斯城堡干红葡萄酒</title>
</head>
<style type="text/css">
#one{
	height:450px;
	width:100%;
	background:url(../photo/paotaojiu.jpg);
}
#two{
	height:450px;
	width:100%;
	margin-top:40px;
	background:#FFF;
}
#twoo{
	height:400px;
	width:20%;
	margin-left:20%;
	background:url(../photo/5.jpg);
	float:left;
}
#twooo{
	height:400px;
	margin-left:5%;
	width:35%;
	float:left;
	position:relative;
}
#twooo1{
	height:40px;
	width:100%;
	color:#F00;
	font-size:24px;
	font-weight:bold;
	font-family:Arial, Helvetica, sans-serif;
	position:absolute;
}
#twooo2{
	height: 40px;
	width: 100%;
	color: #F00;
	font-size: 24px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	left: 2px;
	top: 119px;
}
#jrgwc{
	height:60px;
	width:180px;
	background:url(../photo/gwc.png);
}
#jrsc{
	height:60px;
	width:160px;
	background:url(../photo/jrsc.png);
}
#three{
	width:19%;
	margin-left:10%;
	height:2000px;
	float:left;
	margin-top:30px;
	background:#FFF;
}
#four{
	width:50%;
	margin-left:20px;
	height:7100px;
	float:left;
	margin-top:30px;
	background:#FFF;
}
#downn{
	height:7150px;
	width:100%;
}
</style>
<script src="../js/jquery.js"></script>
<script language="javascript">
  function jia(){
       document.getElementById('input0').value=parseInt(document.getElementById('input0').value)+1;
}
  function jian(){
     if(document.getElementById('input0').value>1){
          document.getElementById('input0').value=document.getElementById('input0').value-1;
                         }
 }
 
$(document).ready(function(){
	 $("#twooo2").hide();
	 $("#zxp").click(function(){
		$("#twooo2").show();
		$("#twooo1").hide();
	 })
	 $("#sg").click(function(){
		$("#twooo2").hide();
		$("#twooo1").show();
	 })
 })

</script>

<body bgcolor="#CCCCCC">
<?php
include("demo_zqx.php");
?>
<div id="one"></div>
<div id="two">
  <form action="" method="post">
  <div id="twoo"></div>
  <div id="twooo">
    <h2>帕力斯城堡干红葡萄酒</h2>
    <p>帕力斯城堡干红葡萄酒，稀缺的一款产自于波尔多圣富的小众精品酒；该酒庄葡萄园占地22公顷，主要为黏土和石灰岩地质。该红葡萄酒由46％的梅洛，41％赤霞珠和13％品丽珠精心调配而成，圆润饱满，陈酿一段后表现出波尔多酒的特质。</p>
    <div id="twooo1">￥ 149.00</div><br/>
    <div id="twooo2">￥ 699.00</div><br/>
    <p>
      规格&nbsp;&nbsp;
      <input name="sg" id="sg" type="button" value="闪购">&nbsp;
      <input name="zxp" id="zxp" type="button" value="整箱批"><br/>
    </p>
    <p>
      数量&nbsp;&nbsp;
     <input id="input2" name="input2" type="button" value="-" onClick="jian()">
     <input id="input0" type="text" name="input0" value=1 style="width:40px;">
     <input id="input1" name="input1" type="button" value="+" onClick="jia()">
    </p><br/>
    <p>
    <input name="jrgwc" type="button" id="jrgwc">
    <input name="jrsc" type="button" id="jrsc">
    </p>
  </div>
  </form>
</div>
<div id="downn">
<div id="three">
   <p><font size="+2">为您推荐</font></p>
   <p><div style="width:90%; height:310px; background:url(../photo/hongputaojiu1.png); margin-left:5%;"></div></p>
   <p align="center">法国奥黛斯古堡干红葡萄酒</p>
   <p><div style="width:90%; height:310px; background:url(../photo/hongputaojiu2.png); margin-left:5%;"></div></p>
   <p align="center">法国美罗堡干红葡萄酒</p>
   <p><div style="width:90%; height:310px; background:url(../photo/baiputaojiu2.png); margin-left:5%;"></div></p>
   <p align="center">冰灵雷司令白葡萄酒</p>
    <p><div style="width:90%; height:310px; background:url(../photo/baiputaojiu1.png); margin-left:5%;"></div></p>
   <p align="center">玛瑞娜特浓情白葡萄酒</p>
    <p><div style="width:90%; height:310px; background:url(../photo/hongputaojiu1.png); margin-left:5%;"></div></p>
   <p align="center">帕力斯城堡干红葡萄酒</p>
</div>
<div id="four">
  <p><font size="-1" color="#FF9B6A">详细信息</font></p><hr/>
  <p><font size="-1" color="#666666">产地：德国</font></p><hr/>
  <p align="center">
    <img src="../photo/tu10.jpg">
  </p>
</div>
</div>
<?php
include("down_zqx.php");
?>
</body>
</html>