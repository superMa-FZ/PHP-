<?php
include_once("conn.php");
$result=mysqli_query($conn,"select * from gly where gly_id=".$_GET['id']);
$rows=mysqli_fetch_array($result);
?>
<form action="update_ok.php?id=<?= $_GET['id']?>" method="post">
    <input type="text" name="update_glyxx_id" value="<?= $rows['gly_id']?>" />
    <br />
    <input type="text" name="update_glyxx_name" value="<?= $rows['gly_name']?>" />
    <br />
    <input type="text" name="update_glyxx_pasw" value="<?= $rows['pass_word']?>" />
    <br />
    <input type="submit" name="submit_update_glyxx" value="提交"  />
</form>