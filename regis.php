<? php
$error=" ";
$adm_no=$_POST['adm_no'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2 =md5($password);
$second_name=$_POST['second_name'];
$first_name=$_POST['first_name'];
$other_name=$_POST['other_name'];
$year=$_POST['year'];

$query = "INSERT INTO  student(adm_no,second_name, first_name, third_name, email,password, study_year) values ('$adm_no',
'$last_name', '$first_name','$other_name' '$email','$password','$year')";

$result = mysqli_query($conn, $query);
if($result==1)
{       

	$error ='<p class="alert alert-success">Record Added succesfully</p>';
	if(empty($_SESSION)) // if the session not yet started 
   session_start();
if(empty($_SESSION)) // if the session not yet started 
   session_start();
if(!isset($_POST['submit'])){
	  header("Location: login.php");
   exit; 
}

if(isset($_SESSION['email'])) { // if already login
   header("location: index.php"); // send to home page
   exit; 
}?>