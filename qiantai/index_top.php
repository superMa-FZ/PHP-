<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords"/>
<meta name="description" />
<title></title>
<link rel="stylesheet" type="text/css" href="../css/top.css">
<script src="../js/jquery1.42.min.js" type="text/javascript"></script>
<script src="../js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
</head>
<body>
<!-- 代码 开始 -->
<div class="index_top">
    <ul class="pic">
        <li><a href="" target="_blank" class="ah"><img src="../photo/one1.jpg" width="100%" height="100%" class="imgs"/></a></li>
        <li><a href="" target="_blank" class="ah"><img src="../photo/one2.jpg" width="100%" height="100%" class="imgs" /></a></li>
    </ul>
    <a class="prev" href="javascript:void(0)"></a>
    <a class="next" href="javascript:void(0)"></a>
</div>
<script>
/*鼠标移过，左右按钮显示*/
$(".index_top").hover(function(){
	$(this).find(".prev,.next").fadeTo("show",0.1);
},function(){
	$(this).find(".prev,.next").hide();
})
/*鼠标移过某个按钮 高亮显示*/
$(".prev,.next").hover(function(){
	$(this).fadeTo("show",0.7);
},function(){
	$(this).fadeTo("show",0.1);
})
$(".index_top").slide({ titCell:".num ul" , mainCell:".pic" , effect:"fold", autoPlay:true, delayTime:700 , autoPage:true });
</script>
<!-- 代码 结束 -->
<div style="text-align:center;margin:50px 0">

</div>
</body>
</html>

