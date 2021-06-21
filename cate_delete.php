<?php
include"conn.php";
$id=$_GET['id'];
$sql="delete from category where id=$id";
$rs=mysqli_query($conn,$sql);
if($rs)
{
     echo"<script>alert('删除成功！');location.href='cate_list.php';</script>";
}
else
{
     echo"<script>alert('删除失败！');location.href='cate_list.php';</script>";
}
?>