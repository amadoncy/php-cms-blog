<?php
include "conn.php";

$id=$_GET['id'];
$title=$_POST['title'];
$cate_id=$_POST['cate_id'];
$author=$_POST['author'];
$content=$_POST['content'];
$img=$_FILES['img'];
if($img['name'])
{
	$ext=strrchr($img['name'],'.');
	$filename=date('YmdHis').rand(100,999).$ext;
	$exts=['.png','.jpg','.gif','.bmp','.jpeg'];
	if(!in_array($ext,$exts))
	{
		echo "文件类型不允许上传！";exit;
	}
	move_uploaded_file($img['tmp_name'],'../upfiles/'.$filename);
}
else
{
	$filename =$_POST['old_img'];
}
$sql="insert into article(title,cate_id,author,content,img)VALUES('$title',$cate_id,'$author','$content','$filename')";
$rs=mysqli_query($conn,$sql);
if($rs)
{
 	echo "<script> alert('发布成功！');location.href='article_list.php';</script>";
}
else
{
	echo "<script> alert('发布失败!');location.href='article_new.php';</script>";
}
?>