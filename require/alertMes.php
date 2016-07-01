<?php
function alertMes($mes,$url){
	echo "<script>alert('{$mes}');</script>";//js弹窗
	echo "<script>window.location='{$url}';</script>";//自定义的window.location函数实现URL网页跳转
}
















?>