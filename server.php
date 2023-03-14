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
$sql = "SELECT * FROM strange username WHERE username='$gow'";
$sql1 = "SELECT * FROM stdname WHERE username='$gow'";
$result1 = $mysqli->query($sql1);
$result = $mysqli->query($sql);
$data1 = mysqli_fetch_assoc($result1);



$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: white;
			border: 1px solid black;
		}
		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}
  th{
	background-color: black;
	color:white;
	border: 1px solid white;
  }
		t

		td {
			font-weight: lighter;
		}
        .topimg {
  border-radius: 5px;
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
.stdt{
	font-size:30px;
}
.bck{
  background-image:url("https://images.pexels.com/photos/1037992/pexels-photo-1037992.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-size: contain;
  background-repeat:no-repeat;
  background-size: cover;
  height:600px;
  margin-top:none;
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
<button class="dropbtn" ><img class="topimg"src="https://cdn-icons-png.flaticon.com/512/60/60817.png"  width="30px" height="30px" onclick="window.location.href='menu.php'"></button>

<button class="dropbtn1"><img class="topimg"src="https://www.citypng.com/public/uploads/preview/free-login-logout-black-icon-png-11641484336leezglmsx8.png"  width="30px" height="30px" onclick="window.location.href='login.php'"></button><hr>
<div class="bck"><h2 style="text-align:center">II SEMESTER RESULTS</h2><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME:<?php echo $data1['name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROLL NO:<?php echo $gow;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       SEC:B &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  YEAR:II &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SEM:II &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPT:CSE</h3>

<!--<p class="stdt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Section&nbsp;:&nbsp;B &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;:&nbsp;<?php while ($data1 = mysqli_fetch_assoc($result1)) {
         ?>
        <?php echo $data1['name']; ?>
 
          <?php
        } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Redg No&nbsp;:&nbsp;<?php echo("$gow")?><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Section&nbsp;:&nbsp;B &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course&nbsp;:&nbsp;Btech<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Year&nbsp;:&nbsp;II&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department&nbsp;:&nbsp;Computer Science And Engineering</p>-->
		<hr>
		<!-- TABLE CONSTRUCTION-->
		<table border="1" cellspacing="0">
			<tr>
				<th>COURSE CODE</th>
				<th>SUBJECT</th>
				<th>CGPA</th>
				<th>GRADE</th>
				<th>CREDITS</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			
<tr>            <td>1000201104</td>
				<td>Mathematics-II</td>
				<td><?php echo $rows['MII'];?></td>
				<td>
					<?php if($rows['MII']==10)
					echo("O");
					else if($rows['MII']==9)
					echo("A");
					else if($rows['MII']==8)
					echo("B");
					else if($rows['MII']==7)
					echo("C");
					else if($rows['MII']==6)
					echo("D");
					else
					echo("F")
					?>
				</td>
				<td>3</td>
				</tr>
<tr>
	             <td>1000201204</td>
				<td>Applied Physics</td>
                   <td><?php echo $rows['AP'];?></td>
				   <td>
					<?php if($rows['AP']==10)
					echo("O");
					else if($rows['AP']==9)
					echo("A");
					else if($rows['AP']==8)
					echo("B");
					else if($rows['AP']==7)
					echo("C");
					else if($rows['AP']==6)
					echo("D");
					else
					echo("F")
					?>
				</td>
				<td>3</td>
				</tr>
<tr>
<td>1000201200</td>
				<td>Object Oriented Programming through C++</td>
                   <td><?php echo $rows['OOPS'];?></td>
				   <td>
					<?php if($rows['OOPS']==10)
					echo("O");
					else if($rows['OOPS']==9)
					echo("A");
					else if($rows['OOPS']==8)
					echo("B");
					else if($rows['OOPS']==7)
					echo("C");
					else if($rows['OOPS']==6)
					echo("D");
					else
					echo("F")
					?>
				</td>
				<td>3</td>
				</tr>
				   
<tr>
<td>1000201201</td>
				<td>Computer Organization</td>
                    <td><?php echo $rows['CO'];?></td>
					<td>
					<?php if($rows['CO']==10)
					echo("O");
					else if($rows['CO']==9)
					echo("A");
					else if($rows['CO']==8)
					echo("B");
					else if($rows['CO']==7)
					echo("C");
					else if($rows['CO']==6)
					echo("D");
					else
					echo("F")
					?>
				</td>
				<td>3</td>
				</tr>
<tr>
<td>1000201202</td>
				<td>Web Design</td>
                   <td><?php echo $rows['WD'];?></td>
				   <td>
					<?php if($rows['WD']==10)
					echo("O");
					else if($rows['WD']==9)
					echo("A");
					else if($rows['WD']==8)
					echo("B");
					else if($rows['WD']==7)
					echo("C");
					else if($rows['WD']==6)
					echo("D");
					else
					echo("F")
					?>
				</td>
				<td>3</td>
				</tr>
<tr>
<td>1000201212</td>
				<td>Applied Physics Lab</td>
                  <td><?php echo $rows['APLAB'];?></td>
				  <td>
					<?php if($rows['APLAB']==10)
					echo("O");
					else if($rows['APLAB']==9)
					echo("A");
					else if($rows['APLAB']==8)
					echo("B");
					else if($rows['APLAB']==7)
					echo("C");
					else if($rows['APLAB']==6)
					echo("D");
					else
					echo("F")
					?>
				</td>
				<td>1.5</td>
				</tr>
<tr>
<td>1000201210</td>
				<td>Object Oriented Programming through C++ Lab</td>
                 <td><?php echo $rows['OOPSLAB'];?></td>
				 <td>
					<?php if($rows['OOPSLAB']==10)
					echo("O");
					else if($rows['OOPSLAB']==9)
					echo("A");
					else if($rows['OOPSLAB']==8)
					echo("B");
					else if($rows['OOPSLAB']==7)
					echo("C");
					else if($rows['OOPSLAB']==6)
					echo("D");
					else
					echo("F")
					?>
				</td>
				<td>1.5</td>
				</tr>
<tr>
<td>1000201211</td>
				<td>Web Design Lab</td>
                 <td><?php echo $rows['WDLAB'];?></td>
				 <td>
					<?php if($rows['WDLAB']==10)
					echo("O");
					else if($rows['WDLAB']==9)
					echo("A");
					else if($rows['WDLAB']==8)
					echo("B");
					else if($rows['WDLAB']==7)
					echo("C");
					else if($rows['WDLAB']==6)
					echo("D");
					else
					echo("F")
					?>
				</td>
				<td>1.5</td>
				</tr>
<tr>
<td>1000201121</td>
				<td>Consititution Of India</td>
                  <td><?php echo $rows['COI'];?></td>
				  <td>
					<?php if($rows['COI']=='CP')
					echo("CP");
					else
					echo("F");?>
				</td>
				<td>-</td>
				</tr>
<tr>            
				<th colspan="2">TOTAL</th>
                 <th  colspan="3">
				<?php  $tot=(($rows['MII']*3)+($rows['AP']*3)+($rows['OOPS']*3)+($rows['CO']*3)+($rows['WD']*3)+($rows['APLAB']*1.5)+($rows['OOPSLAB']*1.5)+($rows['WDLAB']*1.5))/19.5;
				  echo number_format($tot, 2)?>
				  </th>
			</tr>
			<?php
				}
			?>
		</table>
			</div>
	
</body>

</html>
		