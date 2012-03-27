<?php
session_start();
include_once('dbconfig.php');
if(isset($_POST['email']) && isset($_POST['password']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];	
	if($email == '')
	{
		$_SESSION['err'] = "Email field is empty";
		header('Location: login.php');
	}
	elseif($password == '')
	{
		$_SESSION['err'] = "Password field is empty";
		header('Location: login.php');
	}	
	$sql = "SELECT * FROM manager WHERE email = '".$email."' AND pass = '".$password."'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result))
	{
		$_SESSION['user'] = $email;
		$_SESSION['pwd'] = $password;
		header('Location: index.php');
	}else
	{
		$_SESSION['err'] = "Email or Password does not match";
		header('Location: login.php');
	}	
}
?>