<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="./js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript" src="./js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="#">网上订餐</a>
   </div>
   <div>
      <ul class="nav navbar-nav">
         <li class="active"><a href="#">主页</a></li>
         <li><a href="#">家常</a></li>
         <li><a href="#">主食</a></li>
         <li><a href="#">饮品</a></li>
         <li><a href="index.php">用户首页</a></li>
         <li><a href="showDiningCar.php">订餐车管理</a></li>
         <li><a href="messageBorad.php">留言板</a></li>
      </ul>
   </div>
</nav>

<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >留言添加</th>

		<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>添加留言</legend>

					  <table border="0" cellpadding="2" cellspacing="1" style="width:100%">


					  <tr>
					    <td nowrap align="right" width="11%">用户名:</td>
					    <td width="27%"><input name='userId' type="text" class="text" style="width:154px" value="" /></td>

					    <td align="right" width="30%">&nbsp;</td>
					    <td width="50%">&nbsp;</td>
					    </tr>
					    <tr>
					    <td nowrap align="right" width="11%">留言标题:</td>
					    <td width="27%"><input name='title' type="text" class="text" style="width:154px" value="" /></td>

					    <td align="right" width="30%">&nbsp;</td>
					    <td width="50%">&nbsp;</td>
					    </tr>
                      <tr>
					    <td  width="11%" nowrap align="right">留言内容:</td>
					    <td colspan="3"><textarea name="content" cols="100" rows="20"></textarea></td>
					    </tr>
					  </table>

				</fieldset>			</TD>

		</TR>

		</TABLE>


	 </td>
  </tr>

		<TR>
			<TD colspan="2" align="center" height="50px">
			<input type="submit" name="submit" value="添加" class="button" onclick="alert('保存成功！');"/>　
			<input type="reset" name="reset" value="重置" class="button" /></TD>
		</TR>
		</TABLE>


	 </td>
  </tr>

</from>

  </table>

</body>
</html>
<?php
error_reporting(0);
include("conn.php");
if($submit=$_POST['submit']){
	$userId=$_POST['userId'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$dtime=$_POST['dtime'];
	$reply=$_POST['reply'];
	$sql="Insert into messageboard(userId,title,content,dtime,reply) values ('$userId','$title','$content','$dtime','$reply')" ;
	mysql_query($sql);

}
?>
