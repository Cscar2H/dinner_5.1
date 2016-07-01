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

<table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">

              <tr>
                <td height="40" class="font42"><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
                  <tr>
				    <td width="15%" align="center" bgcolor="#EEEEEE">食品名称</td>
                    <td width="15%" align="center" bgcolor="#EEEEEE">单价</td>
                    <td width="15%" align="center" bgcolor="#EEEEEE">数量</td>
                    <td width="15%" align="center" bgcolor="#EEEEEE">总价</td>
                  </tr>

                 <form action="" method="post">
                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  <tr align="center">
                    <td height="20" bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>
                    <td bgcolor="#FFFFFF"></td>

                  </form>

        </tr>
      </table>
<a href="deleteFromDining.php">管理点餐车</a>

</body>
</html>
<?php
include('./conn.php');
$sql="select * from diningcar order by id ";
          $query=mysql_query($sql);
          while($row=mysql_fetch_array($query)){
          	echo'
          	<tr>
          	<td>'.$row['userId'].'</td>
          	<td>'.$row['foodId'].'</td>
            </tr>
               		';
          }
          echo mysql_error();
?>