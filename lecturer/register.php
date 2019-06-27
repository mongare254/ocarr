<? php include ('regis.php')?>
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
  <title>Ocar-lecturer</title>
    
</head>
<body>
  <header>
    <nav class="navver">
      <ul>
        <li style="text-align: center;">LE<span class="glow">cturer Register</span></li>
      </ul>
    </nav><br><br><br><br><br><br>
  </header>

  <div id="bord">
      <div id="box" class="glow">RE<span>GISTER</span></div><br><br>
<div class="hedge">
  <form name="lecreg" method="post" action="regis.php" >
    <? php include('errors.php');?>
    <label>Firstname:</label><br>
    <input type="text" name="first_name" class="placeholder" placeholder="Enter Firstname"><br>
    <label>Second Name:</label><br>
    <input type="text" name="second_name" class="placeholder" placeholder="Enter Second Name"><br>
    <label>Staff Number:</label><br>
    <input type="number" name="staffno" class="placeholder" placeholder="Enter Staff Number" value="<? php echo $staffno; ?>"><br>
    <label>Email Address:</label><br>
    <input type="email" name="lecmail" class="placeholder" placeholder="Enter Email address"><br>
    <label>Password:</label><br>
    <input type="password" name="lpassword" class="placeholder" placeholder="password"><br>
    <label> Confirm Password:</label><br>
    <input type="password" name="confirm_lpassword" class="placeholder" placeholder="password"><br>
    <div ><button class="btn-success" name="lec_reg">Register</button></div>
    <p>Already have an account? <a href="register.php">Log In</a></p>
  </form>
</div>
</div>
</body>
<script type="text/javascript" src="js/jquery2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</html>