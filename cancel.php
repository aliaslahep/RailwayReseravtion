<?php
include 'firstimport.php';
	
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	$sql="delete from `ticket` where adhaarNo='$id'";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("location:bookHsty.php");
	}
	//dd()
}	

?>
