<?php
session_start();
if(isset($_SESSION['user']))
{
	unset($_SESSION['user']);
	unset($_SESSION['pwd']);	
	session_destroy();
	header('Location: login.php');
}