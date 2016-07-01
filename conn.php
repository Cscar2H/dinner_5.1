<?php

@mysql_connect("localhost","root","")or die ("mysql连接失败！");

mysql_select_db("food")or die("db连接失败！");



mysql_query("SET NAMES 'utf8' ");
mysql_query("SET CHARACTER_SET_CLIENT=utf8");
mysql_query("SET CHARACTER_SET_RESULTS=utf8");
?>