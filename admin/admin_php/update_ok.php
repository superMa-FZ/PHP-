<?php
include_once("conn.php");
?>
<?php
  if(isset($_POST['submit_update_splb']))                                 //选定注册按钮
  { 
		
		if(!($_POST['update_splb_id'] and $_POST['update_splb_name'])) //判空
		{
					echo "<script type='text/javascript'> alert('输入不能为空');history.go(-1);</script>";	  
		exit();			
		}
		else
		 {
			 
					$sqlstr1="update leibie set lb_id='".$_POST['update_splb_id']."',lb_name='".$_POST['update_splb_name']."' where lb_id=".$_GET["id"] ;
					$result=mysqli_query($conn,$sqlstr1); 
					echo $sqlstr1; 
		  }
  if($result)                                                  //如果查询语句成功执行
		{
				   echo "<script type='text/javascript'> alert('修改成功');history.go(-2);</script>";
		} 
		else 
		{
				  echo "<script type='text/javascript'> alert('修改失败');history.go(-1);</script>"; 
		}
		} //商品类别的更改

else if(isset($_POST['submit_delete_xgsp']))                                 //选定注册按钮
{

    if(!($_POST['update_xgsp_id'] and $_POST['update_xgsp_name'] and  $_POST['update_xgsp_price'] and $_POST['update_xgsp_sl'] and $_POST['update_xgsp_remake'])) //判空
    {
        echo "<script type='text/javascript'> alert('输入不能为空');history.go(-1);</script";
        exit();
    }
    else
    {
        if($_FILES["update_xgsp_tupian"]["name"]==NULL)
        {
            $sqlstr1="update ".$_GET['table']." set wine_id='".$_POST['update_xgsp_id']."',wine_name='".$_POST['update_xgsp_name']."',wine_price='".$_POST['update_xgsp_price']."',wine_sl='".$_POST['update_xgsp_sl']."',remark='".$_POST['update_xgsp_remake']."' where wine_id=".$_GET["id"] ;
        }
        else{


            $sqlstr1="update ".$_GET['table']." set wine_id='".$_POST['update_xgsp_id']."',wine_name='".$_POST['update_xgsp_name']."',wine_price='".$_POST['update_xgsp_price']."',wine_sl='".$_POST['update_xgsp_sl']."',remark='".$_POST['update_xgsp_remake']."',image='".$_FILES['update_xgsp_tupian']['name']."' where wine_id=".$_GET["id"] ;
        }
        $result=mysqli_query($conn,$sqlstr1);
        echo $sqlstr1;
    }
    if($result)                                                  //如果查询语句成功执行
    {
        echo "<script type='text/javascript'> alert('修改成功');history.go(-2);</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('修改失败');history.go(-1);</script>";
    }
}           //商品信息更改



		else if (isset($_POST['submit_update_glyxx']))
		{
            if(!($_POST['update_glyxx_id'] and $_POST['update_glyxx_name']) and $_POST['update_glyxx_pasw']) //判空
            {
                echo "<script type='text/javascript'> alert('输入不能为空');history.go(-1);</script>";
                exit();
            }
            else
            {

                $sqlstr1="update gly set gly_id='".$_POST['update_glyxx_id']."',gly_name='".$_POST['update_glyxx_name']."',pass_word='".$_POST['update_glyxx_pasw']."' where gly_id=".$_GET["id"] ;
                $result=mysqli_query($conn,$sqlstr1);
                echo $sqlstr1;
            }
            if($result)                                                  //如果查询语句成功执行
            {
                echo "<script type='text/javascript'> alert('修改成功');history.go(-2);</script>";
            }
            else
            {
                echo "<script type='text/javascript'> alert('修改失败');history.go(-1);</script>";
            }


		}  //管理员信息的更改
?>
