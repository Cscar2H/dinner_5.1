<?php
//注销session
error_reporting(E_ALL & ~E_NOTICE);
unset($_SESSION['userName']);
unset($_SESSION['password']);
header("refresh:3;url=http://localhost/food/homepage.php");
echo "退出成功！<br>";
echo "三秒后跳转到主页！"

?>