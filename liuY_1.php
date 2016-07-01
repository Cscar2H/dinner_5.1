<?php 
header('Content-type: text/html; charset=UTF-8');
$conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
error_reporting(E_ALL & ~E_NOTICE);
mysqli_set_charset($conn, 'utf8');
session_start();
$text = $_POST['text'];
$userName = $_SESSION['userName'];

$sql = "Insert into liuy (userName,text,id) values ('$userName','$text','')" ;

if ($text == "") {
	echo " <script>alert('评论不得为空！');</script>";
header("refresh:1;url=http://localhost/dinner/liuY.php");
}
else{
	 mysqli_query($conn, $sql);
	echo " <script>alert('感谢您的评论！我们会加以改进！');</script>";
header("refresh:1;url=http://localhost/dinner/liuY_2.php");
}

?>
<html>
<title>正在加载...</title>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
 
 </head>
 </html>