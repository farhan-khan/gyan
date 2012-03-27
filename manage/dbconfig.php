<?php
if($_SERVER["SERVER_NAME"] == 'localhost')
{
$hostname 	= "localhost";
$username 	= "root";
$password 	= "";
$dbname 	= "pmgyan";
}else {
$hostname 	= "localhost";
$username 	= "pmgyan_developer";
$password 	= "year2012";
$dbname 	= "pmgyan_db";
}
$con = mysql_connect($hostname,$username,$password) or die('Unable to conect');
mysql_select_db($dbname);
?>