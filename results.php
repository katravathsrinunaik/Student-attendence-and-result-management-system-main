<html>
    <style>
        .topimg {
  border-radius: 5px;
}
.btn{
    padding: 0px 0px;
 width:250px;
 height:250px;
    border-radius: 20px;
    cursor: pointer;
    border:none;
    margin-left: 230px;
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
   .bimg {
    margin-top:10px;
  border-radius: 15px;
   }
   .btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btn1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
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
  background-image:url("https://images.pexels.com/photos/3297593/pexels-photo-3297593.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-size: contain;
  background-repeat:no-repeat;
  background-size: cover;
  height:600px;
  margin-top:none;
}

    </style>
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
<div class="bck"><br><br><br><br><br><br>
<button class="btn"><img class="bimg" src="https://cdn.vectorstock.com/i/1000x1000/56/23/student-studying-and-using-laptop-at-desk-vector-36045623.webp" width="200px" height="180px" onclick="window.location.href='server.php'"><br><h2>Sem-I Results</h2></button>
<button class="btn1"><img class="bimg" src="https://media.istockphoto.com/vectors/exam-results-survey-form-document-vector-or-test-quiz-checklist-vector-id1221580480" width="200px" height="180px" onclick="window.location.href='server.php'"><br><h2>Sem-II Results</h2></button>
<button class="btn1"><img class="bimg" src="https://cdn.vectorstock.com/i/1000x1000/49/06/online-student-webinar-or-e-learning-concept-vector-31924906.webp" width="200px" height="180px" onclick="window.location.href='server.php'"><br><h2>Sem-III Results</h2></button>
</div>
</body>
</html>