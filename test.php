
<?php

session_start();
$user = 'root';
$password ='';


$database = 'data_base1';


$servername='localhost';
$mysqli =new mysqli($servername, $user,$password,$database);




?>


<?php 
$usrname=$mysqli->real_escape_string($_POST['username']);
$pasword=$mysqli->real_escape_string($_POST['password']);
$gow="SELECT * FROM table_1 WHERE username='$usrname' AND password='$pasword'";
$res=$mysqli->query($gow);
if($res->num_rows>0)
{
 $_SESSION['username'] = $usrname;
header('location: menu.php');
}
else
{
    header('location: login.php');
}
?>
