<?php
include_once("conn.php");
?>


<?php 
  $cont=$_GET['cont'];
   echo $cont;
   if($cont=='ckqbsp'){
?>
   <table>  
   <tr>
   <td>类别编号</td><td>名称</td><td>操作</td>
   </tr>
   <?php
   $result=mysqli_query($conn,"select * from leibie");
   while($rows=mysqli_fetch_array($result)){
?>
<tr>  
     <td><?php echo $rows[0]?></td>
     <td><?php echo $rows[1]?></td>
     <td><a href="update_splb.php?id=<?= $rows[0]?>&table=<?=$rows[2]?>">修改</a>||<a href="delete_splb.php?id=<?= $rows[0]?>&table=<?=$rows[2]?>">删除</a></td>
 </tr>
 <?php
   }
 echo " </table>";   }  //商品类别管理
 
 
   else if($cont=='tjsp'){

?>
<form action="jc_tjsplb.php" method="post" enctype="multipart/form-data">
 <input type="text"  placeholder="商品编号" name="tjsp_id" />
 <br />
 商品类别：
 <select  name="tjsp_leibie" />
 <?php  
     $result=mysqli_query($conn,"select * from leibie"); 
	  while($rows=mysqli_fetch_array($result)){
 ?>
  <option value =<?= $rows[1]?>><?= $rows[1]?></option>

<?php
	  }
?>
</select>
 <br />
 <input type="text" placeholder="商品价格" name="tjsp_price" />
 <br />
 <input type="text" placeholder="商品数量" name="tjsp_shuliang" />
  <br />
 <input type="text" placeholder="商品名称" name="tjsp_name" />
 <br />
 <input type="file" name="tjsp_xztp" />
 <br />
 <textarea placeholder="备注" name="tjsp_remake" ></textarea>
 <input type="submit" name="submit_tjsp" value="提交" />
 <br />
 </form>
<?php
   }             //添加商品
   else if($cont=="tjsplb"){
?>

<form action="jc_tjsplb.php" method="post">
 <input type="text"  placeholder="类别编码" name="tjsplb_lb_id" /
 <br />
 <input type="text"  placeholder="类别名称" name="tjsplb_lb_name" />
 <br />
 <input type="submit" name="submit_tjsplb" value="提交" />
 </form>
	   <?php
   }
   
   
   
   
   
   
 else   if($cont=='xgsp'){
?>
   <table>  
   <tr>
   <td>商品编号</td><td>名称</td><td>价格</td><td>数量</td><td>图片</td><td>备注</td><td>操作</td>
   </tr>
   <?php
   $result=mysqli_query($conn,"select * from leibie");
   while($rows=mysqli_fetch_array($result)){
	   echo $rows["lb_table"];
	$result1=mysqli_query($conn,"select * from ".$rows["lb_table"]);
	  while($rows1=mysqli_fetch_array($result1)){
?>
<tr>  
     <td><?php echo $rows1["wine_id"]?></td>
     <td><?php echo $rows1["wine_name"]?></td>
     <td><?php echo $rows1["wine_price"]?></td>
     <td><?php echo $rows1["wine_sl"]?></td> 
     <td><?php echo $rows1["image"]?></td>
     <td><?php echo $rows1["remark"]?></td> 
     <td><a href="update_xgsp.php?id=<?=$rows1["wine_id"]?>&table=<?=$rows1["table_name"]?>">修改</a>||<a href="delete_xgsp.php?id=<?= $rows1["wine_id"]?>&table=<?=$rows1["table_name"]?>">删除</a></td>
 </tr>
 <?php
   }
   }
 echo " </table>";   }  //商品类别管理
   ?>
	 
