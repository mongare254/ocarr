<?php
session_start();
if(isset($_POST['login_user'])){
	include 'dbconnect.php';
	$staffno=$_POST['staffno'];
	$password=$_POST['lpassword'];
	$passwordh = md5($password);

	$sql="SELECT * FROM users WHERE staff_reg_no='$staffno' AND password ='$passwords'";
	$result= mysqli_query($conn,$sql);
	$check = mysqli_num_rows($result);
	echo $check;
// 	if ($check == 1){
// 		$row = mysqli_fetch_assoc($result);
// 			$_SESSION['staff_reg_no'] =$row['staffno'];
// 			header("Location:index.php");
//             exit();
// 	}else if($check != 1){
// 		header("Location:login.php");
// 		exit();
// 	}
}
?>