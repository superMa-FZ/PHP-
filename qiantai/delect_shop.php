<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/7/4
 * Time: 17:23
 */
include_once ("../admin/admin_php/conn.php");
$sql="delete  from  cats where cat_id="."'".$_GET['cat_id']."'";
$result=mysqli_query($conn,$sql);

 echo $sql;
 if($result){
echo "<script language='JavaScript'> 
        alert('删除成功');location=history.go(-1);
</script>";
}
?>