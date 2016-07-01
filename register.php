<!doctype html>
<html>
<head>
	<meta charset="utf-8">
   <title>点餐注册</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/register.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="homepage.php">网上订餐</a>
   </div>
   <div>
      <form class="navbar-form navbar-right" role="search">
      <a href="http://localhost/dinner/login.php"  class="btn btn-primary btn-sm">登录</a>
      </form>
      <p class="navbar-text navbar-right">已经有账号了？</p>
   </div>
</nav>
<br/><br/><br/>
<p align="center" style="font-size: 24px; color: #4394F5; font-weight: bold;" width="1179" height="43">注册账号<br>
</p>
<table width="475" height="376" border="0" align="center">
 <form action="chkReg.php" method="POST">
  <tr>
    <td width="72" height="60">用户名:</td>
    <td width="379"><input type="userName" name="userName" id="userName" class="form-control userName"></td>
  </tr>
  <tr>
    <td height="50">密码:</td>
    <td><input type="password" name="password" id="password" class="form-control password"></td>
  </tr>
  <tr>
    <td height="50">确认密码:</td>
    <td><input type="password" name="repassword" id="repassword" class="form-control"></td>
  </tr>
  <tr>
    <td height="50">手机号码:</td>
    <td><input type="text" name="telephone" id="telephone" class="form-control telephone"></td>
  </tr>
  <tr>
    <td height="50">地址:</td>
    <td><input type="text" name="address" id="address" class="form-control address"></td>
  </tr>
  <tr>
    <td height="50">&nbsp;</td>
    <td><p>
      <label  class="checkbox-inline">
        <input type="radio" name="ident" value="0" id="ident_0" checked>
        普通用户</label>
      <label  class="checkbox-inline">
        <input type="radio" name="ident" value="1" id="ident_1">
        管理员</label>
    </p></td>
  </tr>
  <tr>
    <td height="50">&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="注册" class="btn btn-primary" style="width:375px;" onclick="return register();"></td>
  </tr>
  </form>
</table>

</body>
</html>