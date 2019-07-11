<?php
include_once("conn.php");
?>
<?php
 
			 	
					$sqlstr1="delete from leibie where lb_id=".$_GET['id'];
					$result=mysqli_query($conn,$sqlstr1); 
					echo $sqlstr1; 
	
  if($result)                                                  //如果查询语句成功执行
		{
		   echo "<script type='text/javascript'> alert('删除成功');history.go(-2);</script>";
		} 
		else 
		{
				  echo "<script type='text/javascript'> alert('删除失败');history.go(-1);</script>"; 
		}
	
?>
