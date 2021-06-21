<?php
header("Content-Type:text/html;charset=utf-8");
include("conn.php");//连接数据库

session_start();
//判断是否有表单提交
if(empty($_POST)){
	die('没有表单提交，程序退出');
}
$username=$_POST['username'];//将输入的用户名密码与数据库中的进行比对
$password=$_POST['password'];
$code = isset($_POST['captcha']) ? trim($_POST['captcha']) : '';

if(empty($_SESSION['captcha_code'])){//判断SESSION中是否存在验证码
	die('验证码已过期，请重新登录。');
}		
//将字符串都转成小写然后再进行比较
if (strtolower($code) == strtolower($_SESSION['captcha_code'])){
	 echo '验证码正确';	 
} else{
	alert('验证码输入错误，请重新输入','login.php');
}

if(strlen($username)<3){
      echo "错误";
      exit;
}
else{
$sql="select * from login where username='$username' and password='$password' ";
$rs=mysqli_query($conn,$sql);

if($row=mysqli_fetch_assoc($rs)){      //变成数组列
$_SESSION['userid']=$row['id'];
$_SESSION['username']=$row['username'];
$_SESSION['flag']=$row['flag'];
header("Location:ht.php");//成功的话跳转到这儿
}
else{
             alert('登录失败，请检查用户名或密码是否正确','login.php');
}
}