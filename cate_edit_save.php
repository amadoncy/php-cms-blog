<?php
include "conn.php";
$cate_name=$_POST['cate_name'];
$order_no=$_POST['order_no'];
$id=$_POST['id'];
$sql="update category set cate_name='$cate_name',order_no=$order_no where id=$id";
$rs=mysqli_query($conn,$sql);
if($rs)
{
     echo"<script>alert('修改成功！');location.href='cate_list.php';</script>";
}
else
{
     echo"<script>alert('修改失败！');location.href='cate_edit.php';</script>";
}
?>