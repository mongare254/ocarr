<?php
session_start();
if(isset($_POST['login_user'])){
	include 'dbconnect.php';
	$staffno=$_POST['staffno'];
	$password=$_POST['lpassword'];
	$passwordh = md5($password);

	$sql="SELECT * FROM lecturer WHERE staffno='$staffno' AND password ='$passwordh'";
	$result= mysqli_query($conn,$sql);
	$check = mysqli_num_rows($result);
	if ($check == 1){
		$row = mysqli_fetch_assoc($result);
			$_SESSION['staff_reg_no'] =$row['staffno'];
			header("Location:index.php");
            exit();
	}else if($check != 1){
		header("Location:login.php");
		exit();
	}
}
?>