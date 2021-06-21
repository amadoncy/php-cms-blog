<?php
include "conn.php";
$article_id=$_POST['article_id'];
$username=$_POST['username'];
$content=$_POST['content'];
$sql="insert into guestbook(username,article_id,content) VALUES('$username',$article_id,'$content')";
$rs=mysqli_query($conn,$sql);
if($rs)
{
    echo"<script> alert('留言成功！');location.href='../blog2/content.php?id=$article_id';</script>";
}
else
{
    echo"<script> alert('留言失败！');location.href='#';</script>";
}
?>
