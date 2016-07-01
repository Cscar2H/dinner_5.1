<?php 
header('Content-type: text/html; charset=UTF-8');
require_once 'require/alertMes.php';
$conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');
//<---用session进行用户状态判断--->

session_start();
if ($_SESSION['ident']== 0) {
    alertMes("您不是管理员！无法进入", "index.php");

}


$sql = "SELECT * FROM chinese_food ";
$query = mysqli_query($conn, $sql);
$sql1 = "SELECT * FROM western_food ";
$query1 = mysqli_query($conn, $sql1);
$sql2 = "SELECT * FROM drink ";
$query2 = mysqli_query($conn, $sql2);

//<---end用户状态判断--->
?>

<!DOCTYPE html>
<html>
<head>
    <title>菜单删除</title>
	<meta charset="utf-8">
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="./js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript" src="./js/bootstrap.min.js"></script>

</head>
<body>
<form action = "AddCD.php" method="post">
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >菜品删除</th>
      <TR>
			<br>
			<TD colspan="2" align="right" height="4px">
				<a href="addDining.php"><input type="button" name="van" value="返回" class="button"  id="van"/>　</a>
			</TD>
			
		</TR>

<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>中餐</legend>
</fieldset>			</TD></TR>

      <table width='100%' border='0'  cellpadding='3' cellspacing='0'>
	 <tr>
				    <td width ='20%' align="center" bgcolor="#EEEEEE">菜名</td>
                    <td width ='20%'  align="center" bgcolor="#EEEEEE">价格</td>
                    <td width ='20%' align="center" bgcolor="#EEEEEE">介绍</td>
                    <td width ='25%' align="center" bgcolor="#EEEEEE">图片</td>
                    <td width ='10%' align="center" bgcolor="#EEEEEE">操作</td>
                  </tr>
              </table>
		
					  <?php
					  echo"<table width='100%' border='0'  cellpadding='2' cellspacing='0'>";
					  
					  
					   while($row=mysqli_fetch_array($query)){ 
        echo "<tr>";
        echo "<td width ='20%'  align = 'center'>";
Echo $row['Cname']." 
";
echo "</td>";
 echo "<td width ='20%'  align = 'center'>";
 Echo $row['Cmoney']." 
";
echo "</td>";
 echo "<td width ='20%'  align = 'center'>";
Echo $row['Cdata']." 
";
echo "</td>";
 echo "<td width ='25%'  align = 'center'>";
Echo '<img width="70px" height="70px" src= "'; 
echo $row['Cpicture'];
echo '">';
echo "<td width ='10%'  align = 'center'>";
 Echo "<a href ='D_CD.php? id=".$row['id']."&nid=".$row['nid']."'>删除</a> ";
echo "</td>";

echo "</tr>";
}

echo"</table>";

					  ?>
				

		

<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>西餐</legend>
</fieldset>			</TD></TR>
      
      <table width='100%' border='0'  cellpadding='3' cellspacing='0'>
	 <tr>
				    <td width ='20%' align="center" bgcolor="#EEEEEE">菜名</td>
                    <td width ='20%'  align="center" bgcolor="#EEEEEE">价格</td>
                    <td width ='20%' align="center" bgcolor="#EEEEEE">介绍</td>
                    <td width ='25%' align="center" bgcolor="#EEEEEE">图片</td>
                    <td width ='10%' align="center" bgcolor="#EEEEEE">操作</td>
                  </tr>
              </table>
		
					  <?php

					  echo"<table width='100%' border='0'  cellpadding='2' cellspacing='0'>";
					   while($row1=mysqli_fetch_array($query1)){ 
        echo "<tr>";
        echo "<td width ='20%'  align = 'center'>";
Echo $row1['Cname']." 
";
echo "</td>";
 echo "<td width ='20%'  align = 'center'>";
 Echo $row1['Cmoney']." 
";
echo "</td>";
 echo "<td width ='20%'  align = 'center'>";
Echo $row1['Cdata']." 
";
echo "</td>";
 echo "<td width ='25%'  align = 'center'>";
Echo '<img width="70px" height="70px" src= "'; 
echo $row1['Cpicture'];
echo '">';
echo "<td width ='10%'  align = 'center'>";
 Echo "<a href ='D_CD.php? id=".$row1['id']."&nid=".$row1['nid']."'>删除</a> ";
echo "</td>";

echo "</tr>";
}
echo"</table>";

					  ?>
<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>饮品</legend>
</fieldset>			</TD></TR>
      
      <table width='100%' border='0'  cellpadding='3' cellspacing='0'>
	 <tr>
				    <td width ='20%' align="center" bgcolor="#EEEEEE">菜名</td>
                    <td width ='20%'  align="center" bgcolor="#EEEEEE">价格</td>
                    <td width ='20%' align="center" bgcolor="#EEEEEE">介绍</td>
                    <td width ='25%' align="center" bgcolor="#EEEEEE">图片</td>
                    <td width ='10%' align="center" bgcolor="#EEEEEE">操作</td>
                  </tr>
              </table>

					  <?php

					  echo"<table width='100%' border='0'  cellpadding='2' cellspacing='0'>";
					   while($row2=mysqli_fetch_array($query2)){ 
        echo "<tr>";
        echo "<td width ='20%'  align = 'center'>";
Echo $row2['Cname']." 
";
echo "</td>";
 echo "<td width ='20%'  align = 'center'>";
 Echo $row2['Cmoney']." 
";
echo "</td>";
 echo "<td width ='20%'  align = 'center'>";
Echo $row2['Cdata']." 
";
echo "</td>";
 echo "<td width ='25%'  align = 'center'>";
Echo '<img width="70px" height="70px" src= "'; 
echo $row2['Cpicture'];
echo '">';
echo "<td width ='10%'  align = 'center'>";
 Echo "<a href ='D_CD.php? id=".$row2['id']."&nid=".$row2['nid']."'>删除</a> ";
echo "</td>";

echo "</tr>";
}
echo"</table>";

					  ?>					  
				
		</TABLE>


	 </td>
  </tr>

		
		</TABLE>


	 </td>
  </tr>

</from>

  </table>

</form>
</body>
</html>
