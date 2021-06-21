<?php
include "conn.php";
$examine=$_POST['examine'];
$count=count($examine);
for ($i=1;$i<=$count;$i++)
{
    $id=current($examine);
    $sql="update guestbook set examine='通过' where id=$id";
    $rs=mysqli_query($conn,$sql);
    next($examine);
}
if($rs)
{
    echo"<script> alert('编辑成功！');location.href='guestbook_list.php';</script>";
}
else
{
    echo"<script> alert('编辑失败！');location.href='guestbook_edits.php';</script>";
}