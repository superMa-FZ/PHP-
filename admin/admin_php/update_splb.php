<?php
 include_once("conn.php");
  $result=mysqli_query($conn,"select * from leibie where lb_id=".$_GET['id']);
$rows=mysqli_fetch_array($result);
?>
<form action="update_ok.php?table=<?= $_GET['table']?>&id=<?= $_GET['id']?>" method="post">
<input type="text" name="update_splb_id" value="<?= $rows['lb_id']?>" />
<br />
<input type="text" name="update_splb_name" value="<?= $rows['lb_name']?>" />
<br />
<input type="submit" name="submit_update_splb" value="提交"  />
</form>