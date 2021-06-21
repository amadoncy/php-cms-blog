<?php
include "conn.php";
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$flag=$_POST['flag'];
echo  $id;
$sql="update login set username='$username',password='$password',flag='$flag' where id=$id";
$rs=mysqli_query($conn,$sql);
if($rs)
{
     echo"<script>alert('修改成功！');location.href='admin_list.php';</script>";
}
else
{
     echo"<script>alert('修改失败！');location.href='admin_edit.php';</script>";
}
?>