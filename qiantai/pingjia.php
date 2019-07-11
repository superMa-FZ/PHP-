<!DOCTYPE html>
<html>
<style type="text/css">
    li{
        float: left;}
    ul{
        list-style: none;
    }

</style>
	<head>
		<meta charset="utf-8" />
		<title>星级评价</title>
		<link rel="stylesheet" href="css/mytyle.css" />
		<script type="text/javascript" src="js/jquery-1.11.0.js" ></script>
		<script type="text/javascript" src="js/my.js" ></script>
	</head>
	<body>
    <form action="submit_pj.php" method="post">
    	<div class="pj"><input type="text" class="textarea1" name="pinglun" /></div><br>
		<h3>店铺评分：</h3>
          <div class="box">
			<div class="list">
                <ul>
				<li  class="star1">★</li>
				<li  class="star2">★</li>
				<li  class="star3">★</li>
				<li  class="star4">★</li>
				<li  class="star5">★</li>
                </ul>
			</div>
			<span class="remark">亲，请客观给出评价~</span><input type="hidden" name="dafen" id="dafen" value="5" /><input type="hidden" name="id_bh"  value="<?=$_GET['id']?>" />
		</div>
        <button class="fabu" type="submit" name="submit_pj">发布</button>
    </form>
    </body>
</html>
