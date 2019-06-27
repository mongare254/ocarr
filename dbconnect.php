<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ocar";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("connection Failed". $conn -> connect_error);
}
// echo "Connected Successfully";
header('location:index.php');
$_SERVER['PHP_SELF'];

?>