<?php
session_start();
// initializing variables

$errors = array ();
// connect to the database
require '../dbconnect.php';
// REGISTER USER
if (isset($_POST['regcos'])) {
$cc= mysqli_real_escape_string($db, $_POST['cc']);
$ct = mysqli_real_escape_string($db, $_POST['ct']);
$session = mysqli_real_escape_string($db, $_POST['session']);
$lec = mysqli_real_escape_string($db, $_POST['lecturer']);
$sem = mysqli_real_escape_string($db, $_POST['sem']);
$year = mysqli_real_escape_string($db, $_POST['year']);
 
// id INT (10) PRIMARY KEY AUTO_INCREMENT, year int(10), sem int (10), session_name varchar(100)
$query = "INSERT INTO session
(`id`, `year`, `sem`, `session_name` )
VALUES('','$year' ,'$sem' ,'$sesname')";
if(!mysqli_query($db, $query)){
//echo mysqli_error($db);

$_SESSION['admno'] = 'FAILED TO REGISTER';
$msg = '<div class="alert alert-danger">';
$msg .='Failed To Register'; 
$msg .= '</div>';
echo $msg;
}else{
$msg = '<div class="alert alert-success">';
$msg .='Succesfully Registered';
$msg .= '</div>';
echo $msg;
	$_SESSION['admno'] = 'Succesfully Registered!';
	header( 'Location: regsession.php' );
}
//$_SESSION[ 'admno' ] = $admno;
// header( 'Location: index.php' );
}
?>