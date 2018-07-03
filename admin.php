<?php
/*session_start();
include_once 'common.php';
$username='root';
$password='root';
$error = '';
if(isset($_GET['logout'])){   unset($_SESSION['login']); }

if ( isset($_POST['login'])){
	$txtUsername =  trim($_POST['login']);
	$txtPassword = trim($_POST['password']);

	if ( $txtUsername == $username && $txtPassword == $password) {
		$_SESSION['login']=true;
		header("Location: /admin.php");
	}else{
		$error = "Ошибка пароль или логин";
	}
}

if(isset($_SESSION['login'])){
	include_once $Common->GetTemplatePath('admin/admin_panel');
	exit();
}else{
	include_once $Common->GetTemplatePath('admin/login');
}*/