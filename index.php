<?php 
  session_start(); 

  if (!isset($_SESSION['admno'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=yes">
	<link href="#SSS" rel="stylesheet" type="text/css" />
	<link href="css/ocar.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="font/css/font-awesome.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/asawa.jpg">
	<title>OCAR</title>
</head>
<body id="main">
  <section>
    <div class="container-fluid">
      <header >

        <div class="navbar">
          <a href ="#" class="navbar-brand">OCAR</a >
          <div style="margin-left: 40%" >
            <a href ="index.php">HOME </a >
            <a href ="courses.php">COURSES</a >
            <a href ="reports.php">REPORTS</a >
            <a href ="profile.php">PROFILE</a >
          </div>
          <div id="out">
            <a href ="logout.php">Log Out </a >
          </div>
        </div >
      </header><br>
    </div>
  </section><br>

  <div class="col-md-12" >
   <div class="col-md-3">
     <h3>ANNOUNCEMENTS</h3>
   </div>
   <div class="col-md-6">
    <div id="uto">
     <div class=" head ">
      <h2 >Sign Attendance</h2 >
    </div>
    <div class="form-wrapper">
    <form method=" post " action=" #">  
    <div class=" input-group ">
      <label >Course Code</label >
      <select>
        <option value="">COM 323</option>
        <option value="">COM 325</option>
        <option value="">COM 324</option>
        <option value="">COM 326</option>
      </select>
    </div>
    <div class=" input-group ">
      <label >Sign-Code:</label>
      <input type ="text" name ="sign_code" value="" minlength="4" maxlength="4">
    </div>
        <div class=" input-group ">
          <button type =" submit " class=" btn" name=" sign_btn ">Sign Attendance </button>
        </div>
      
       </form>
       </div>
      </div>
    </div>
  <div class="col-md-3">
 <h3>Lecturer Communication</h3>
</div>
</div>
</body>
<script type="text/javascript" src="js/jquery2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>