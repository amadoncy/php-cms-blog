<?php
include "conn.php";
$id=$_POST['id'];
$sql="update guestbook set examine='1' where id=$id";
$rs=mysqli_query($conn,$sql);
if($rs)
{
    echo"<script> alert('编辑成功！');location.href='guestbook_list.php';</script>";
}
else
{
    echo"<script> alert('编辑失败！');location.href='guestbook_edit.php';</script>";
}