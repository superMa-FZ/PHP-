<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
#bg{
	background-image:url(../photo/hjxy.jpg);
	width:100%;
	height:450px;
	}
#div1{
	width:1500px;
	height:750px;
	margin-top:40px;
	margin-left:190px;
	}
.divs{
	width:320px;
	height:340px;
	float:left;
	margin-left:50px;
	margin-top:30px;
	}
.zx{
	font-family:"微软雅黑";
	font-size:14px;
	color:#999;
	}
p{
	font-family:"微软雅黑";
	font-size:18px;
	color:#999;
	}
img{
	width:320px;
	height:200px;
	}
.underline{
            width: 320px;
			height:0px;
            background:#CCC;
            position: relative;
	}

 .shiqu{
            left: 0%;
            width: 100%;
        }	
 </style>
 <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript">
	   $(document).ready(function(){
		
		
		$("#tr1").hover(function(){
        $(".underline1").animate(  
		  { content: "",
            width: '0',
            height: '1px',
            position: 'absolute',
            top: '100%',
            left: '50%',
            transition: 'all .8s',}	)
		},function(){$(".underline1").animate({left: '0%',
            width: '100%'});});
	   });
	   	   $(document).ready(function(){
		
		
		$("#tr2").hover(function(){
        $(".underline2").animate(  
		  { content: "",
            width: '0',
            height: '1px',
            position: 'absolute',
            top: '100%',
            right: '50%',
            transition: 'all .8s',}	)
		},function(){$(".underline2").animate({left: '0%',
            width: '100%'});});
	   });
	     $(document).ready(function(){
		
		
		$("#tr3").hover(function(){
        $(".underline3").animate(  
		  { content: "",
            width: '0',
            height: '1px',
            position: 'absolute',
            top: '100%',
            right: '50%',
            transition: 'all .8s',}	)
		},function(){$(".underline3").animate({left: '0%',
            width: '100%'});});
	   });
	   	     $(document).ready(function(){
		
		
		$("#tr4").hover(function(){
        $(".underline4").animate(  
		  { content: "",
            width: '0',
            height: '1px',
            position: 'absolute',
            top: '100%',
            left: '50%',
            transition: 'all .8s',}	)
		},function(){$(".underline4").animate({left: '0%',
            width: '100%'});});
	   });
	   	     $(document).ready(function(){
		
		
		$("#tr5").hover(function(){
        $(".underline5").animate(  
		  { content: "",
            width: '0',
            height: '1px',
            position: 'absolute',
            top: '100%',
            right: '50%',
            transition: 'all .8s',}	)
		},function(){$(".underline5").animate({left: '0%',
            width: '100%'});});
	   });
	   	     $(document).ready(function(){
		
		
		$("#tr6").hover(function(){
        $(".underline6").animate(  
		  { content: "",
            width: '0',
            height: '1px',
            position: 'absolute',
            top: '100%',
            right: '50%',
            transition: 'all .8s',}	)
		},function(){$(".underline6").animate({left: '0%',
            width: '100%'});});
	   });
	   
	</script>
</head>

<body>
<?php
include("demo_zqx.php");
?>
<div id="bg"></div>
<div id="div1">
<div class="divs" id="tr1"><img src="../photo/hjxy1.jpg"><p align="left"><a href="hjxy_qqwd_djx.php" style="text-decoration:none; color:#999;">五大酒庄</a><hr  class="underline1"/></p><a class="zx">法国葡萄酒传统的五大名庄来源于1855年的波尔多葡萄酒官方分级制度。</a></div>
<div class="divs" id="tr2"><img src="../photo/hjxy2.jpg"><p align="left">等级制度<hr class="underline2"/><a class="zx">葡萄酒分级制度是指按照某种标准将葡萄酒从质量上进行分级的一项制度。...</a></div>
<div class="divs" id="tr3"><img src="../photo/hjxy3.jpg"><p align="left">储藏方式<hr class="underline3"/><a class="zx">葡萄酒储存条件的优劣对葡萄酒的影响不亚于不同的工作环境对一个人事业进步的影响。...</a></div>
<div class="divs" id="tr4"><img src="../photo/hjxy4.jpg"><p align="left">美食搭配<hr class="underline4"/><a class="zx">葡萄酒储存条件的优劣对葡萄酒的影响不亚于不同的工作环境对一个人事业进步的影响。...</a></div>
<div class="divs" id="tr5"><img src="../photo/hjxy5.jpg"><p align="left">红酒分类<hr class="underline5"/><a class="zx">从葡萄酒的颜色、二氧化碳压力、含糖量、采摘原料与特殊工艺等不同方面为你全方位立体式的揭开市售葡萄酒的.....</a></div>
<div class="divs" id="tr6"><img src="../photo/hjxy6.jpg"><p align="left">原料制作<hr class="underline6"/><a class="zx">从葡萄酒的颜色、二氧化碳压力、含糖量、采摘原料与特殊工艺等不同方面为你全方位立体式的揭开市售葡萄酒的.....</a></div>
</div>
<?php
include("down_zqx.php");
?>
</body>
</html>