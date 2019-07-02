<?php
require 'logis.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="#SSS" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="font/css/font-awesome.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/asawa.jpg">
  <style type="text/css">
    .body{
  background-image: url("img/mu.jpg");
  background-size: cover;
}
  </style>
  <title>Ocar-lecturer</title>
    
</head>
<body class="body">
  <header>
    <nav class="navver">
      <ul>
        <li style="text-align: center;">LE<span class="glow">cturer Login</span></li>
      </ul>
    </nav><br><br><br><br><br><br>
  </header>
      <div id="bord">
      <div id="box" class="glow">LOGIN</div><br><br>
<div class="hedge">
  <form method="POST" action="login.php">
    <? php include ('errors.php');?>
    <label>Staff No:</label><br>
    <input type="number" name="staffno" class="placeholder" placeholder="Staff Number" required><br>
    <label>Password:</label><br>
    <input type="password" name="lpassword" class="placeholder" placeholder="password" required><br>
    <div ><button class="btn-success" name="login_user" type="submit">Log In</button></div>
    <p>Dont have an account? <a href="register.php">Register</a></p>
        <p><a href="#">Forgot Password?</a></p>
  </form>
</div>
</div>
</body>
<script type="text/javascript" src="js/jquery2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>