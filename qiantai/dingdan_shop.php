<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/7/5
 * Time: 8:52
 */
session_start();
$ddbh=$_SESSION['urse_id'].date("Y").date("m").date("d").date("h").date("i").date("s");
include_once ('../admin/admin_php/conn.php');
if(isset($_POST['tijiao_submit'])){
    if(!($_POST['shr_shop'] and $_POST['address_shop'] and $_POST['tel_shop'] and $_POST['psfs_shop'] and $_POST['zffs_shop'] )){

        echo "<script type='text/javascript'   > alert('请填写完整收货地址'); location:history.go(-1)  </script>";
    }
    else {
          for($i=0;isset($_POST['wine_name'.$i]);$i++){
      $result=mysqli_query($conn,"delete from cats  where cat_id=".$_POST['cat_id'.$i]);
       $sql2="'".$ddbh.$i."'".",".$_SESSION['urse_id'].",'".$_POST['tel_shop']."','".$_POST['psfs_shop']."','".$_POST['sex_shop']."','".$_POST['address_shop']."','".$_POST['shr_shop']."',".$_POST['wine_num'.$i].",'".$ddbh."','".$_POST['wine_name'.$i]."',".$_POST['wine_shuliang'.$i];
       $sql4="insert into  dingdan(dingdan_id,urse_id,tel,psfs,sex,address,shouhuoren,tongji,dingdan_bh,wine_name,wine_shuliang) values "."(".$sql2.")";
    echo $sql4;
     $result1=mysqli_query($conn,$sql4);

          }
          mysqli_query($conn,"insert into zt(urse_id,dingdan_bh) values "."('".$_SESSION['urse_id']."','".$ddbh."')");
          echo "<script>   alert ('订单提交成功'); location='personalcenter1.php'; </script>";
    }

}
?>
