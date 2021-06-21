<?php
header("Content-Type:text/html;charset=utf-8");
require 'MysqlPdo.class.php';
//配置数据库连接信息
$dbConfig=array(
    'user'=>'root',
    'pwd'=>'root',
    'dbname'=>'php'
);
//实例化MysqlPdo对象
$db=MysqlPdo::getInstance($dbConfig);
//保存错误信息
$error=array();