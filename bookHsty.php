<?php
session_start();
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
require('firstimport.php');

$tbl_name="ticket";

mysqli_select_db($conn,"$db_name") or die("cannot select db");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Find Train </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
</head>
<body>
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))
			 {
			 echo $_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 ?>
			
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="booking.php">BOOK TICKET</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="bookHsty.php">BOOKING HISTORY</a>
				</div>
			</div>
		</div>
		

<!-- display result -->
		<div class="span12 well">
			<div class="display" >
				<table class="table" border="1px">
				<tr>
					<th style="width:60px;border-top:0px;"> Train No.</th>
					<th style="width:100px;border-top:0px;"> Name </th>
					<th style="width:5px;border-top:0px;"> age </th>
					<th style="width:5px;border-top:0px;"> sex </th>
					<th style="width:110px;border-top:0px;"> address </th>
					<th style="width:65px;border-top:0px;"> adhaar No </th>
					<th style="width:50px;border-top:0px;"> mobile No </th>
				
					<th style="width:29px;border-top:0px;"> cancel </th>
				</tr>
				<?php
						$uname=$_SESSION['name'];
						$sql="select * from `ticket` where email='$uname'";
						$result=mysqli_query($conn,$sql);
						if($result){
							while($row=mysqli_fetch_assoc($result)){
								$Tno=$row['trainNo'];
								$fname=$row['name'];
								$gender=$row['sex'];
								$address=$row['address'];
								$adrno=$row['adhaarNo'];
								$age=$row['Age'];
								$mobile=$row['mobileNo'];
								echo '<tr>
								<td>'.$Tno.'</td>
								<td>'.$fname.'</td>
								<td>'.$age.'</td>
								<td>'.$gender.'</td>
								<td>'.$address.'</td>
								<td>'.$adrno.'</td>
								<td>'.$mobile.'</td>
								<td><a href="cancel.php?deleteid='.$adrno.'"><input type="button" value="cancel Ticket" class="btn btn-danger"></a></button></td>
								</tr>';
							}
						}
					?>
				</table>
			</div>
			
		</div>
	</div>
</body>
</html>
