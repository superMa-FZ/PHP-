<?php
    include_once("conn.php");
?>

<?php
  if(isset($_POST['submit_tjsplb']))                                 
  {
					$sqlstr1="insert into leibie(lb_id,lb_name) values ('".$_POST['tjsplb_lb_id']."','".$_POST['tjsplb_lb_name']."')";
					$result=mysqli_query($conn,$sqlstr1);
					echo $sqlstr1;
		      
		if($result)                                                 
		{
				   echo "<script type='text/javascript'> alert('添加成功,返回类别查看');location='#';</script>";
		}
		else
		{
				   echo "<script type='text/javascript'> alert('添加失败');history.go(-1);</script>";
		}

}
?>

<?php
  if(isset($_POST['submit_tjsp']))                                
   {
	  $result=mysqli_query($conn,"select * from leibie"); 
	  while($rows=mysqli_fetch_array($result)){
		  if($_POST['tjsp_leibie']==$rows[1])
		  $push_table=$rows[2]; 
		  }
		
					$sqlstr1="insert into ".$push_table." (wine_id,wine_name,wine_price,wine_sl,remake,image) values (".$_POST['tjsp_id'].",'".$_POST['tjsp_name']."',".$_POST['tjsp_price'].",".$_POST['tjsp_shuliang'].",'".$_POST['tjsp_remake']."','".$_FILES['tjsp_xztp']['name']."')";
					$result=mysqli_query($conn,$sqlstr1);
					echo $sqlstr1;
			
		if($result)                                                  
		{
				   echo "<script type='text/javascript'> alert('添加成功,返回类别查看');location='#';</script>";
		}
		else
		{
				   echo "<script type='text/javascript'> alert('添加失败');</script>";
		}

}
?>

