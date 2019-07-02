<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ocar";
$db=mysqli_connect($servername,$username,$password,$dbname);
if($db->connect_error){
	die("connection Failed". $db -> connect_error);
}
 

?>