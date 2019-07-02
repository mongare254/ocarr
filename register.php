 <?php
 include 'regis.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <style type="">
    main{
      background-image: url('img/logo.jpg');
    }
  </style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="#SSS" rel="stylesheet" type="text/css" />
	<link type="text/css" href="css/ocar.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="font/css/font-awesome.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/asawa.jpg">
	<title>OCAR</title>
</head>
<body id="main">
  <section>
    <div class="container-fluid">
      <header id="navigation" >

        <div class="navbar">
          <a href ="#" class="navbar-brand">OCAR</a >
          <div style="margin-left: 60%" >
            <a href ="register.php">REGISTER</a >
            <a href ="login.php">LOG IN</a >
          </div>
        </div >
      </header><br>
    </div>
  </section><br><br> <br>
  <div >

  <form  method="POST" >
    <div>
    <h2>Register</h2>
  </div>
    <div class="col-md-12">
     <div class="col-md-6">
      <div class="input-group">
       <label>Admission Number </label> 
       <input type="text" name="admno" required>
     </div>
   </div>
   <div class="col-md-6">
     <div class="input-group">
      <label>First Name:</label> 
       <input type="text" name="firstname" required>
     </div>
   </div>
 </div>
  <div class="col-md-12">
     <div class="col-md-6">
      <div class="input-group">
       <label>Second Name: </label> 
       <input type="text" name="secondname" required>
     </div>
   </div>
   <div class="col-md-6">
     <div class="input-group">
      <label>Third Name:</label> 
       <input type="text" name="thirdname">
     </div>
   </div>
 </div>
   <div class="col-md-12">
     <div class="col-md-6">
      <div class="input-group">
       <label>Email Address: </label> 
       <input type="email" name="email" required>
     </div>
   </div>
   <div class="col-md-6">
     <div class="input-group">
      <label>Password:</label> 
       <input type="password" name="password">
     </div>
   </div>
 </div>
  <div class="col-md-12">
     <div class="col-md-6">
      <div class="input-group">
       <label>Confirm Password: </label> 
       <input type="password" name="password2" required>
     </div>
   </div>
 </div>
 <div class="col-md-6 col-md-offset-3">
<div class="input-group"><button name="reg_student" class="btn" type="submit">Register</button></div>
</div>
<div class="col-md-8 col-md-offset-2" >
<p>Already a user? <a href="login.php">Log in</a></p>
</div>
</form>
</div>
</body>
<script type="text/javascript" src="js/jquery2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>