<?php
include"conn.php";
$id=$_GET['id'];
$sql="delete from guestbook where id=$id";
$rs=mysqli_query($conn,$sql);
if($rs)
{
     echo"<script>alert('删除成功！');location.href='guestbook_list.php';</script>";
}
else
{
     echo"<script>alert('删除失败！');location.href='guestbook_list.php';</script>";
}
?>