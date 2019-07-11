<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的订单</title>
<link href="css/order.css" rel="stylesheet" />
</head>
<script type="text/javascript">
 var xmlHttp;
 	 
 function createXmlHttpRequestObject(){
	if(window.ActiveXObject){
	  try{ xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  catch(e){
			xmlHttp=false;  
		  }
	  	
	}else {
		
	  try{  xmlHttp=new XMLHttpRequest();  
		  }catch(e){
			xmlHttp=false;    
		  }
	  	
	 }
	 if(!xmlHttp)
	 alert("错误");
	 else return xmlHttp;
	 
 }  
 function StatHandler()
 {
	 if(xmlHttp.readyState==4&&xmlHttp.status==200){
		document.getElementById("dingdan_xx").innerHTML=xmlHttp.responseText; 
	 }

	 
 }
 //创建一个对象
 
 /*function NIKEx(){
	 createXmlHttpRequestObject();
	 var cont="sp1";
	 xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'shuju.php?cont='+cont,false);
	 StatHandler();
	 xmlHttp.send(null);	
 }*/
 
  function qbyxdd(){
	 createXmlHttpRequestObject();
     var cont="dingdan1";
     xmlHttp.onreadystatechange=StatHandler; 
	 xmlHttp.open("GET",'dingdan_display.php?cont='+cont,false);
	 xmlHttp.send(null);
  }
  
  function dzf(){
	 createXmlHttpRequestObject();
     var cont="dingdan2";

     xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'dingdan_display.php?cont='+cont,false);
	 xmlHttp.send(null);
	  
	  
  }
  
 function dsh(){
	   createXmlHttpRequestObject();
     var cont="dingdan3";
	
     xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'dingdan_display.php?cont='+cont,false);
	 xmlHttp.send(null);
	  
	  
  }
  
 function ygb(){
	 createXmlHttpRequestObject();
     var cont="dingdan4";

     xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'dingdan_display.php?cont='+cont,false);
	 xmlHttp.send(null);
	  
	  
  }
 
 
 
  /*function ADIDASs(){
	 createXmlHttpRequestObject();
     var cont="sp2";
     xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'shuju.php?cont='+cont,false);
	 xmlHttp.send(null);
 }*/

</script>  




<body>
<div id="top">
  <?php
       include("demo_zqx11.php");
  ?>
</div>
<div class="personal-div1">

  <div class="personal-dd1"><br />
  <div class="personal-d1">
  <h2>订单中心</h2>
  <ul>
  
  <li><a href="personalcenter1.php">个人中心</a></li>
  <li><a href="order.php">我的订单</a></li>
  <li><a href="collection.php">我的收藏</a></li>
  <li><a href="coupon.php">我的优惠券</a></li>
  <li><a href="Address1.php">收货地址</a></li>
  
  </ul>
  </div>
  </div><br />

<div class="personal-dd2">
<div class="personal-d2">
<ul>
<li onclick="qbyxdd()">全部有效订单</li>
<li onclick="dzf()">已接单</li>
<li onclick="dsh()">已发货</li>
<li onclick="ygb()">已送达</li>
</ul>
</div>

<div>
<div><input type="search" autocomplete="off" id="search" width="70%" placeholder="订单号、商品名称" /></div>
<div id="dingdan_xx"></div>

</div>
</div> 
 
  
</div>

<div class="menu">
<ul>
<li>集团概况</li>
<li>新闻资讯</li>
<li>产品展示</li>
<li>红酒学院</li>
</ul>
</div>

<div class="footer">
<p style="opacity:0.5">我的网站 版权所有 2010-2018</p>
</div>
</body>
</html>