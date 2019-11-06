<?php 
 session_start();
 session_destroy();
 #checking for connection
$servername="localhost";
$username="root";
$password="sneha123";
$dbname="userregistration";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("connection failed:".mysqli_connect_error());
}

$sql="DELETE FROM cart1";
if(mysqli_query($conn,$sql))
{
	header('location:homepage1.html');
}
 ?>
 