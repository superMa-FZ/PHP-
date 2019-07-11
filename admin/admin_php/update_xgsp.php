<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
 include_once("conn.php");
  echo $_GET["table"];
  echo $_GET['id'];
  $result=mysqli_query($conn,"select * from ".$_GET["table"]." where wine_id=".$_GET['id']);
$rows=mysqli_fetch_array($result);
?>
<form action="update_ok.php?table=<?= $_GET['table']?>&id=<?= $_GET['id']?>" method="post" enctype="multipart/form-data">
 <input type="text"  value="<?=$rows['wine_id'] ?>" name="update_xgsp_id" />
 <br />
 商品类别：
 <select  name="xgsp_jiu"  />
 <?php  
     $result1=mysqli_query($conn,"select * from leibie"); 
	  while($rows1=mysqli_fetch_array($result1)){
 ?>
  <option value =<?= $rows1[1]?> >  <?= $rows1[1]?></option>

<?php
	  }
?>
</select>
 <br />
 <input type="text" value="<?=$rows['wine_name'] ?>" name="update_xgsp_name" />
 <br />
 <input type="text" value="<?=$rows['wine_price'] ?>" name="update_xgsp_price" />
  <br />
 <input type="text" value="<?=$rows['wine_sl'] ?>" name="update_xgsp_sl" />
 <br />
 <input type="file" name="update_xgsp_tupian" />
 <br />
 <textarea name="update_xgsp_remake" ><?= $rows['remark']?></textarea>
 <input type="submit" name="submit_delete_xgsp" value="提交" />
 <br />
</form>