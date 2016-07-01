<?php 
header('Content-type: text/html; charset=UTF-8');
$conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
error_reporting(E_ALL & ~E_NOTICE);
mysqli_set_charset($conn, 'utf8');
$Cname = $_POST['Cname'];
$Cpicture = $_POST['Cpicture'];
$Cmoney = $_POST['Cmoney'];
$Cdata = $_POST['Cdata'];
$XZ = $_POST['XZ'];

$Cpicture1 = "images/". $Cpicture;
$sql1 = "Insert into chinese_food (Cdata,Cmoney,Cname,Cpicture,id,nid) values ('$Cdata','$Cmoney','$Cname','$Cpicture1','','0')" ;

$sql2 = "Insert into western_food (Cdata,Cmoney,Cname,Cpicture,id,nid) values ('$Cdata','$Cmoney','$Cname','$Cpicture1','','1')" ;

$sql3 = "Insert into drink (Cdata,Cmoney,Cname,Cpicture,id,nid) values ('$Cdata','$Cmoney','$Cname','$Cpicture1','','2')" ;
if($Cname == "")
{
echo " <script>alert('您还没有输入菜名！');</script>";
header("refresh:1;url=http://localhost/dinner/AddDining.php");
}else if ($Cmoney == "") {
	echo " <script>alert('您没有输入价格！');</script>";
header("refresh:1;url=http://localhost/dinner/AddDining.php");
}else if ($Cdata == "") {
	echo " <script>alert('您没有输入食物介绍！');</script>";
header("refresh:1;url=http://localhost/dinner/AddDining.php");
}else if ($Cpicture == "") {
	echo " <script>alert('您没有上传图片！');</script>";
header("refresh:1;url=http://localhost/dinner/AddDining.php");
}
else if($_POST['XZ'] == 0){

	mysqli_query($conn, $sql1);
	echo " <script>alert('您已成功保存菜单！请将图片放进images文件！');</script>";
header("refresh:1;url=http://localhost/dinner/index1.php");
}else if($_POST['XZ'] == 1){
	mysqli_query($conn, $sql2);
	echo " <script>alert('您已成功保存菜单！请将图片放进images文件！');</script>";
header("refresh:1;url=http://localhost/dinner/index1.php");
}else if($_POST['XZ'] == 2){
	mysqli_query($conn, $sql3);
	echo " <script>alert('您已成功保存菜单！请将图片放进images文件！');</script>";
header("refresh:1;url=http://localhost/dinner/index1.php");
}

 else{
	echo " <script>alert('保存失败！请重新保存');</script>";
header("refresh:1;url=http://localhost/dinner/AddDining.php");
}







	
?>
<html>
	<meta charset="utf-8" /> 
  <title>正在创建...</title> 
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</html>