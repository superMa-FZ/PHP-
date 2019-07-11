<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的优惠券</title>
<link href="css/coupon.css" rel="stylesheet" />
<link href="css/coupon_display.css" rel="stylesheet" />
<script src="js/jquery.js"></script>
<script src="js/coupon.js"></script>
</head>

<body>
<div id="top">
<?php
  include("demo_zqx11.php");
?>
</div>
<div class="coupon-div1">
  <div class="coupon-dd1">
  <div class="coupon-d1">
  <h2>订单中心</h2>
  <ul>
  
  <li><a href="personalcenter1.php">个人中心</a></li>
  <li><a href="order.php">我的订单</a></li>
  <li><a href="collection.php">我的收藏</a></li>
  <li><a href="coupon.php">我的优惠券</a></li>
  <li><a href="Address1.php">收货地址</a></li>
  
  </ul>
  </div>
  </div>
<div class="coupon-dd2">
<div class="coupon-d2">
<ul>
<li onclick="already_received()">已领取</li>
<li onclick="unclaimed()">待领取</li>
<li onclick="already_used()">已使用</li>
<li onclick="expired()">已过期</li>
</ul>
</div>

<div>
<div id="coupon-d3"></div>

</div>
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