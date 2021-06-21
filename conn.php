<?php
	 header('Content-Type:text/html; charset=utf-8');
	 date_default_timezone_set("Asia/Shanghai");
	 $conn=@mysqli_connect('localhost','root','123321','htlog') or die('数据库连接失败');
	 mysqli_query($conn,'set name utf-8');
	 function alert($str,$url){
	 echo '<script>alert("'.$str.'");location.href="'.$url.'";</script>';
}
?>