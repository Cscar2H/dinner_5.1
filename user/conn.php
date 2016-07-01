<?php
error_reporting(0);
mysql_connect("localhost:3306","root","")or die("mysql连接失败");
mysql_select_db("foods")or die("db连接失败");//连接数据库
header('content-type:text/html;charset=UTF-8');//设置页面内容是html编码格式为utf8
mysql_query("SET NAMES 'utf8'");//通知服务器客户端传递过去的语句的编码
mysql_query("SET CHARACTER_SET_CLIENT=utf8");//服务器设置客户端编码
mysql_query("SET CHARACTER_SET_RESULTS=utf8");//设置查询结果的编码
?>
