<?php

session_start();
include 'firstimport.php';

if(isset($_SESSION['name'])){
}
else{
	header("location:login1.php");
		
}
if(isset($_POST['submit'])){
	$Tno=$_POST['trainNo'];
	$uname=$_POST['uname'];
	$fname=$_POST['fname'];
	$gender=$_POST['gnd'];
	$address=$_POST['adrs'];
	$adhaarNo=$_POST['adrno'];
	$age=$_POST['age'];
	$mobile=$_POST['mobile'];



	$sql="INSERT INTO `ticket` (adhaarNo,email,trainNo,name,Age,sex,address,mobileNo) VALUES('$adhaarNo','$uname','$Tno','$fname','$age','$gender','$address','$mobile')";

	$result=mysqli_query($conn,$sql);
	if($result){
		$_SESSION['name'] = $uname; 
		header("location:booking.php");
	}
	else{
		die(mysqli_error($conn));
	}
}

?>
