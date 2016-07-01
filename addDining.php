 <?php 
header('Content-type: text/html; charset=UTF-8');
require_once 'require/alertMes.php';
$conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');
//<---用session进行用户状态判断--->
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if ($_SESSION['ident']== 0) {
    alertMes("您不是管理员！无法进入", "index.php");

}
//<---end用户状态判断--->
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加菜单</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="./js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript" src="./js/bootstrap.min.js"></script>

</head>
<body>
<form action = "AddCD.php" method="post">
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >菜品添加</th>

		<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>添加菜品</legend>

					  <table border="0" cellpadding="2" cellspacing="1" style="width:100%">


					  <tr>
					    <td nowrap align="right" width="11%">菜名:</td>
					    <td width="27%"><input name='Cname' type="text" class="text" style="width:154px" value="" /></td>

					    <td align="right" width="30%">&nbsp;</td>
					    <td width="50%">&nbsp;</td>
					    </tr>
					    <tr>
					    <td nowrap align="right" width="11%">菜的价格:</td>
					    <td width="27%"><input name='Cmoney' type="text" class="text" style="width:154px" value="" />&nbsp;&nbsp;&nbsp;元/份</td>

					    <td align="right" width="30%">&nbsp;</td>
					    <td width="50%">&nbsp;</td>
					    </tr>
                      <tr>
					    <td  width="11%" nowrap align="right">菜品介绍:</td>
					    <td colspan="3"><textarea name="Cdata" cols="100" rows="20"></textarea></td>
					    </tr>
					    <tr>
					    <td nowrap align="right" width="13%">食物图片上传:</td>
					    <td><input name='Cpicture' type="file" size="17" id='picture' /><br/>
					  <tr>
					  	<td><p>
      <label  class="checkbox-inline">
        <input type="radio" name="XZ" value="0" id="XZ_0" checked>
        中餐
      
        <input type="radio" name="XZ" value="1" id="XZ_1">
        西餐
       
        <input type="radio" name="XZ" value="2" id="XZ_2">
        餐饮</label>
    </p></td>
					  </table>

				</fieldset>			</TD>

		</TR>

		</TABLE>


	 </td>
  </tr>

		<TR>
			<TD colspan="2" align="center" height="50px">
			<input type="submit" name="submit" value="添加" class="button" />　
			<input type="reset" name="reset" value="重置" class="button" /></TD>
			<a href="index1.php"><input type="button" name="qwe" value="返回" class="button" />　</a>
			<a href="revise.php"><input type="button" name="XG" value="修改菜单" class="button" />　</a>
		</TR>
		</TABLE>


	 </td>
  </tr>

</from>

  </table>

</form>
</body>
</html>
