</html><!DOCTYPE html>
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
			color: red;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
 text-shadow: -1px 1px 0 white,
                          1px 1px 0 white,
                         1px -1px 0 white,
                        -1px -1px 0 white;
		}

		td {
			background-color:white;;
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
            background-color:black;;
			border: 1px solid white;
			color:white;
		}

		td {
			font-weight: lighter;
		}
		.btn{
    padding: 0px 0px;
 width:270px;
 height:250px;
    border-radius: 20px;
    cursor: pointer;
    border:none;
    margin-top:auto;
    margin-left: 400px;
   }
   .btn1{
    width:270px;
 height:250px;
    padding: 0px 0px;
    border-radius: 20px;
    cursor: pointer;
    border:none;
    margin-top:auto;
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
  background-image:url("https://images.pexels.com/photos/82256/pexels-photo-82256.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
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
  margin-left:100px;
  margin-right:100px;
  background-color:white;
  \\background:url("https://www.seekpng.com/png/detail/46-468911_orange-lines-png.png");
  //background:url("https://images.pexels.com/photos/1764702/pexels-photo-1764702.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
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

.dropdown-content a:hover {background-color: green
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: black;
}
.dropbtn:hover {
  background-color: green;
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
        .bck{
  background-image:url("https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
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
  <button class="dropbtn"><img class="topimg"src="https://e7.pngegg.com/pngimages/784/1020/png-clipart-hamburger-button-computer-icons-menu-menu-black-bar.png"  width="50px" height="30px" ></button>
  <div class="dropdown-content">
  <a href="adminpage.php">Upload Results</a>
  <a href="cse2.php">Upload Attendence</a>
  
  </div>

</div>
<button class="dropbtn"><img class="topimg"src="https://cdn-icons-png.flaticon.com/512/60/60817.png"  width="30px" height="30px" onclick="window.location.href='adminmenu.php'"></button>

<button class="dropbtn1"><img class="topimg"src="https://www.citypng.com/public/uploads/preview/free-login-logout-black-icon-png-11641484336leezglmsx8.png"  width="30px" height="30px" onclick="window.location.href='adminlogin.php'"></button><hr>

<div class="bck"><br>
<center><h1>Upload  II Semester Results</h1></center>
<form align="center"method="post" action="adminupload.php"> 
ROLL NO:<input type="text" name="username"><br>
<table align="center" border="1" cellspacing="0" >
  



<tr> 
	<th> SUBJECT </th>
	<th> CGPA</th>
</tr>

<tr>
				<td>Mathematics-II</td>
				<td><input type="text" name="M-II"></td></tr>
<tr>
				<td>Applied Physics</td>
                   <td><input type="text" name="AP"></td></tr>
<tr>
				<td>Object Oriented Programming through C++</td>
                   <td><input type="text" name="OOPS"></td></tr>
<tr>
				<td>Computer Organization</td>
                    <td><input type="text" name="CO"></td></tr>
<tr>
				<td>Web Design</td>
                   <td><input type="text" name="WD"></td></tr>
<tr>
				<td>Applied Physics Lab</td>
                  <td><input type="text" name="APLAB"></td></tr>
<tr>
				<td>Object Oriented Programming through C++ Lab</td>
                 <td><input type="text" name="OOPSLAB"></td></tr>
<tr>
				<td>Web Design Lab</td>
                 <td><input type="text" name="WDLAB"></td></tr>
<tr>
				<td>Consititution Of India</td>
                  <td><input type="text" name="COI"></td></tr>

<br>
<th colspan="2" align="center"><button type="submit" name="login_user">UPLOAD</button></th>
</table>
</form>
</div>
</body>

</html>