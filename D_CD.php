<?php
$conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
header('Content-type: text/html; charset=UTF-8');

mysqli_set_charset ($conn,'utf8');

$id = $_GET['id'];
$nid = $_GET['nid'];
$sql = "DELETE FROM chinese_food WHERE id='{$id}'";
$sql1 = "DELETE FROM western_food WHERE id='{$id}'";
$sql2 = "DELETE FROM drink WHERE id='{$id}'";
if ($nid == 0) {
	mysqli_query($conn, $sql);
	echo "<script>alert('菜单删除成功');</script>";
}else if($nid == 1){
	mysqli_query($conn, $sql1);
	echo "<script>alert('菜单删除成功');</script>";
}else if($nid == 2){
	mysqli_query($conn, $sql2);
	echo "<script>alert('菜单删除成功');</script>";
}



?>
<html>
<title>正在删除...</title>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
 <meta http-equiv="refresh" content="1;url=revise.php"> 
 </head>
 </html>