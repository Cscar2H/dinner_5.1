<?php
 $conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
  mysqli_set_charset($conn, 'utf8');
  header('Content-type: text/html; charset=UTF-8');
         include("conn.php");
         error_reporting(E_ALL & ~E_NOTICE);

         
	    	 $userName = $_POST['userName'];
	   		 $password = $_POST['password'];
	   		 $password1 = md5($password);
	   		 $passcode = $_POST['passcode'];
	         $sql = "select *  from user where userName='$userName' and password='$password1' limit 1 ";
			$query=mysql_query($sql);
			$row=mysql_fetch_array($query);
			session_start();//session开始
			
			//数据库中查找，并判断
			if ($userName == $row['userName']& $password1 == $row['password']&$passcode == $_SESSION['passcode']) {
				$_SESSION['userName'] = $userName;
				$_SESSION['password'] = $password1;	
				$_SESSION['ident'] = $row['ident'];		
		    	if($row['ident'] == 1){
		    		echo " <script>alert('饿了吗？☺管理员！');</script>";
			    header("refresh:0;url=http://localhost/dinner/index1.php");
		    	}else{
		    		echo " <script>alert('您好！☺欢迎登陆！');</script>";
			    header("refresh:0;url=http://localhost/dinner/index.php");
		    		
}
			}else {
				if($userName != $row['userName']){
				echo " <script>alert('账户不存在，注册了再说！');</script>";
			    header("refresh:1;url=http://localhost/dinner/register.php");
				
			}else if($password != $row['password']){
				echo " <script>alert('密码错误！请重新输入！');</script>";
			     header("refresh:1;url=http://localhost/dinner/login.php");
			}
         }
?>