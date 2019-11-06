<?php 
session_start();
//to redirect the user to login once he has registered
$con = mysqli_connect('localhost','root','sneha123');
mysqli_select_db($con, 'userregistration');
$name= $_POST['user'];
$pass=$_POST['password'];
$number=$_POST['number'];
$addr=$_POST['address'];
$emailid=$_POST['email'];

$s = "select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
	$message = "Ooops this username already exists";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('location:registration.php');
}else{
	$reg = " insert into usertable(name, password, number, address, email) values ('$name', '$pass', '$number', '$addr', '$email')";
	mysqli_query($con, $reg);//to run the query
	echo "Registration Successfull";
	header('location:login.php');
	
}
	?>