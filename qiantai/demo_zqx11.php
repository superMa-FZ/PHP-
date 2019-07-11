<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="js/jquery.js"></script>
<style type="text/css">
        ol,ul { list-style:none; }
        .nav span{ 
            display: inline-block; 
            line-height: 36px; 
            text-align: center; 
			color:#FFF;
		}
		.spanspan{
			width:100px;
			height:50px;
		}

		.spanspan ul li:hover{
			background-color:#D6F5F8;
			color:#B9D9F9;
		}
        .nav ul{ 
            position: absolute; 
            width:120px; 
            display: none; 
			color:#e8c080;
			margin:0;
			padding:0;
			background-color:#FFF;
			text-align:center;
			border:1px solid #CCC;
			z-index:9999;
        }
		.nav{
			background:#FFF;
			width:100%;
			height:60px;
	
		}
		#zc{ 
		    background:#e8c080; 
			color:#FFF;
			height:30px;
			width:60px;
			}
        #dl{color:#e8c080; 
		    background:#666;
			height:30px;
			width:60px;
		}
		.logo{
			background:url(../photo/tp.png);
			width:200px;
			height:50px;
		}
		.qaz{
			width:200px;
			height:50px;
			float:left;
		}
		.zxc{
			height:50px;
			width:1000px;
			float:right;
		}
		.ljj{
			 text-decoration:none;
			 color:#000;
		}
		#yhh{text-align:right;}
		#bigg{text-align:right;}
    </style>

<body>
<?php
session_start();
if(isset($_SESSION['urse_id'])){
    ?>
    <script language="javascript">
        $(document).ready(function(){
            $('#bigg').hide();
            $('#yhh').show();
        });</script>
<?php
}
else{
?>
    <script language="javascript">
        $(document).ready(function(){
            $('#bigg').show();
            $('#yhh').hide();
        });
    </script>
    <?php
}
?>
<div class="nav">
    <form action="" method="post">
        <div class="qaz"><span class="logo"></span></div>
        <div class="zxc">
            <span class="spanspan"><a class="ljj" href="index.php">网站首页</a></span>
            <span class="spanspan"><a class="ljj" href="#">集团概况</a>
            <ul>
                <li><a class="ljj" href="gsjj_djx.php">公司简介</a></li>
                <li><a class="ljj" href="jrwm_djx.php">加入我们</a></li>
            </ul>
        </span>
            <span class="spanspan"><a class="ljj" href="#">新闻资讯</a>
            <ul>
                <li><a class="ljj" href="yjzx_djx.php">业界资讯</a></li>
                <li><a class="ljj" href="gsdt_djx.php">公司动态</a></li>
            </ul>
        </span>
            <span class="spanspan"><a class="ljj" href="#">产品展示</a>
            <ul>
                <li><a class="ljj" href="chanpinzhanshibaiputaojiu_zqx.php">白葡萄酒</a></li>
                <li><a class="ljj" href="chanpinzhanshihongputaojiu_zqx.php">红葡萄酒</a></li>
            </ul>
        </span>
            <span ><a class="ljj" href="hjxy_djx.php">红酒学院</a></span>
            <span id="bigg"><a href="denglu_zqx.php"> <input name="dl" id="dl" type="button" value="登录"></a>&nbsp;<a href="zhuce_zqx.php"><input name="zc" id="zc" type="button" value="注册"></a></span>
            <span id="yhh" class="spanspann"><a class="ljj" href="#">
		<?php
        if(isset($_SESSION['urse_id'])){
        ?></a>
            <ul class="ull">
                <li><a class="ljj" href="zhuxiao.php">注销</a></li>
                <li><a class="ljj" href="personalcenter1.php">个人中心</a></li>
            </ul>
   </span>
            <span class="spanspann"><a href="car.php">
   <font color="#e8c080">购物车</font></a>
       </span>
            <?php
            }
            ?>
        </div>
    </form>
</div>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('.spanspan').hover(function(){
            $(this).find('ul').show();
        },function(){
            $(this).find('ul').hide();
        });
        $(".spanspann").click(function(){
            $('.ull').toggle();
        });
    });
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('.spanspan').hover(function(){
        $(this).find('ul').show();
    },function(){
        $(this).find('ul').hide();
    });
	$(".spanspann").click(function(){
        $('.ull').toggle();
    });
});
</script>
</html>