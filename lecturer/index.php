
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
    <div class="container-fluid">
    <nav class="navver">
      <ul style="text-align: center;">
        <li><a href="index.php">HOME</a></li>
        <li style="text-align: center;">O<span class="glow">CAR</span></li>
        <li><a href="reports.php">REPORTS</a></li>
        <div class="far-right"><li> <a href="logout.php">Log out</a></li><div>
      </ul>
    </nav>
  </div><br><br><br><br><br><br>
  </header>
<div><? echo $_SESSION['staffno'];?></div>
  <div id="bord">
    <div id="box" class="glow">Att<span>endance</span></div><br><br>
    <div class=" content ">
        </h3 >
          </div>
        <div class="hedge">
          <form method="POST" action="#" >
            <label>Course:</label><br>
            <select class="placeholder">
              <option value="course1" selected>COM 321</option>
              <option value="course2">COM 326</option>
              <option value="course3">COM 325</option>

            </select><br>
            <label>Code:</label><br>
            <input type="number" name="lec_code" class="placeholder" placeholder="Code" minlength="4" maxlength="4"><br>
            <div ><button class="btn-success" valu="submit">Assign Code</button></div>
          </form>
        </div>
      </div>
    </body>
    <script type="text/javascript" src="js/jquery2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</html>