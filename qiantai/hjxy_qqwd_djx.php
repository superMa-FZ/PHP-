<!doctype html>
<html><head>
<meta charset="utf-8">
<title>无标题文档</title>

<style>

#bg{
	background-image:url(../photo/yjzx.jpg);
	width:100%;
	height:400px;
	}
.pp{
	font-size:14px;
	font-family:"微软雅黑";
	color:#999;
	}
body{
	background-color:#CCC;
	}
#div1{
	width:1400px;
	height:750px;
	margin-top:20px;
	margin-left:253px;
	border:#CCC solid 1px;;

	}
#div2{
	width:70%;
	height:750px;
	float:left;
	
	}
#div3{
	width:30%;
	height:610px;
	float:left;
	}
img{
	width:180px;
	height:150px;
	margin-left:15px;
	}
.h1{
	margin:0px auto;
	width:292px;
	background-color:#CCC;
	}
.tt{
	margin-top:10px;
	background-color:#FFF;
	}
.table2{
	margin-top:15px;
	}
#div4{
	background-color:#FFF;
	width:360px;
	height:600px;
	margin:10px auto;
	}
h4:hover{
	color:#FC6;
	}
a{
	font-family:"微软雅黑";
	}
a:hover{
	color:#FC6;
	}
#search{
	width:300px;
	height:33px;
	}
.underline{
            width: 600px;
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
            right: '50%',
            transition: 'all .8s',}	)
		},function(){$(".underline1").animate({left: '0%',
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
<div id="div2">
<table width="980" height="240" border="0" class="tt">
  <tr id="tr1">
    <td><img src="../photo/gsdt1.jpg"></td>
    <td><h4><a href="hjxx_5jz_djx.php" style="text-decoration:none; color:#000;">全球五大顶级酒庄</a></h4>
    	<p class="pp">1.拉菲酒庄拉斐酒庄是1855年波尔多葡萄酒评级时的顶级葡萄酒庄之一。连同奥比安酒庄、拉图酒庄、玛歌酒庄及1973年入选的茂同酒庄，并称波尔多“五大”名庄。拉斐酒庄被认为是“五大”中最典雅的。拉斐酒庄历史悠久，已有数百年历史。自17世纪西格家族入主后，酒品得到大幅提升。老西格去世后，其次子亚力山大与波尔多另一名庄拉图酒庄的女继承人结婚，此举使他们的儿子小亚力山大成为掌控“五大”中两大名庄的“葡萄王</p> 
         <hr  class="underline1"/>
    </td>
  </tr>
</table>
</div>
<div id="div3">
<div id="div4">
  <br/><table width="300"  border="0" align="center" >
    <tr>
   		<td height="33"><input type="search" autocomplete="off" id="search" name="baike-search" placeholder="search" /></td>
    </tr>

  </table><br/>
   <hr class="h1">

  <table width="300" border="0" align="center" class="table2" height="120">
    <tr>
      <td><a>新闻资讯</a></td>
    </tr>
    <tr>
      <td><a>业界资讯</a></td>
    </tr>
    <tr>
      <td><a>公司动态</a></td>
    </tr>
</table><br/>
<hr class="h1">
   <table width="300" border="0" align="center" class="table2">
    <tr>
      <td height="34"><a>为你推荐</a></td>
    </tr>
    </table>
      <table width="300" height="240" border="1px" cellspacing="0px" style="border-collapse:collapse" bordercolor="#CCCCCC" align="center" class="table2">
    <tr>
      <td><a>法国萨吕斯酒堡葡萄酒</a></td>
    </tr>
        <tr>
      <td><a>葡萄酒与春天的约会！</a></td>
    </tr>
        <tr>
      <td height="78"><a>韩媒：中国葡萄酒产量世界第六 年轻人更爱进口葡萄酒</a></td>
    </tr>
        <tr>
      <td><a>法国波尔多葡萄酒</a></td>
    </tr>
    </table>
    </div>
</div>
</div>
<?php
include("down_zqx.php");
?>
</body>
</html>