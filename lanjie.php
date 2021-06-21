<?php
session_start();
if(!isset($_SESSION['userid'])){
    echo"<script>alert('你的登录已超时，请重新登录！');location.href='login.php';</script>";
}
?>