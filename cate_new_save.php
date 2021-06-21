<?php
include('header.php');
include 'footer.php';
?>
<?php
$servername = "localhost";
$username = "root";
$password = "123321";
$dbname="htlog";
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
mysqli_set_charset($conn,'utf8');
mysqli_query($conn,'set name utf8');
mysqli_query($conn,'use `htlog`');
$result=mysqli_query($conn,'show databases');
if(!$result){
	exit('执行失败，错误信息：'.mysqli_error($conn));
}
mysqli_select_db($conn,'htlog');
$cate_name=$_POST['cate_name'];
$order_no=$_POST['order_no'];
//构建sql语句将数据插入到数据表中，实现新增功能
$sql="insert into category(cate_name,order_no) values('$cate_name',$order_no)";
$r=mysqli_query($conn,$sql);
if($r!=false){
	echo("<script>alert('新增成功');location.href='cate_list.php';</script>");
}else{
	echo '新增失败，请检查';
}
?>