<!DOCTYPE html>
<html>
<head>
  <style>
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #dddddd;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-weight: 50px;
  }

  li a:hover:not(.active) {
    background-color: white;
  }

  li a.active {
    color: white;
    background-color: #4CAF50;
  }


  .button {
    display: inline-block;
    border-radius: 10px;
    background-color: #08088A;
    border: none;
    color: white;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 500px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    display: block;
    margin: auto;

  }

  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .button:hover span {
    padding-right: 25px;
  }

  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
  .button:hover {
    background-color: black;
    color: white;
  }
  img{
    shape-margin: round;
    border-radius:dotted;
    border: 20px solid grey;
    width: 100px;
    height: 50px;
    padding-left: 500px;
  }
  .main{
   background-image: url('img/logo.jpg');
  }
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="#SSS" rel="stylesheet" type="text/css" />
  <link href="css/ocar.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="font/css/font-awesome.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/asawa.jpg">
  <title>OCAR</title>
<link rel="stylesheet" type="text/css" href="stf.css">
</head>
<body class="main">
    <section>
    <div class="container-fluid">
      <header >

        <div class="navbar">
          <a href ="#" class="navbar-brand">OCAR</a >
         <!--  <div style="margin-left: 40%" >
            <a href ="index.php">HOME </a >
            <a href ="#">COURSES</a >
            <a href ="#">REPORTS</a >
            <a href ="profile.php">PROFILE</a >
          </div>
          <div id="out">
            <a href ="logout">Log Out </a >
          </div> -->
        </div >
      </header><br>
    </div>
  </section><br>

  <!--nav bAR-->
  <header ><img src="img/logo.jpg"></header>
  <a href="login.php"><button class="button" style="vertical-align:middle"><span>Student Login </span></button></a><br>
  <a href="register.php"><button class="button" style="vertical-align:middle;"><span> Student Registration </span></button></a><br>
</body>
</html>