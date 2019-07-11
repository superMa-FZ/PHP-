<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/20
 * Time: 19:00
 */
 include_once("conn.php");                        //引用文件
if(isset($_POST['submit2']))                   //选定登录按钮
  {

          if(!($_POST['yhmm1'] and $_POST['pasw1']))  //判空
	   {
		  echo "<script type='text/javascript'>alert('输入不能为空');location=history.go(-1);</script>";
		  exit();
	   }
	   $result1=mysqli_query($conn,"select urse_id,urse_pwd,dongjie from urse" );
	   $i=0;                                        //定义一个记录数的变量
	   while($rows=mysqli_fetch_array($result1))
		{
				 if(!($rows['urse_id']==$_POST['yhmm1']))
				 {
					 if ($i==mysqli_num_rows($result1)-1)  //如果在最后一条还没有找到 那么用户名输入错误
					 {
						 echo "<script type='text/javascript'>alert('用户名输入错误');location=history.go(-1);</script>";
						 break;
					 }
					 $i++;
				 }
				 else if($rows['urse_pwd']==$_POST['pasw1'])         //如果用户名相等且密码相等
				 {
				     echo  $rows['dongjie'];
				  if ($rows['dongjie']==0)
                  {
                      echo "<script type='text/javascript'>alert('用户已经被冻结');location='../../qiantai/index.php';</script>";
                      exit();
                  }
                  else{
				     session_start();
					 $_SESSION['urse_id']=$rows['urse_id'];
					 $_SESSION['time']=time();
						echo "<script type='text/javascript'>alert('登录成功');location='../../qiantai/index.php';</script>";
				 }
				 }
				 else
				 {                                                    //密码不等
						echo "<script type='text/javascript'>alert('密码输入错误');location=history.go(-1);</script>";
						break;
				 }
	        }


  }
  
  
  if(isset($_POST['submit3']))                   //选定登录按钮
  {  
		if(!($_POST['yhmm2'] and $_POST['pasw2']))  //判空
	   {
		  echo "<script type='text/javascript'>alert('输入不能为空');location=history.go(-1);</script>";
		  exit();
	   }
	   $result1=mysqli_query($conn,"select gly_id,pass_word from gly" );
	   $i=0;                                        //定义一个记录数的变量
	   while($rows=mysqli_fetch_array($result1))
		{	
				 if(!($rows['gly_id']==$_POST['yhmm2']))
				 {
					 if ($i==mysqli_num_rows($result1)-1)  //如果在最后一条还没有找到 那么用户名输入错误
					 {
						 echo "<script type='text/javascript'>alert('用户名输入错误');location=history.go(-1);</script>";
						 break;
					 }
					 $i++;
				 }
				 else if($rows['pass_word']==$_POST['pasw2'])         //如果用户名相等且密码相等
				 {  
						echo "<script type='text/javascript'>alert('登录成功');location='#';</script>";
				 }
				 else
				 {                                                    //密码不等
						echo "<script type='text/javascript'>alert('密码输入错误');location=history.go(-1);</script>";
						break;
				 }
	   }

  }
  
  
  
  
  
  if(isset($_POST['submit1']))                                 //选定注册按钮
  {
					$sqlstr1="insert into urse(urse_id,urse_pwd) values ('".$_POST['user']."','".$_POST['pasw']."')";
					$result=mysqli_query($conn,$sqlstr1);
					echo $sqlstr1;
		  
		if($result)                                                  //如果查询语句成功执行
		{
				   echo "<script type='text/javascript'> alert('注册成功，即将返回登陆');location='../../qiantai/denglu_zqx.php';</script>";
		}
		else
		{
				   echo "<script type='text/javascript'> alert('用户名已被注册');history.go(-1);</script>";
		}

}
?>

