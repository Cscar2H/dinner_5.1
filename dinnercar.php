<?php
$conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
  mysqli_set_charset($conn, 'utf8'); 
  error_reporting(E_ALL & ~E_NOTICE);
include ("conn.php");
   

    $studentid=$_POST['studentid'];
    $phone=$_POST['phone'];
    $name=$_POST['name'];
    $adress=$_POST['adress'];
    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];
    $sql="INSERT INTO diningcar(text2,studentid,phone,name,adress,text1,id) VALUES ('$text2','$studentid','$phone','$name','$adress','$text1','')";
    
  

		


		mysqli_query($conn,$sql);
    session_start();
if ($_SESSION['ident']== 1) {
    header("refresh:1;url=http://localhost/dinner/index1.php");

}else{
  header("refresh:1;url=http://localhost/dinner/index.php");
}



?>
<html>
<title>正在加载...</title>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />

 </head>
 </html>