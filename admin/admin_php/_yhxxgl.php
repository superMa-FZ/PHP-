<?php
include_once("conn.php");
?>


<?php
  $cont=$_GET['cont'];
   echo $cont;
   if($cont=='ggglyxx'){
?>
   <table>
   <tr>
   <td>管理员id</td><td>用户名</td><td>密码</td>
   </tr>
   <?php
   $result=mysqli_query($conn,"select * from gly");
   while($rows=mysqli_fetch_array($result)){
?>
<tr>
     <td><?php echo $rows['gly_id']?></td>
     <td><?php echo $rows['gly_name']?></td>
    <td><?php echo $rows['pass_word']?></td>
     <td><a href="update_glyxx.php?id=<?= $rows['gly_id']?>">修改</a>||<a href="delete_glyxx.php?id=<?= $rows['gly_id']?>">删除</a></td>
 </tr>
 <?php
   }             //更改管理员信息
 echo " </table>";   }


   else if($cont=='yhlygl'){
?>
       <table>
           <tr>
               <td>用户id</td><td>留言内容</td><td>操作</td>
           </tr>
           <?php
           $result=mysqli_query($conn,"select * from pinglun");
           while($rows=mysqli_fetch_array($result)){
               $result1=mysqli_query($conn,"select * from urse where urse_id=".$rows['urse_id']);
               $rows1=mysqli_fetch_array($result1);
           ?>
           <tr>
               <td><?php echo $rows['urse_id']?></td>
               <td><?php echo $rows['urse_pinlun']?></td>
               <td><a href="delete_yhlygl.php?id=<?= $rows['urse_id']?>">删除</a>||<a href="dongjie_yhlygl.php?dongjie=<?=$rows1['dongjie']?>&id=<?= $rows['urse_id']?>"><?php if($rows1['dongjie']==1) echo"冻结"; else echo("解除冻结");?></td>
           </tr>
           <?php
   }             //更改管理员信息
 echo " </table>";   }

   else if($cont=="yhxxgl"){
           ?>
           <table>
               <tr>
                   <td>用户id</td>
                   <td>用户姓名</td>
                   <td>操作</td>
               </tr>
               <?php
               $result = mysqli_query($conn, "select * from urse");
               while ($rows = mysqli_fetch_array($result)) {
                   ?>
                   <tr>
                       <td><?php echo $rows['urse_id'] ?></td>
                       <td><?php echo $rows['urse_name'] ?></td>
                       <td>
                           <a href="dongjie_yhlygl.php?dongjie=<?= $rows['dongjie'] ?>&id=<?= $rows['urse_id'] ?>"><?php if ($rows['dongjie'] == 1) echo "冻结"; else echo("解除冻结"); ?>
                       </td>
                   </tr>
                   <?php
               }             //更改管理员信息
               echo " </table>";
               }
   ?>
