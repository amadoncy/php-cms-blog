<?php
include('conn.php');//连接数据库

//接受数据
$id=$_GET['id'];
$flag=$_GET['flag'];
//判断是否可以执行
if($flag == 'super')
   {
//接受了数据就可以用，构造sql语句，实现删除功能
$sql="delete from login where id=$id";
$r=mysqli_query($conn,$sql);

//输出结果
if($r)
{
alert('删除成功','admin_list.php');
}
else{
echo '删除失败';
echo mysqli_error($conn);
}
   }
else{alert('未授权','admin_list.php');}
