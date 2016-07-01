<?php
	include ("conn.php");
	error_reporting(E_ALL & ~E_NOTICE);
	if($_POST['submit'])
	{
		$userName = $_POST['userName'];
		$res="select userName from user  where userName='$userName'";
		$query=mysql_query($res);
		$rows = mysql_num_rows($query);
	}
		if($rows > 0){
			header("refresh:5;url=http://localhost/dinner/register.php");
			echo "用户名已存在！<br>";
			echo "即将返回注册页面！";
		}else{
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		$password1 = md5($password);
		$telephone = $_POST['telephone'];
		$address = $_POST['address'];
		$ident = $_POST['ident'];
			session_start();//session开始
			echo $row['userName'],$row['password'],$row['ident'];  


		
		$sql="Insert into user (id,userName,password,telephone,address,ident) values ('','$userName','$password1','$telephone','$address','$ident')" ;
		$row1 =  mysql_query($sql);
        if (row1) {
				$_SESSION['userName'] = $userName;
				$_SESSION['password'] = $password1;	
				$_SESSION['ident'] = $_POST['ident'];	
}else{
		echo " <script>alert('注册失败！请重新输入！');</script>";
		header("refresh:3;url=http://localhost/dinner/register.php");
			
	}	
	if($_POST['ident'] == 0){
        		echo " <script>alert('欢迎加入！即将跳转到主页！');</script>";
		    	header("refresh:3;url=http://localhost/dinner/index.php");
			
		    }else if($_POST['ident'] == 1){
		    		echo " <script>alert('欢迎管理者！即将跳转到主页！');</script>";
		    	header("refresh:3;url=http://localhost/dinner/index1.php");
		    	
		}
	}
?>
<html>
	<meta charset="utf-8" /> 
  <title>正在注册...</title> 
</html>