<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="./js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript" src="./js/bootstrap.min.js"></script>
</head>
<title>欢迎来到用户首页</title>
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

<table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0" >

        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">

              <tr>
                <td height="40" class="font42"><table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#464646" class="newfont03">
                  <tr>
				    <td width="15%" align="center" bgcolor="#EEEEEE">用户名称：</td>
                    <td bgcolor="#FFFFFF"></td>
                  </tr>
                  <tr>
				    <td width="15%" align="center" bgcolor="#EEEEEE">用户密码：</td>
                    <td bgcolor="#FFFFFF"></td>
                  </tr>
                  <tr>
				    <td width="15%" align="center" bgcolor="#EEEEEE">用户电话：</td>
                    <td bgcolor="#FFFFFF"></td>
                  </tr>
                  <tr>
				    <td width="15%" align="center" bgcolor="#EEEEEE">用户身份：</td>
                    <td bgcolor="#FFFFFF"></td>
                  </tr>
                  <tr>
				    <td width="15%" align="center" bgcolor="#EEEEEE">用户地址：</td>
                    <td bgcolor="#FFFFFF"></td>
                  </tr>



        </tr>
      </table>


<a href="editInfo.php">修改会员信息</a>
</body>
</html>
<?php
include('./conn.php');
$sql="select * from user order by id ";
          $query=mysql_query($sql);
          while($row=mysql_fetch_array($query)){
          	echo'
          	<tr>
          	<td>'.$row['id'].'</td>
          	<td>'.$row['password'].'</td>
          	<td>'.$row['ident'].'</td>
          	<td>'.$row['telephone'].'</td>
          	<td>'.$row['adress'].'</td>
            </tr>
               		';
          }
          echo mysql_error();
?>