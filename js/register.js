function register()
{
	var userName = document.getElementById('userName').value;
	var password = document.getElementById('password').value;
	var repassword = document.getElementById('repassword').value;
	var telephone = document.getElementById('telephone').value;
	var address = document.getElementById('address').value;

	if (userName == null || userName == "")
	{
		alert("请输入用户名！");
		return false;
	}else if(password == null || password == "")
	{
		alert("请输入密码！");
		return false;
	}else if(repassword == null || repassword == "")
	{
		alert("请再次输入密码！");
		return false;
	}else if(password != repassword)
	{
		alert("两次密码输入不相同！请重新输入");
		return false;
	}else if(telephone == null || telephone == "")
	{
		alert("请输入手机号码！");
		return false;
	}else if (!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(telephone))) 
	{
		alert("请输入正确的手机号码！");
		return false;
	}
	else if(address == null || address == "")
	{
		alert("请输入地址！");
		return false;
	}else{
			return true;
	}
}