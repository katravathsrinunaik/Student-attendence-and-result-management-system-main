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
$gow= $_SESSION['username'];
$sql = "SELECT * FROM attendence WHERE username='$gow'";
$sql1="SELECT * FROM attendence WHERE username='20L31A05A6'";
$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$mysqli->close();
$rows=$result->fetch_assoc();
$rows1=$result1->fetch_assoc();
$totc1=$rows1['ps']+$rows1['ls']+$rows1['dbms']+$rows1['ads']+$rows1['se']+$rows1['flat']+$rows1['js']+$rows1['uml']+$rows1['dbmslab']+$rows1['adslab']+$rows1['mp']+$rows1['lcs']+$rows1['others']+$rows1['wtest'];
$tota1=$rows['ps']+$rows['ls']+$rows['dbms']+$rows['ads']+$rows['se']+$rows['flat']+$rows['js']+$rows['uml']+$rows['dbmslab']+$rows['adslab']+$rows['mp']+$rows['lcs']+$rows['others']+$rows['wtest'];
$per1=(int)(($tota1/$totc1)*100);
$totc=$rows1['ps']+$rows1['ls']+$rows1['dbms']+$rows1['ads']+$rows1['se']+$rows1['flat']+$rows1['js']+$rows1['uml']+$rows1['dbmslab']+$rows1['adslab']+$rows1['mp']+$rows1['lcs']+$rows1['others']+$rows1['wtest']+number_format($_POST['present'])+number_format($_POST['absent']);
$tota=$rows['ps']+$rows['ls']+$rows['dbms']+$rows['ads']+$rows['se']+$rows['flat']+$rows['js']+$rows['uml']+$rows['dbmslab']+$rows['adslab']+$rows['mp']+$rows['lcs']+$rows['others']+$rows['wtest']+number_format($_POST['present']);
$per=(int)(($tota/$totc)*100);
$_SESSION['afres'] = $per;
header('location: predictor.php');
?>