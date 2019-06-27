
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
  <style type="text/css">
    .glow{
    font-size: 100 px;
    color:black;
    text-align: center;
    -webkit-animation: glow 1s ease-in-out infinite alternate;
    -moz-animation:glow 1s ease-in-out infinite alternate;
    animation: glow 3s ease-in-out infinite alternate;
  }
  @-webkit-keyframes glow{
    from{
      text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #60073, 0 0 50px #60073, 0 0 60px #60073, 0 0 70px #60073;
         }
      to{
      text-shadow: 0 0 20px #fff,0 0 30px #ff4da6,0 0 40px #ff4da6,0 0 50px #ff4da6,0 0 60px #ff4da6,0 0 70px #ff4da6,0 0 80px #ff4da6;
    }
  }
  </style>
</head>
<body class="main">
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
<div class="glow">
    <h2>Login</h2>
  </div>
   
   <form  method="POST" enctype="application/x-www-form-urlencoded" action="logis.php">
            <div class="input-group">
             <label>Email Address: </label> 
                <input type="email" name="email" required>
             </div>
       <div class="input-group">
             <label>Password : </label>
             <input type="password" name="password">
            </div>
       <div class="input-group"><button name="login_user" class="btn">Login</button></div>
       <a href="register.php">Create new account</a>
    
  </form>

</body>
<script type="text/javascript" src="js/jquery2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>