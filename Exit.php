<?php 
header('Content-type: text/html; charset=UTF-8');

//<---用session进行用户状态判断--->
session_start();

session_unset();
session_destroy();
echo " <script>alert('退出成功！');</script>";
			    header("refresh:1;url=http://localhost/dinner/login.php");
//<---end用户状态判断--->
?>
<html>
<title>正在退出...</title>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

 </head>
 </html>