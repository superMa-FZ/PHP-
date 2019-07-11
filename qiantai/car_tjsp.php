<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/7/3
 * Time: 22:23
 */


include_once("../admin/admin_php/conn.php");
session_start();
if(!isset($_SESSION['urse_id'])) {

                echo "<script type='text/javascript'>alert('请登录后在购物');location=history.go(-1);</script>";
                      exit();
}
$result=mysqli_query($conn,"select * from cats where urse_id=".$_SESSION['urse_id']);
while($rows=mysqli_fetch_array($result))
{
   $result1=mysqli_query($conn,"select wine_price,wine_name from ".$_GET['table']." where wine_id=".$_GET['id']);
    $rows1=mysqli_fetch_array($result1);
    if($rows1['wine_name']==$rows['name_wine']){

      $a="update cats set shuliang=shuliang+".$_GET['shuliang']." where name_wine="."'".$rows['name_wine']."'";
        mysqli_query($conn,$a);
        echo "<script > alert('添加成功');location=history.go(-1);</script>";
        exit();
    }
  // echo $rows['cat_id']."  ".$rows['urse_id']."  ".$rows['name_wine']."  ".$rows['price_wine']."  ".$rows['shuliang'];
}
        $result2=mysqli_query($conn,"select wine_price,wine_name from ".$_GET['table']." where wine_id=".$_GET['id']);
        $rows2=mysqli_fetch_array($result2);
        echo $rows2['wine_name'];
        $carid=$_SESSION['urse_id'].date('y').date('m').date('d').date('h').date('i').date('s');
$sql1=$carid.','.$_SESSION['urse_id'].','."'".$rows2["wine_name"]."'".','.$rows2['wine_price'].','.$_GET['shuliang'].','."'".$_GET['table']."'";

  $sql="insert into cats (cat_id,urse_id,name_wine,price_wine,shuliang,wine_table) values "."($sql1)";
echo $sql;
 if( mysqli_query($conn,$sql)){
       echo "<script > alert('添加成功');location=history.go(-1);</script>";

      }
      else {
          echo "<script > alert('失败');location=history.go(-1);</script>";

      }
        ?>