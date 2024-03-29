<?php
session_start();
// initializing variables

$errors = array ();
// connect to the database
require 'dbconnect.php';
// REGISTER USER
if (isset($_POST['reg_student'])) {
	// SELECT `id`, `first_name`, `second_name`, `third_name`, `staff_reg_no`, `category`, `password`, `email`, `phone_no` FROM `users` WHERE 1
// receive all input values from the form
$first_name = mysqli_real_escape_string($db, $_POST['firstname']);
$second_name = mysqli_real_escape_string($db, $_POST['secondname']);
$third_name = mysqli_real_escape_string($db, $_POST['thirdname']);
$reg_no = mysqli_real_escape_string($db, $_POST['admno']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password']);
$password_2 = mysqli_real_escape_string($db, $_POST[ 'password2']);
 

// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array

if ($password_1 != $password_2) {
array_push($errors, "The two passwords do not match" );
}
  $user_check_query = "SELECT * FROM users WHERE staff_reg_no='$reg_no' OR email='$email' LIMIT 1" ;
$result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
if ($user[ 'staff_reg_no' ] === $reg_no) {
array_push($errors, "Admission number already exists" );
}
if ($user[ 'email' ] === $email) {
array_push($errors, "email already exists" );
}
}
// Finally, register user if there are no errors in the form
if (count($errors) == 0 ) {
$password = md5($password_1) ;//encrypt the password before saving in the database
$query = "INSERT INTO users
( `first_name`, `second_name`, `third_name`, `staff_reg_no`, `category`, `password`, `email` )
VALUES('$first_name' ,'$second_name' ,'$third_name' ,'$reg_no','Student','$password' , '$email' )";
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
	header( 'Location: index.php' );
}
//$_SESSION[ 'admno' ] = $admno;
// header( 'Location: index.php' );
}
}
?>