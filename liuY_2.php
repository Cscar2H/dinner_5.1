  <?php 
  $conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
  mysqli_set_charset($conn, 'utf8');
header('Content-type: text/html; charset=UTF-8');
require_once 'require/alertMes.php';
error_reporting(E_ALL & ~E_NOTICE);

//<---用session进行用户状态判断--->
session_start();
if (isset($_SESSION['userName'])=='') {
    alertMes("请先登录", "login.php");
}
//<---end用户状态判断--->

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>留言板</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
body{
	
}
.cab{
 
}
</style>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('images/c2.png')">
<nav class="navbar navbar-default navbar-static-top" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="">请各位客官点评☺</a>
       
   </div>
</nav>
<table width="1238" height="500" border="0">
      <form action="liuY_1.php" method="POST">
  <tr>
    <td width="798" height="400" align="right"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','images/c2.png',1)"><img src="images/login.png" width="504" height="502" id="Image3"></a></td>
    <td width="430">
    <table width="368" height="299" border="0">
      <tr>
        <p width="350" height="28" style="color: #4394F5; font-style: normal; font-weight: bold; font-size: 20px;">留言</p>
      </tr>
     
      <tr>
        
         <p colspan="3"> <strong>评论：</strong></p>
         <?php
$sql = "SELECT * FROM liuy ";
$query = mysqli_query($conn, $sql);

$i = 0;

while($row=mysqli_fetch_array($query)){ 
$i++;
$userName = $row['userName'];
$text = $row['text'];
$id = $row['id'];
echo "<p>";
$zong = $i.".".$userName."----".$text;
echo $zong;
echo "</p>";
if ($_SESSION['ident'] == 1) {
 Echo "<a href ='D_liY.php? id=".$row['id']."'>删除</a> ";
}else{
 
}

}
if ($id == "") {
  echo "<p>";
echo "没有人评论！快来评论吧！";
echo "</p>";
}
?>
      </tr>
      
    
      <tr>
       <td>
        <a href='liuY.php'>
          <input type="button" name="button" id="button" class="btn btn-primary" value="返回" style="width:100px;"></a>
          </td>
      </tr>
    </table></td>
  </tr>
  </form>
</table>

</body>
</html>