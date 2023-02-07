<?php
session_start();

if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost","root","","railwayProject");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}

$tbl_name="users"; // Table name
$uname=$_POST['email'];
$pass=$_POST['psd'];

$sql="SELECT * FROM $tbl_name WHERE email='$uname' and password='$pass';";
echo "$sql";

$result=mysqli_query($conn,$sql) ;

$user = mysqli_fetch_assoc($result);


if(!empty($user))
{
	$_SESSION['name'] = $uname; 
	echo " ....   LOGIN  ....";
	echo $_SESSION['name'];
	header('Location:index.php');
}
else
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("Location:login1.php");
}
}
?>
