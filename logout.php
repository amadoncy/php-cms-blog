<?php
include('conn.php');
session_start();

$_SESSION=[];
session_destroy();

alert('退出成功，欢迎下次光临！','Login.php');
?>