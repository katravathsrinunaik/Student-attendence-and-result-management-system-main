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
$MII=$mysqli->real_escape_string($_POST['M-II']);
$AP=$mysqli->real_escape_string($_POST['AP']);
$OOPS=$mysqli->real_escape_string($_POST['OOPS']);
$CO=$mysqli->real_escape_string($_POST['CO']);
$WD=$mysqli->real_escape_string($_POST['WD']);
$APLAB=$mysqli->real_escape_string($_POST['APLAB']);
$OOPSLAB=$mysqli->real_escape_string($_POST['OOPSLAB']);
$WDLAB=$mysqli->real_escape_string($_POST['WDLAB']);
$COI=$mysqli->real_escape_string($_POST['COI']);
$gow="SELECT * FROM strange WHERE username='$usrname'";
$res=$mysqli->query($gow);
if($res->num_rows>0)
{
 $che="UPDATE strange SET MII=$MII,AP=$AP,OOPS=$OOPS,CO=$CO,WD=$WD,APLAB=$APLAB,OOPSLAB=$OOPSLAB,WDLAB=$WDLAB,COI='$COI' WHERE username='$usrname'";
 $res3=$mysqli->query($che);
 if($res->rows>0)
{
 
header('location: adminpage.php');
echo ("Uploaded");
}
else
{

}
}
else
{
	
	
	$gow2="INSERT INTO strange(username,MII,AP,OOPS,CO,WD,APLAB,OOPSLAB,WDLAB,COI)
	VALUES('$usrname',$MII,$AP,$OOPS,$CO,$WD,$APLAB,$OOPSLAB,$WDLAB,'$COI')";
	
	$res=$mysqli->query($gow2);
	if($res)
	{
		echo '<script>alert("Upload Succesfully")</script>';
		header('location: adminpage.php');
	}
	else
	{
	
	}
}

?>