<?php
$conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());

session_start(); //启动session
include("conn.php"); //连接数据库文件
if ($_SESSION['ident']== 0) {
    alertMes("您不是管理员！无法进入", "index.php");

}
?>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
	<form name="form1" method="post" action="showcar.php">
<?php
error_reporting(E_ALL & ~E_NOTICE);
//注册session变量$total用来保存所有商品的价格总和
//判断用get方法提交的qk这个值如果为yes，就将$producelist和$quatity的值设为空，从而实现清空购物车
if($_GET[qk]=="yes"){ 
	$_session[producelist]="";
	$_session[quatity]="";
}
//将$producelist用@分隔从而将购物车中现有的商品ID的值存放到数组$arrayshowcar中
$arrayshowcar=explode("@",$_session[producelist]);
$s=0; //用$s保存购物车中商品id的总和
for ($i=0; $i < count($arrayshowcar) ; $i++) {
		$s+=intval($arrayshowcar[$i]);  //intval:对购物车中的商品ID取整 
	# code...
}
if($i==0){
	echo "<tr>";
	echo "<td height='25' colspan='6' bgcolor='#ffffff' align='center'>购物车为空！</td>";
	echo "</tr>";
}
else{ //否则显示购物车中的所有商品信息
}
?>
<tr>
	显示heml标记的部分
</tr>

<?php
$total=0;
//将session变量$producelist中的内容用字符@进行分隔，并将结果保存到数组$array中
$array=explode("@", $_session[producelist]);
//将session变量$producelist中的内容用字符@进行分隔，并将结果保存到数组$quatity中
$arrayquatity=explode("@", $_session[quatity]);
$_session[quatity]=implode("@", $arrrayquatity);
for ($i=0; $i < count($array)-1; $i++) { 
	$id=$array[$i];
	$num=$arrrayquatity[$i];
	//如果$id不为空，则从表中获取指定菜id的信息	
if ($id!="") {
	$in = "select * from chinese_food where id='{$id}'";
	$sql=mysql_query($in,$conn);
	$info=mysql_fetch_array($sql);
	$total=$num*$info[jiage];	//金额=数量X价格
	$total+=$total1;			//计算购物车中的金额
	$_session["total"]=$total;	//购物车中的累计金额
	}
}
?>
<!---显示菜单的相关信息-->
<tr>
	<td height="25"><?php echo $info[mingcheng];?> </td>
	<td height="25"><input type="text" name="<?php echo $info[$id];?>" size="2" class="inputcss"
		value=<?php echo $num;?>> </td>
	<td height="25"><?php echo $info[jiage];?> 元 </td>
	<td height="25"><?php echo $info[jiage]*$num."元";?> </td>
	<td height="25"><a href="delcar.php?id=<?php echo $info[id]?>"> 删除 </a></td>
</tr>

<tr>
	<td width="125"> 总计：<?php echo $total;?> </td>
</tr>
</form>

</table>