<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>收货地址</title>
<link href="css/Address1.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/address.js"></script>
<script type="text/javascript" src="css/jquery-1.8.3.min.js"></script>

<script type="text/javascript">
	$(function ($) {
		//弹出登录
		$("#example").hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.6'
			}, 1000);
		}).on('click', function () {

			$("#LoginBox").fadeIn("slow");
		});
		//
		//按钮的透明度
		$("#loginbtn").hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.8'
			}, 1000);
		});
		
				//关闭
		$(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
			$("#LoginBox").fadeOut("fast");
			$("#mask").css({ display: 'none' });
		});
	});
	</script>	
	
</head>

<body>
<div id="top">
  <?php
       include("demo_zqx11.php");
  ?>
</div>

<div class="address_div1"><br />
  <div class="address_div11">
  <h2>订单中心</h2>
  <ul>
  
  <li><a href="personalcenter1.php">个人中心</a></li>
  <li><a href="order.php">我的订单</a></li>
  <li><a href="collection.php">我的收藏</a></li>
  <li><a href="coupon.php">我的优惠券</a></li>
  <li><a href="Address1.php">收货地址</a></li>
  </ul>
  </div>
  
  <div class="address_div12"><br /><br /><a href="#" id="example">添加收货地址</a>
  	<div id="content"></div>
    <div id="xiugai"><p>修改</p></div>
    <div id="shanchu"<p>删除</p></div>
  	<div id="LoginBox">
        <div class="row1">
            收货地址<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
        </div>
        <div class="row" id="address_1">
            <span class="inputBox">
                <input type="text" id="txtName" placeholder="收货人姓名" />
            </span>
        </div>
        <div class="row" id="address_2">
            <span class="inputBox">
                <input type="text" id="txtPwd" placeholder="收货人电话" />
            </span>
        </div>
        <div class="timer" id="address_3">
        	<select style="width:210px; height:35px;" id="province" onChange="changeSelect(this);">
            	<option value="000000" id="one" disabled="disabled">-请选择省-</option></select>
             <select style="width:210px; height:35px;" id="city" onChange="changeSelect(this);">
            	<option value="000000" disabled="disabled">-请选择市-</option></select>
              <select style="width:210px; height:35px;" id="district" onChange="changeSelect(this);">
            	<option value="000000" disabled="disabled">-请选择区-</option></select>
        </div>
        <div>
        	<textarea class="textarea1" rows="4" cols="33" id="address_4">详细地址</textarea>
        </div>
        <div class="row">
            <a href="#" id="loginbtn" onclick="preservation(this)">保存</a>
            <a href="#" id="closebtn" onclick="closebtn()">取消</a>
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