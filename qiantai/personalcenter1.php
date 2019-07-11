<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人中心</title>
<link rel="stylesheet" href="css/personalcenter1.css" />
</head>

<body>
<div id="top">
  <?php
       include("demo_zqx11.php");
       session_start()
  ?>
</div>
<div class="personalcenter_div1"><br />

  <div class="personalcenter_div11">
  <h2>订单中心</h2>
  <ul>
  
  <li><a href="personalcenter1.php">个人中心</a></li>
  <li><a href="order.php">我的订单</a></li>
  <li><a href="collection.php">我的收藏</a></li>
  <li><a href="coupon.php">我的优惠券</a></li>
  <li><a href="Address1.php">收货地址</a></li>
  </ul>
  </div>
<div class="personalcenter_div2">
	<div class="personalcenter_div21"><a href="#"><img src="photo/touxiang.jpg" /></a><h4><?=$_SESSION['urse_id']?></h4><p>普通会员</p></div>
    <div class="personalcenter_div22">
    	<div class="personalcenter_div22_1"><span class="span1"><a href="#">0</a></span><p class="personal-p1">待支付</p></div>
        <div class="personalcenter_div22_1"><span><a href="#">0</a></span><p>待收货</p></div>
        <div class="personalcenter_div22_1"><span><a href="#">￥0.00元</a></span><p>账户余额</p></div>
     </div>
     <div class="personal-dd3">
        <table>
        <tr>
          <td width="35" class="personal-dd3-td1"><img src="photo/pc1.JPG" width="35" height="31" /></td>
        <td width="326"><br/>查看所有订单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
        <tr>
          <td><img src="photo/pc2.JPG" width="35" height="31" /></td>
        <td><br/>我的收藏</td></tr>
        <tr>
          <td><img src="photo/pc3.png" width="35" height="31" /></td>
        <td><br/>我的优惠券</td></tr><tr>
          <td><img src="photo/pc4.png" width="35" height="31" /></td>
        <td><br/>收货地址</td></tr>
        <tr>
          <td><img src="photo/pc5.JPG" width="35" height="31" /></td>
        <td><br/>消费明细</td></tr>
        <tr>
          <td><img src="photo/pc6.png" width="35" height="31" /></td>
        <td><br/>修改个人信息</td></tr>
        </table>
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
<p>我的网站 版权所有 2010-2018</p>
</div>

</body>
</html>