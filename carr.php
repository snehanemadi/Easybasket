<html>
<head>

<style>
body{
	background-image: url("imgg16.jpeg");
}
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}
table {
    border-collapse: collapse;
    width: 60%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #00ff00;
    color: white;
}

.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button3 {border-radius: 8px;}
h1{
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>
</head>
<body>
<div class="navbar">
  <a class="active" href="homepage1.html"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="select_final.html"><i class="fa fa-arrow-left"></i> back</a>
  <!--<a href="#"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>--> 
  <!--<a href="select_final.html"><i class="fa fa-fw fa-square"></i> Categories</a>-->
</div>

<?php

/*<?php include 'header.php'; ?><style><?php include 'CSS/main.css'; ?></style>
<?php> echo '<head><link rel="stylesheet" type="text/css" href="main.css"></head>'; ?>
<?php> include('main.css'); ?>*/

#checking for connection
$servername="localhost";
$username="root";
$password="sneha123";
$dbname="userregistration";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
$sql="SELECT * FROM cart1";
$sq="SELECT itemname FROM cart1";
$result=mysqli_query($conn,$sql);

$tamt=0;
$sq2="SELECT * FROM cart1";
$result1=mysqli_query($conn,$sq2);
echo "<center><h1>MY CART</h1></center>";
echo "<center><table>
		<tr>
		<th>item name<br/><br/></th>
		<th>cost<br/><br/></th>
		<th>quantity<br/><br/></th>
		<th>total<br/><br/></th>
		</tr></center>";
while($row= mysqli_fetch_assoc($result1))
	{
		$tamt=$tamt+$row["total"];
		echo "<tr>
			<td><br/>".$row["itemname"]."</td>
			<td>".$row["cost"]."</td>
			<td>".$row["quantity"]."</td>
			<td>".$row["total"]."</td>
			</tr>";
	}
echo "<br/><b style='font-size:20px'>total cost is:<b>".$tamt;
echo "<br/><input class='button button3'onclick='history.go(-1)' type='button' value='keep shopping'/>";
mysqli_close($conn);
?>
<input class='button button3' onclick='location.href="payment.html"' type='button' value='order now' />
</body>
</html>