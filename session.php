<?php
session_start();
/*if($_SESSION['userid']==NULL)
{echo"<script> alert('请登录！');location.href='login.php';</script>";}*/
if(!isset($_SESSION['userid']))
{echo"<script>alert('你的登陆已超时，请重新登陆！');location.href='login.php';</script>";}
?>