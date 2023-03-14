<?php

session_start();
$user = 'root';
$password = '';


$database = 'data_base1';


$servername='localhost';
$mysqli =new mysqli($servername, $user,$password,$database);


if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$usrname=$mysqli->real_escape_string($_POST['username']);
$pasword=$mysqli->real_escape_string($_POST['password']);
$gow="SELECT * FROM admin_1 WHERE username='$usrname' AND password='$pasword'";
$res=$mysqli->query($gow);
if($res->num_rows>0)
{
 $_SESSION['username'] = $usrname;
header('location: adminmenu.php');
}
else
{
	header('location: adminlogin.php');
}
?>

