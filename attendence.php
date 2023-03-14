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
$sql = "SELECT * FROM attendence WHERE username='$gow'";
$sql1="SELECT * FROM attendence WHERE username='20L31A05A6'";
$sql2="SELECT * FROM stdname WHERE username='$gow'";
$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$data1 = mysqli_fetch_assoc($result2);
$mysqli->close();
$rows=$result->fetch_assoc();
$rows1=$result1->fetch_assoc();
$totc=$rows1['ps']+$rows1['ls']+$rows1['se']+$rows1['dbms']+$rows1['ads']+$rows1['flat']+$rows1['js']+$rows1['uml']+$rows1['dbmslab']+$rows1['adslab']+$rows1['mp']+$rows1['lcs']+$rows1['others']+$rows1['wtest'];
$tota=$rows['ps']+$rows['ls']+$rows['se']+$rows['dbms']+$rows['ads']+$rows['flat']+$rows['js']+$rows['uml']+$rows['dbmslab']+$rows['adslab']+$rows['mp']+$rows['lcs']+$rows['others']+$rows['wtest'];
$per=(int)(($tota/$totc)*100);

?>

<html>
<head>
<style>
   .btn{
    padding: 0px 0px;
 width:380px;
 height:50px;
    border-radius: 20px;
    cursor: pointer;
    border:none;
    margin-left: 30px;
    background-color:black;
    color:white;
   }
   .btn1{
    width:250px;
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
  //background:url("https://i.pinimg.com/736x/5d/e0/8d/5de08de24459fedac3d28b10a039e2a6.jpg");
  background-color:white;
  background-size: auto;
}
.det{
  float:right;
}
.brd{
  height: 550px;
  width: 380px;
  border-width:2px;
  border-color: black;
  border-radius: 10px;
  position:relative;
  display:inline-block;
  margin-top:40px;
  margin-left:30px;
  margin-right:30px;
  vertical-align: middle;
 
}
.brd1{
  height: 550px;
  width: 900px;
  border: none;
  margin-top:0px;
  border-radius: 10px;
  display:inline-block;
  vertical-align: middle;
 // box-shadow: 0px 12px 16px 0px black, 0 17px 17px 0 rgba(0,0,0,0.19);
}
.brd:hover {
  //box-shadow: 0 12px 16px 0 black, 0 17px 50px 0 rgba(0,0,0,0.19);
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
.flex-wrapper {
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
  max-width: 70%;
  max-height: 200px;
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
.plan {
  display: inline-block;
  border-radius:20px;
  margin-top: 30px ;
  margin-left: 5px ;
  font-family: 'Lato', Arial, sans-serif;
}

.plan-inner {
  background: red;
  border-radius:20px;
  min-width: 372px;
  max-width: 100%;
  position:relative;
}

.entry-title {
  background:  #75DDD9;
  
  height: 170px;
position:relative;
  text-align: center;
  color: #fff;
  
  margin-bottom: none;
}

.entry-title>h3 {
  background: black;
  
  font-size: 20px;
  padding: 5px 0;
  text-transform: uppercase;
  font-weight: 700;
  margin: 0;
}

.entry-title .price {
  position: absolute;
  bottom: -25px;
  background: #20BADA;
  height: px;
  width: px;
  margin: 0 auto;
  left: 0;
  right: 0;
  overflow: hidden;
  border-radius: 50px;
  border: 5px solid #fff;
  line-height: 80px;
  font-size: 28px;
  font-weight: 700;
}
.det{
  background-color:#f3f3f3;
  height:300px;
  width:377px;
  display:inline-block;
  margin-top:none;
}
.tab{
  //background-color:black;
  //color:white;
}
table {
  border: 1px solid;
  
  width:750px;
  height:400px;
  border-collapse: collapse;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  background-color:#434343;
}
th{
  border: 1px solid;
  height:40px;
}
td{
  border: 1px solid;
  color:white;
  height:25px;
}
.bck{
  background-image:url("https://images.pexels.com/photos/743986/pexels-photo-743986.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-size: contain;
  background-repeat:no-repeat;
  background-size: cover;
}

</style>
</head>
<body>
 <div>
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
</div>
<div class="bck">

<div class="brd">
<div class="plan">
    <div class="plan-inner">
    <div class="entry-title">
        <h3>Total Attendence</h3>
        
 
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

</div>
<div class="det">
  <br><br><br><br>
  <h2>&nbsp;&nbsp; No. of Classes Conducted:&nbsp;&nbsp;&nbsp;<?php echo $totc;?></h2><hr>
  <h2>&nbsp;&nbsp; No. of Classes Attendted&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $tota;?></h2><hr>
  <h2>&nbsp;&nbsp; No. of Classes Absent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $totc-$tota;?></h2>
</div>
<br><br><br><br>

</div>


<div class="brd1">
<h1 style="text-align:center"> ATTENDENCE DETAILS</h1>
  <hr>
  <h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME:<?php echo $data1['name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROLL NO:<?php echo $gow;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       SEC:B &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  YEAR:II &nbsp;&nbsp;&nbsp;&nbsp; SEM:II &nbsp;&nbsp;&nbsp;&nbsp;DEPT:CSE</h3>
  <table class="tab" >
  <tr>
    <th style="background-color:#75DDD9">Subject Name</th>
    <th style="background-color:#75DDD9">Classes Conducted</th>
    <th style="background-color:#75DDD9">Classes Attended</th> 
   </tr>
   <tr>
   <td>Probability & Statistics
    <td><?php echo $rows1['ps'];?></td>
    <td><?php echo $rows['ps'];?></td>
   </tr>
   <tr style="background-color:#f3f3f3">
    <td style="color:black"> Life Skills</td>
    <td style="color:black"><?php echo $rows1['ls'];?></td>
    <td style="color:black"><?php echo $rows['ls'];?></td>
   </tr>
   <tr>
    <td> Software Engineering</td>
    <td><?php echo $rows1['se'];?></td>
    <td><?php echo $rows['se'];?></td>
   </tr>
   <tr style="background-color:#f3f3f3">
    <td style="color:black"> DBMS</td>
    <td style="color:black"><?php echo $rows1['dbms'];?></td>
    <td style="color:black"><?php echo $rows['dbms'];?></td>
   </tr>
   <tr>
    <td> ADS</td>
    <td><?php echo $rows1['ads'];?></td>
    <td><?php echo $rows['ads'];?></td>
   </tr>
   <tr style="background-color:#f3f3f3">
    <td style="color:black"> FLAT</td>
    <td style="color:black"><?php echo $rows1['flat'];?></td>
    <td style="color:black"><?php echo $rows['flat'];?></td>
   </tr>
   <tr>
    <td> JavaScript</td>
    <td><?php echo $rows1['js'];?></td>
    <td><?php echo $rows['js'];?></td>
   </tr>
   <tr style="background-color:#f3f3f3">
    <td style="color:black"> UML LAB</td>
    <td style="color:black"><?php echo $rows1['uml'];?></td>
    <td style="color:black"><?php echo $rows['uml'];?></td>
   </tr>
   <tr>
    <td> DBMS LAB</td>
    <td><?php echo $rows1['dbmslab'];?></td>
    <td><?php echo $rows['dbmslab'];?></td>
   </tr>
   <tr style="background-color:#f3f3f3">
    <td style="color:black"> ADS LAB</td>
    <td style="color:black"><?php echo $rows1['adslab'];?></td>
    <td style="color:black"><?php echo $rows['adslab'];?></td>
   </tr>
   <tr>
    <td> MiniProject</td>
    <td><?php echo $rows1['mp'];?></td>
    <td><?php echo $rows['mp'];?></td>
   </tr>
   <tr style="background-color:#f3f3f3">
    <td style="color:black"> LCS</td>
    <td style="color:black"><?php echo $rows1['lcs'];?></td>
    <td style="color:black"><?php echo $rows['lcs'];?></td>
   </tr>
   <tr>
    <td> OTHERS</td>
    <td><?php echo $rows1['others'];?></td>
    <td><?php echo $rows['others'];?></td>
   </tr>
   <tr style="background-color:#f3f3f3">
    <td style="color:black"> WeaklyTest</td>
    <td style="color:black"><?php echo $rows1['wtest'];?></td>
    <td style="color:black"><?php echo $rows['wtest'];?></td>
   </tr>
   <tr>
   <th style="background-color:#75DDD9">TOTAL</th>
    <th style="background-color:#75DDD9"><?php echo $totc;?></th>
    <th style="background-color:#75DDD9"><?php echo $tota;?></th> 
   </tr>

   </table>
   
  
</div>
<button class="btn" onclick="window.location.href='predictor.php'"><h3>Attendence predictor</h3></button><br><br>
</div>
</body>
</html>