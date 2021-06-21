<?php
include 'conn.php';


$id=$_GET['id'];

$rs=mysqli_query($conn,"select img from article where id=$id");
$row=mysqli_fetch_assoc($rs);
if(strlen($row['img'])>1){
	unlink('../upfiles/'.$row['img']);
}

mysqli_free_result($rs);


$sql="delete from article where id=$id";
$r=mysqli_query($conn,$sql);


if($r){

	alert('删除成功','article_list.php');
}else{
 	echo '删除失败';
	echo mysqli_error($conn);
}