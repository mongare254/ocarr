<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
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
            <a href ="#">COURSES</a >
            <a href ="#">REPORTS</a >
            <a href ="profile.php">PROFILE</a >
          </div>
          <div id="out">
            <a href ="logout">Log Out </a >
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
     <div class=" head ">
      <h2 >Sign Attendance</h2 >
    </div>
    <form method=" post " action=" #">
      <div class="content">
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
      </div>
       </form>
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