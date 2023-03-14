<!DOCTYPE html>
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
$sql = "SELECT * FROM stimage WHERE username='$gow'";
$sql1="SELECT * FROM stdname WHERE username='$gow'";
$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$mysqli->close();
?>

<html>
<head>
<style>
   .btn{
    padding: 0px 0px;
 width:270px;
 height:250px;
    border-radius: 20px;
    cursor: pointer;
    border:none;
    margin-left: 200px;
   }
   .btn1{
    width:270px;
 height:250px;
    padding: 0px 0px;
    border-radius: 20px;
    cursor: pointer;
    border:none;
    margin-left: 75px;
   }
  .stimg {
  border-radius: 50%;
  border:1px solid black;
  margin-left:40px;
  margin-top:20px;
  display: inline-block;
  vertical-align: top;
  float:left;
}
.stdt{
  display: inline-block;
  

}
.mdiv{
  border-radius:10px;
  background-image:url("https://media.gettyimages.com/photos/background-made-of-several-layers-of-paper-picture-id1219813080?s=2048x2048");
  \\background:url("https://images.pexels.com/photos/696644/pexels-photo-696644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-size: contain;
  background-repeat:no-repeat;
  background-size: cover;
}
.det{
  float:right;
}
.brd{
  height: 260px;
  width: 1200px;
  border: none;
  border-radius: 10px;
  margin-left:90px;
  margin-right:100px;
  background-color:white;
  //background:url("https://www.seekpng.com/png/detail/46-468911_orange-lines-png.png");
  //background:url("https://media.gettyimages.com/photos/universal-stylish-paper-background-picture-id1320607361?s=2048x2048");
  background-repeat: no-repeat;
  background-size:contain;
  background-size:1200px 260px;
  box-shadow: 0 12px 16px 0 black, 0 17px 50px 0 rgba(0,0,0,0.19);
}
.brd:hover {
  box-shadow: 0 12px 16px 0 black, 0 17px 50px 0 rgba(0,0,0,0.19);
}
   .bimg {
    margin-top:10px;
  border-radius: 15px;
}
.topimg {
  border-radius: 5px;
}
   .btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btn1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.topm{
  background-color:black;
}
.dropbtn {
  background-color: white;
  color: black;
  padding: 8px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropbtn1 {
  background-color: white;
  color: black;
  padding: 8px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin-left:1200px;
  margin-right:0px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: green}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: green;
}
.dropbtn:hover {
  background-color: white;
  color:black;
}
h1 {
			text-align: center;
			color: red;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
 text-shadow: -1px 1px 0 white,
                          1px 1px 0 white,
                         1px -1px 0 white,
                        -1px -1px 0 white;
		}
    .gowtham{
              background-color:#000066;
              height:50px;
		 }

</style>
</head>
<body>
 
<hr>
    <div class="dropdown">
  <button class="dropbtn"><img class="topimg"src="https://e7.pngegg.com/pngimages/784/1020/png-clipart-hamburger-button-computer-icons-menu-menu-black-bar.png"  width="50px" height="30px"></button>
  <div class="dropdown-content">
  <a href="results.php">Results</a>
  <a href="attendence.php">Attendence</a>
  <a href="predictor.php">Attendence Predictor</a>
  </div>

</div>
<button class="dropbtn"><img class="topimg"src="https://cdn-icons-png.flaticon.com/512/60/60817.png"  width="30px" height="30px"></button>

<button class="dropbtn1"><img class="topimg"src="https://www.citypng.com/public/uploads/preview/free-login-logout-black-icon-png-11641484336leezglmsx8.png"  width="30px" height="30px" onclick="window.location.href='login.php'"></button><hr>
<div class="mdiv">


    <marquee>  <h1>VIGNAN'S INSTITUTE OF INFORMATION TECHNOLOGY(Autonoums)</h1></marquee>
    
<div class="brd">
  <div>
     <?php
        while ($data = mysqli_fetch_assoc($result)) {
         ?>
        <img class="stimg" src="<?php echo $data['imagelnk']; ?>" width="200px" height="200px">
 
          <?php
        } ?>
    </div>
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h2 class="stdt"style="line-height:8px;">Name&nbsp;:&nbsp;<?php while ($data1 = mysqli_fetch_assoc($result1)) {
         ?>
        <?php echo $data1['name']; ?>
 
          <?php
        } ?></h2>
    <br> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h2 class="stdt" style="line-height:8px;">Redg No&nbsp;:&nbsp;<?php echo("$gow")?></h2><br>
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h2 class="stdt"style="line-height:8px;">Section&nbsp;:&nbsp;B</h2><br>
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h2 class="stdt"style="line-height:8px;">Course&nbsp;:&nbsp;Btech</h2>
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h2 class="stdt"style="line-height:8px;">Present Year&nbsp;:&nbsp;II</h2><br>
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
    <h2 class="stdt"style="line-height:8px;">Department&nbsp;:&nbsp;Computer Science And Engineering</h2>
   
    
</div>
<br><br>
<button class="btn"><img class="bimg" src="https://cdn.vectorstock.com/i/1000x1000/49/06/online-student-webinar-or-e-learning-concept-vector-31924906.webp" width="200px" height="180px" onclick="window.location.href='results.php'"><br><h2> Results</h2></button>
<button class="btn1"><img class="bimg" src="https://st4.depositphotos.com/7662228/26267/v/1600/depositphotos_262672542-stock-illustration-man-hold-attendance-clipboard-with.jpg" width="200px" height="180px"onclick="window.location.href='attendence.php'"><br><h2> Attendence</h2></button>
<!--<button class="btn1"><img class="bimg" src="https://us.123rf.com/450wm/yupiramos/yupiramos1902/yupiramos190207004/116899394-man-with-books-stacked-literature-vector-illustration.jpg?ver=6" width="200px" height="180px"><br><h2> Syllabus</h2></button>-->
<button class="btn1"><img class="bimg" src="https://www.timelabs.in/images/moduleBox/ATTENDANCE.png" width="200px" height="180px"onclick="window.location.href='predictor.php'"><br><h2> Attendence Predictor</h2></button>
<br><br><br>     </div>
</body>
</html>


  

