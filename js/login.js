function login()
{
	var userName = document.getElementById('userName').value;
	var password = document.getElementById('password').value;
	var passcode = document.getElementById('passcode').value;
	if (userName == null || userName == "")
	{
		alert("请输入用户名！");
		return false;
	}else if(password == null || password == "")
	{
		alert("请输入密码！");
		return false;
	}else if(passcode == null || passcode == "")
	{
		alert("请输入验证码！");
		return false;
	}else{
			return true;
	}
}