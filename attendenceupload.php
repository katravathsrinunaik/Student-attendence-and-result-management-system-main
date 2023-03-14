<?php

session_start();
$user = 'root';
$password = '';


$database = 'data_base1';


$servername='localhost';
$mysqli =new mysqli($servername, $user,$password,$database);


$selected = $mysqli->real_escape_string($_POST['subject']);


$gow1="UPDATE attendence SET $selected=$selected+1 WHERE username='20L31A05A6'";
             $res1=$mysqli->query($gow1);
        foreach($_POST['colour'] as $value){
            $usr=$mysqli->real_escape_string($value);
            $gow="UPDATE attendence SET $selected=$selected+1 WHERE username='$usr'";
             $res=$mysqli->query($gow);

        }

        header('location: cse2.php');



?>