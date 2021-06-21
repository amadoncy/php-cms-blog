<?php
include_once ('conn.php');
$num = 4;
$cPage = $_GET['cPage'];
$start = $cPage * $num;
$result = $link->query("select * from news order by id desc limit {$start},$num");
$link = null;
while ($row=$result->fetch()){
    $json[]=$row;
}
echo json_encode($json);