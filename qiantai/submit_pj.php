<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/7/6
 * Time: 10:40
 */
include_once ('../admin/admin_php/conn.php');
 if(isset($_POST['submit_pj'])){
     mysqli_query($conn,"update zt set dingdan_sfpl=1,plnr="."'".$_POST['pinglun']."',spdf=".$_POST['dafen']." where dingdan_bh="."'".$_POST['id_bh']."'");
     echo "<script> alert('评论成功');location='order.php';
</script>";
 }
?>