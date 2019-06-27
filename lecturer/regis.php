	<?php
	session_start();
// initializing variables
	$staffno ="";
	$errors = array ();
// connect to the database
	$db = mysqli_connect( 'localhost' , 'root' , '','ocar' );
// REGISTER USER
	if (isset($_POST[ 'lecreg' ])) {
// receive all input values from the form
		$firstname = mysqli_real_escape_string($db, $_POST[ 'first_name' ]);
		$secondname = mysqli_real_escape_string($db, $_POST[ 'second_name' ]);
		$staffno = mysqli_real_escape_string($db, $_POST[ 'staffno' ]);
		$email = mysqli_real_escape_string($db, $_POST[ 'lecmail' ]);
		$password_1 = mysqli_real_escape_string($db, $_POST[ 'lpassword' ]);
		$password_2 = mysqli_real_escape_string($db, $_POST[ 'confirm_lpassword' ]);
// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
		if (empty($firstname)) { array_push($errors, "Firstname is required" ); }
		if (empty($secondname)) { array_push($errors, "Secondname is required" ); }
		if (empty($email)) { array_push($errors,"Email is required" ); }
		if (empty($password_1)) { array_push($errors, "Password is required" ); }
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match" );
		}
// first check the database to make sure
// a user does not already exist with the same username and/or email
		$user_check_query = "SELECT * FROM lecturer WHERE email='$email' OR staff_no='$staffno' LIMIT 1" ;
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
	if ($user[ 'email' ] === $email) {
		array_push($errors, "Email already exists" );
	}
	if ($user[ 'staffno' ] === $staffno) {
		array_push($errors, "Staff Number already exists" );
	}
}
// Finally, register user if there are no errors in the form
if (count($errors) == 0 ) {
$password = md5($password_1) ;//encrypt the password before saving in the database
$query = " INSERT INTO lecturer (first_name,second_name,staff_no, email, password) VALUES('$firstname' ,'$secondname' ,'$staffno' , '$email' , '$password' )";
mysqli_query($db, $query);
$_SESSION[ 'staffno' ] = $staffno;
$_SESSION[ 'success' ] = "You are now logged in" ;
header( 'location: index.php' );
}
}