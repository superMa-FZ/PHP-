<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台登录</title>
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/6/20
 * Time: 19:00
 */
$host="127.0.0.1";
$userName="root";
$password="";
if($conn=mysqli_connect($host,$userName,$password,"backstage")){/*
   echo "<script type='text/javascript'> alert('数据库连接成功');</script>";*/
}
  else{
  echo "<script type='text/javascript'> alert('数据库连接失败');</script>";
}
mysqli_query($conn,"set names utf8");
?>