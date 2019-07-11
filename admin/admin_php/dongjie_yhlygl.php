<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/7/3
 * Time: 14:19
 */
include_once ("conn.php");
if($_GET['dongjie']==1)
    $i=0;
else  $i=1;
$result=mysqli_query($conn,"update urse set dongjie=".$i." where urse_id=".$_GET['id']);
if($result)                                                  //如果查询语句成功执行
{
    echo "<script type='text/javascript'>history.go(-1);</script>";
}
else
{
    echo "<script type='text/javascript'> history.go(-1);</script>";
}



?>