<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<style type="text/css">
#one{
	height:450px;
	width:100%;
	background:url(../photo/paotaojiu.jpg);
}
#two{
	width:100%;
	text-align:center;
}

a{
	color:#000;
	text-decoration:none;
}
#serch{
	height:35px;
	width:230px;
}
#three{
	width:70%;
	margin-left:15%;
	height:30px;
	margin-top:30px;
}
#threee{
	width:15%;
	background-color:#CCC;
	margin-top:30px;
	float:left;
	height:30px
}
#threeee{
	margin-top:30px;
	width:85%;
	float:right;
	height:30px;
	background-color:#FFF;
}
#four{
	width:70%;
	margin-left:15%;
	height:40px;
	margin-top:15px;
}
#fourr{
	float:left;
	height:30px;
	background-color:#FFF;
	width:50px;
	margin-top:15px;
	margin-left:2%;
}
#fourrr{
	float:left;
	height:30px;
	background-color:#FFF;
	width:50px;
	margin-top:15px;
}
#five{
	width:70%;
	margin-left:15%;
	height:550px;
	margin-top:30px;
}
#fivee{
	width:23%;
	margin-top:30px;
	height:400px;
	float:left;
}
#fiveee{
	height:300px;
	float:left;
	width:100%;
	background-image:url(../photo/hongputaojiu1.png);
}
#fiveeee{
	height:100px;
	float:left;
	width:100%;
	background-color:#FFF;
}
#fivee1{
	width:23%;
	margin-top:30px;
	height:400px;
	margin-left:20px;
	float:left;
}
#fiveee1{
	height:300px;
	float:left;
	width:100%;
	background-image:url(../photo/hongputaojiu2.png);
}
#fiveeee1{
	height:100px;
	float:left;
	width:100%;
	background-color:#FFF;
}
#fivee2{
	width:23%;
	margin-top:30px;
	height:400px;
	margin-left:20px;
	float:left;
}
#fiveee2{
	height:300px;
	float:left;
	width:100%;
	background-image:url(../photo/hongputaojiu3.png);
}
#fiveeee2{
	height:100px;
	float:left;
	width:100%;
	background-color:#FFF;
}
#fivee3{
	width:23%;
	margin-top:30px;
	height:400px;
	margin-left:20px;
	float:left;
}
#fiveee3{
	height:300px;
	float:left;
	width:100%;
	background-image:url(../photo/hongputaojiu4.png);
}
#fiveeee3{
	height:100px;
	float:left;
	width:100%;
	background-color:#FFF;
}
.tptm{
	background:#000;
    opacity:0.2;
    filter:alpha(opacity=50);
}
</style>
<script src="../js/jquery.js"></script>
<script language="javascript">
$(function(){
$('#fiveee').hover(function(){
  $(this).addClass('tptm'); 
},function(){
  $(this).removeClass('tptm'); 
});
$('#fiveee1').hover(function(){
  $(this).addClass('tptm'); 
},function(){
  $(this).removeClass('tptm'); 
});
$('#fiveee2').hover(function(){
  $(this).addClass('tptm'); 
},function(){
  $(this).removeClass('tptm'); 
});
$('#fiveee3').hover(function(){
  $(this).addClass('tptm'); 
},function(){
  $(this).removeClass('tptm'); 
});
});

</script>

<body bgcolor="#E4E4E4">
<?php
include("demo_zqx.php");
?>
<div id="one"></div><br/>
<div id="two">
  <a href="#">全部&nbsp;&nbsp;</a>
  <a href="chanpinzhanshibaiputaojiu_zqx.php">白葡萄酒&nbsp;&nbsp;</a>
  <a href="chanpinzhanshihongputaojiu_zqx.php">红葡萄酒&nbsp;&nbsp;</a><br/><br/>
  <input type="search" autocomplete="off" id="serch" name="baike-search" placeholder="请输入关键词" />  
</div>
<div id="three">
  <div id="threee">产地:</div>
    <div id="threeee">
      <a href="#">全部&nbsp;</a>
      <a href="#">法国&nbsp;</a>
      <a href="#">澳洲&nbsp;</a>
      <a href="#">德国</a>
      </div>
</div>
<div id="four">
   <div id="fourrr">推荐↑</div>
   <div id="fourr">热门↑</div>
   <div id="fourr">最新↑</div>
   <div id="fourr">销量↑</div>
</div>
<div id="five">
  <div id="fivee">
    <div id="fiveee"></div>
    <div id="fiveeee">
      <p align="center"><a href="hptdianpu_zqx.php">法国奥黛斯古堡干红葡萄酒</a></p>
      <p align="center"><font color="#999999";>￥199.00元</font></p>
    </div>
  </div>
  <div id="fivee1">
    <div id="fiveee1"></div>
    <div id="fiveeee1">
    <p align="center"><a href="hptdianpu1_zqx.php">法国美罗堡干红葡萄酒</a></p>
      <p align="center"><font color="#999999";>￥149.00元</font></p>
    </div>
  </div>
  <div id="fivee2">
    <div id="fiveee2"></div>
    <div id="fiveeee2">
    <p align="center"><a href="hptdianpu2_zqx.php">帕力斯城堡干红葡萄酒</a></p>
      <p align="center"><font color="#999999";>￥489.00元</font></p>
    </div>
  </div>
  <div id="fivee3">
    <div id="fiveee3"></div>
    <div id="fiveeee3">
    <p align="center"><a href="hptdianpu3_zqx.php">法国塞利尔罗纳河干红葡萄酒</a></p>
      <p align="center"><font color="#999999";>￥335.00元</font></p>
    </div>
  </div>
</div>
<?php
include("down_zqx.php");
?>
</body>
</html>