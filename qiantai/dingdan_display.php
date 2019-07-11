<link  href="css/dingdan_display.css" rel="stylesheet"/>
<?php
 $cont=$_GET['cont'];
 session_start();
 include_once ("../admin/admin_php/conn.php");
 echo "<div id='divbig' align='center'>";
 echo "<div id='div_kongbai' align='center'>"."&nbsp;";
 if($cont=="dingdan1"){
//echo  "<div>全部订单查询</div>";
?>



         <?php
         $result=mysqli_query($conn,"select DISTINCT dingdan_bh from dingdan where urse_id=".$_SESSION['urse_id']);
         while($rows = mysqli_fetch_array($result)){
             $result2=mysqli_query($conn,"select dingdan_zt from zt where dingdan_bh=".$rows['dingdan_bh']);
             $rows2= mysqli_fetch_array($result2);
             echo   "  <table style='font-size: 12px'>   <caption>订单编号：".$rows['dingdan_bh']."&nbsp&nbsp&nbsp&nbsp订单状态:".$rows2['dingdan_zt']."</caption>
         <tr><td>商品名字</td><td>商品数量</td><td>总价</td><td>电话</td><td>地址</td><td>配送方式</td><td>收货人</td><td>性别</td></tr>";
             $result1=mysqli_query($conn,"select *  from dingdan where dingdan_bh="."'".$rows['dingdan_bh']."'");
             while($rows1= mysqli_fetch_array($result1)) {
                 echo "<tr><td>" .$rows1['wine_name']."</td><td>" .$rows1['wine_shuliang']."</td><td>" .$rows1['tongji']."</td><td>" .$rows1['tel'] . "</td><td>".$rows1['address']."</td><td>".$rows1['psfs']."</td><td>".$rows1['shouhuoren']."</td><td>".$rows1['sex']."</td></tr>";
         }
          echo   "</table>" ; }
}



else if($cont=="dingdan2"){
//echo  "<div>待支付订单</div>";

            $result=mysqli_query($conn,"select DISTINCT dingdan_bh from dingdan where urse_id=".$_SESSION['urse_id']);
            while($rows = mysqli_fetch_array($result)){
                $result2=mysqli_query($conn,"select dingdan_zt from zt where dingdan_bh=".$rows['dingdan_bh']);
                $rows2= mysqli_fetch_array($result2);
                if($rows2['dingdan_zt']=='已接单'){
                echo   "  <table style='font-size: 12px'>   <caption>订单编号：".$rows['dingdan_bh']."&nbsp&nbsp&nbsp&nbsp订单状态:".$rows2['dingdan_zt']."</caption>
                 <tr><td>商品名字</td><td>商品数量</td><td>总价</td><td>电话</td><td>地址</td><td>配送方式</td><td>收货人</td><td>性别</td></tr>";
                $result1=mysqli_query($conn,"select *  from dingdan where dingdan_bh="."'".$rows['dingdan_bh']."'");
                while($rows1= mysqli_fetch_array($result1)) {
                    echo "<tr><td>" .$rows1['wine_name']."</td><td>" .$rows1['wine_shuliang']."</td><td>" .$rows1['tongji']."</td><td>" .$rows1['tel'] . "</td><td>".$rows1['address']."</td><td>".$rows1['psfs']."</td><td>".$rows1['shouhuoren']."</td><td>".$rows1['sex']."</td></tr>";
                }
                echo   "</table>" ; }}
 }
else if($cont=="dingdan3"){
//echo "<div>待收货订单</div>";

    $result=mysqli_query($conn,"select DISTINCT dingdan_bh from dingdan where urse_id=".$_SESSION['urse_id']);
    while($rows = mysqli_fetch_array($result)){
        $result2=mysqli_query($conn,"select dingdan_zt from zt where dingdan_bh=".$rows['dingdan_bh']);
        $rows2= mysqli_fetch_array($result2);
        if($rows2['dingdan_zt']=='已发货'){
            echo   "  <table style='font-size: 12px'>   <caption>订单编号：".$rows['dingdan_bh']."&nbsp&nbsp&nbsp&nbsp订单状态:".$rows2['dingdan_zt']."</caption>
                 <tr><td>商品名字</td><td>商品数量</td><td>总价</td><td>电话</td><td>地址</td><td>配送方式</td><td>收货人</td><td>性别</td></tr>";
            $result1=mysqli_query($conn,"select *  from dingdan where dingdan_bh="."'".$rows['dingdan_bh']."'");
            while($rows1= mysqli_fetch_array($result1)) {
                echo "<tr><td>" .$rows1['wine_name']."</td><td>" .$rows1['wine_shuliang']."</td><td>" .$rows1['tongji']."</td><td>" .$rows1['tel'] . "</td><td>".$rows1['address']."</td><td>".$rows1['psfs']."</td><td>".$rows1['shouhuoren']."</td><td>".$rows1['sex']."</td></tr>";
            }
            echo   "</table>" ; }}

 }

else if($cont=="dingdan4") {
//echo  "<div>已取消订单</div>";
    $result=mysqli_query($conn,"select DISTINCT dingdan_bh from dingdan where urse_id=".$_SESSION['urse_id']);
    while($rows = mysqli_fetch_array($result)){
        $result2=mysqli_query($conn,"select * from zt where dingdan_bh=".$rows['dingdan_bh']);
        $rows2= mysqli_fetch_array($result2);
        if($rows2['dingdan_zt']=='已送达'){
            echo   "  <table style='font-size: 12px'>   <caption>订单编号：".$rows['dingdan_bh']."&nbsp&nbsp&nbsp&nbsp订单状态:".$rows2['dingdan_zt']."</caption>
                 <tr><td>商品名字</td><td>商品数量</td><td>总价</td><td>电话</td><td>地址</td><td>配送方式</td><td>收货人</td><td>性别</td><td>评价</td></tr>";
            $result1=mysqli_query($conn,"select *  from dingdan where dingdan_bh="."'".$rows['dingdan_bh']."'");
            while($rows1= mysqli_fetch_array($result1)) {
                if($rows2['dingdan_sfpl']==0){
                    $idx=$rows2['dingdan_bh'];
                echo "<tr><td>" .$rows1['wine_name']."</td><td>" .$rows1['wine_shuliang']."</td><td>" .$rows1['tongji']."</td><td>" .$rows1['tel'] . "</td><td>".$rows1['address']."</td><td>".$rows1['psfs']."</td><td>".$rows1['shouhuoren']."</td><td>".$rows1['sex']."</td><td><a href='pingjia.php?&id=$idx'>评论</a></td></tr>";
            }
             else{
                 echo "<tr><td>" .$rows1['wine_name']."</td><td>" .$rows1['wine_shuliang']."</td><td>" .$rows1['tongji']."</td><td>" .$rows1['tel'] . "</td><td>".$rows1['address']."</td><td>".$rows1['psfs']."</td><td>".$rows1['shouhuoren']."</td><td>".$rows1['sex']."</td><td>已评论</td></tr>";

             }
            }
            echo   "</table>" ; }}
}
?>
