
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=yes">
	<link href="#SSS" rel="stylesheet" type="text/css" />
	<link href="../css/ocar.css" rel="stylesheet">
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../font/css/font-awesome.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/asawa.jpg">
	<title>OCAR-admin Panel</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="#">OCAR</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav" style="background-color: black; color:white;margin-left:40%;">
            <li><h1>Admin Panel</h1></li>
          </ul>
          <ul class="navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header><br> <br>
  <div class="col-md-12">
    <div class="col-md-4">
      <div class="container wrap sidebar-right">
       <div class="row">
         <div >                 
          <div class="well"><a href="addcourse.php">Courses</a></div>     
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div >
           <div class="well"><a href="">Lecturer</a></div></div>     
           <div>
             <div class="well"><a href="">Students</a></div>
           </div>
         </div>
       </div> 
       <div class="container"> 
        <div class="row">
         <div >                 
          <div class="well"><a href="regsession.php">Session</a></div>      
        </div>
      </div>

    </div> 
  </div>

</div>
<div class="col-md-8">
<form method="POST">
  <div class="form-group">
    <label >Course Code:</label>
    <input type="text" class="form-control" name="cc">
  </div>
  <div class="form-group">
    <label>Course Title:</label>
    <input type="text" class="form-control" name="ct">
  </div>
    <div class="form-group">
    <label>Lecturer</label>
    <select class="form-control" name='lecturer'>
      <option name="1"><?php include 'getlecture.php'; ?></option></select>
  </div>
 <div class="form-group">
    <label >Year:</label>
    <select name="year" class="form-control">
      <option value="2019">2019</option>
      <option value="2018">2018</option>
    </select>
  </div>
    <div class="form-group" >
    <label >Semester:</label>
     <select name="sem" class="form-control">
      <option value="1"> 1</option>
      <option value="2"> 2</option>
      <option value=3> 3</option>
    </select>
    <button type="submit" class="btn-success" name="adcors">Register</button>
</form>

</div>
</div>

</body>
<script type="text/javascript" src="js/jquery2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>