<!DOCTYPE html>

<?php

session_start();
error_reporting(0);

$user = 'root';
$password = '';


$database = 'data_base1';


$servername='localhost';
$mysqli =new mysqli($servername, $user,$password,$database);



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

?>

<html>
<head>
<style>
   .btn{
    padding: 0px 0px;
 width:500px;
 height:250px;
    border-radius: 20px;
    cursor: pointer;
    border:none;
    margin-left: 150px;
   }
   .btn1{
    width:500px;
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
  \\background:url("https://images.pexels.com/photos/696644/pexels-photo-696644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-color:white;
  background-size: auto;
}
.det{
  float:right;
}
.brd{
  height: 300px;
  width: 600px;
  border: none;
  border-radius: 20px;
  margin-left:auto;
  margin-right:auto;
  background-color:white;
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
.form .input-group input {
    width: 50%;
    padding: 10px 0;
    font-size: 1rem;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background-color: transparent;
    color: inherit;
  }
  .submit-btn {
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: none;
    outline: none;
    background: #ff652f;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  flex-wrapper {
  display: flex;
  flex-flow: row nowrap;
}

.single-chart {
  width: 100%;
  align:center;
  justify-content: space-around ;
  
}

.circular-chart {
  display: block;
  margin: 10px auto;
  max-width: 50%;
  max-height: 100px;
}

.circle-bg {
  fill: #75DDD9;
  stroke: #eee;
  stroke-width: 3.8;
}

.circle {
  fill: none;
  stroke-width: 2.8;
  stroke-linecap: round;
  animation: progress 3s ease-out forwards;
}

@keyframes progress {
  0% {
    stroke-dasharray: 0 100;
  }
}

.circular-chart.orange .circle {
  stroke: #ff9f00;
}

.circular-chart.green .circle {
  stroke: #4CC790;
}

.circular-chart.blue .circle {
  stroke:black;
}

.percentage {
  fill: black;

  font-family: sans-serif;
  font-size: 0.5em;
  text-anchor: middle;
}
.bck{
  //background-image:url("https://images.pexels.com/photos/399160/pexels-photo-399160.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-image:url("https://media.gettyimages.com/photos/pile-of-books-profile-view-picture-id157328951?s=2048x2048");
  background-size: contain;
  background-repeat:no-repeat;
  background-size: cover;
  height:600px;
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
<button class="dropbtn"><img class="topimg"src="https://cdn-icons-png.flaticon.com/512/60/60817.png"  width="30px" height="30px" onclick="window.location.href='menu.php'"></button>

<button class="dropbtn1"><img class="topimg"src="https://www.citypng.com/public/uploads/preview/free-login-logout-black-icon-png-11641484336leezglmsx8.png"  width="30px" height="30px" onclick="window.location.href='login.php'"></button><hr>
<div class="bck"><br><h1 style="text-align:center"> Attendence Predictor</h1><br>

<div class="brd">
 <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Current Attendence:<?php echo $per1;?>%</h2>
 
 
 <div class="input-group">  
   <form name="pre" action="predictor.php" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Attendence after attending <input  type="text" size="1px" value="0" name="present"></input> classes and absenting 
   <input  type="text" size="1px" value="0" name="absent"></input> classes
   
    <br> <br>
    
   <button type="submit" class="submit-btn">Submit</button>
          </form></div>
          <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After Prediction Your Attendence Will Be:</h2>
          <div class="single-chart">
    <svg viewBox="0 0 36 36" class="circular-chart blue">
      <path class="circle-bg"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <path class="circle"
        stroke-dasharray="<?php echo($per);?>, 100"
        d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
      />
      <text x="18" y="20.35" class="percentage"><?php echo($per);?>%</text>
    </svg>
     </div> 
    </div>
</div>

</body>
</html>