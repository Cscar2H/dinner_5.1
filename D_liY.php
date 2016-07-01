<?php
$conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
header('Content-type: text/html; charset=UTF-8');

mysqli_set_charset ($conn,'utf8');

$id = $_GET['id'];

$sql = "DELETE FROM liuy WHERE id='{$id}'";
$query = mysqli_query($conn, $sql);
if ($query) {
	
	echo "<script>alert('菜单删除成功');</script>";
}else {
	echo "<script>alert('评价删除失败');</script>";
}



?>
<html>
<title>正在删除...</title>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
 <meta http-equiv="refresh" content="1;url=liuY.php"> 
 </head>
 </html>