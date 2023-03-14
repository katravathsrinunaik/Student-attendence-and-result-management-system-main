<!doctype html>
<html lang="en">
  <head>
    
    <title>Attendance Portal</title>
   
    <style>
      
     
      
      .chk{
        color:black;
        margin-left: 200px;
        padding: 20px;
      }
      
      .cls{
        margin-left: 200px;
        padding: 20px;
        margin-top: 20px;
      }
      select{
        border-radius: 5px;
        margin-right: 50px;
      }
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
.bck{
  background-image:url("https://images.pexels.com/photos/399160/pexels-photo-399160.jpeg?auto=compress&cs=tinysrgb&w=600");
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
  <h1 style="text-align:center">UPLOAD CSE-02 ATTENDENCE</h1>
<form method="post" action="attendenceupload.php">
<div class="cbox">
      <div class="chk">
        <div class="cc">
             <input type="checkbox"  name='colour[]' value="20L31A0565">20L31A0565&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox"  name='colour[]'value="20L31A0566">20L31A0566&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox"  name='colour[]'value="20L31A0567">20L31A0567&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox"  name='colour[]'value="20L31A0568">20L31A0568&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox"  name='colour[]'value="20L31A0569">20L31A0569&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox"  name='colour[]'value="20L31A0570">20L31A0570&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox"  name='colour[]'value="20L31A0571">20L31A0571&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox"  name='colour[]'value="20L31A0572">20L31A0572</div>
        <div class="cc">
              <input type="checkbox"  name='colour[]'value="20L31A05673">20L31A0573&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"  name='colour[]'value="20L31A0574">20L31A0574&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"  name='colour[]'value="20L31A0575">20L31A0575&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"  name='colour[]'value="20L31A0576">20L31A0576&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"  name='colour[]'value="20L31A0577">20L31A0577&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"  name='colour[]'value="20L31A0578">20L31A0578&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"  name='colour[]'value="20L31A0579">20L31A0579&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"  name='colour[]'value="20L31A0580">20L31A0580</div>
        <div class="cc">
              <input type="checkbox"   name='colour[]'value="20L31A0581">20L31A0581&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0583">20L31A0583&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0584">20L31A0584&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0585">20L31A0585&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0586">20L31A0586&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0587">20L31A0587&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0588">20L31A0588&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0589">20L31A0589</div>
        <div class="cc">
              <input type="checkbox"   name='colour[]'value="20L31A0590">20L31A0590&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0591">20L31A0591&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0592">20L31A0592&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0593">20L31A0593&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0594">20L31A0594&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0595">20L31A0595&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0596">20L31A0596&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0597">20L31A0597</div>
        <div class="cc">
              <input type="checkbox"   name='colour[]'value="20L31A0598">20L31A0598&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A0599">20L31A0599&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05A0">20L31A05A0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05A1">20L31A05A1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <input type="checkbox"   name='colour[]'value="20L31A05A2">20L31A05A2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05A3">20L31A05A3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05A4">20L31A05A4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05A5">20L31A05A5</div>
        <div class="cc">
              <input type="checkbox"   name='colour[]'value="20L31A05AF">20L31A05AF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05A7">20L31A05A7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05A8">20L31A05A8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05A9">20L31A05A9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05B0">20L31A05B0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05B1">20L31A05B1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05B2">20L31A05B2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]' value="20L31A05B3">20L31A05B3</div>
        <div class="cc">
              <input type="checkbox"   name='colour[]' value="20L31A05B4">20L31A05B4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'  value="20L31A05B5">20L31A05B5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]' value="20L31A05B6">20L31A05B6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]' value="20L31A05B7">20L31A05B7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]' value="20L31A05B8">20L31A05B8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05B9">20L31A05B9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05C0">20L31A05C0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox"   name='colour[]'value="20L31A05C1">20L31A05C1</div>
        <div class="cc">
                      <input type="checkbox"   name='colour[]' value="20L31A05C2">20L31A05C2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="checkbox"  name='colour[]'  value="20L31A05C3">20L31A05C3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" name='colour[]' value="20L31A05C4">20L31A05C4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" name='colour[]'  value="20L31A05C5">20L31A05C5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" name='colour[]' value="20L31A05C6">20L31A05C6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" name='colour[]' value="20L31A05C7">20L31A05C7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="checkbox" name='colour[]' value="20L31A05C8">20L31A05C8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     </div>
      </div>
      <div class="cls">
        <select name="subject">
          <option>&nbsp;&nbsp;Select Subject</option>
          <option value="ps">&nbsp;&nbsp;Probability & Statistics</option>
          <option value="ls">&nbsp;&nbsp; Life Skills</option>
          <option value="se">&nbsp;&nbsp;Software Engineering</option>
          <option value="dbms">&nbsp;&nbsp;DBMS</option>
          <option value="ads">&nbsp;&nbsp;ADS</option>
          <option value="flat">&nbsp;&nbsp;FLAT</option>
          <option value="js">&nbsp;&nbsp;JavaScript</option>
          <option value="uml">&nbsp;&nbsp;UML LAB</option>
          <option value="dbmslab">&nbsp;&nbsp;DBMS LAB</option>
          <option value="adslab">&nbsp;&nbsp;ADS LAB</option>
          <option value="mp">&nbsp;&nbsp;Mini Project</option>
          <option value="lcs">&nbsp;&nbsp;LCS</option>
          <option value="others">&nbsp;&nbsp;Others</option>
          <option value="wtest">&nbsp;&nbsp;Weakly Test</option>
        </select>
        <button type="submit">Submit</button>
      </div>
</div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
<!-- https:leadschool.in/wp-content/uploads/2022/04/Blog%20Featured%20Images%20(36).png -->