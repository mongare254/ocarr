
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
<form action="/action_page.php">
  <div class="form-group">
    <label for="lecturer">Lecturer:</label>
    <select class="form-control" name='lecturer'>
      <option><?php include 'getlecture.php'; ?></option></select>
  </div>
  <div class="form-group">
    <label for="pwd">Course:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
    <button type="submit" class="btn-success">Register</button>
</form>

</div>
</div>

</body>
<script type="text/javascript" src="js/jquery2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>