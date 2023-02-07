<?php
session_start();
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
require('firstimport.php');


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
		
		<!-- registration form -->
		<div align="center">
		<div class="span12 well">
		<div style="font-size:30px;"> BOOK TICKET</div>
		<br/>
		
		
		<div class="table">
		
		<form name="bookTicket"  method="post" action="bookphp.php" onsubmit="return valid12()">
		<table>
		<tr>
			<td style="border-top	:0px;">email </td>
			<td style="border-top:0px;"><input type="text" name="uname" value="<?php echo $_SESSION['name'] ?>" class="input-block-level" readonly><span id="fn"></span></td>
		</tr>
		<tr>
			<td style="border-top	:0px;">Train No <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="trainNo" class="input-block-level" placeholder="Enter the train number"><span id="fn"></span></td>
		</tr>
		<tr>
			<td style="border-top	:0px;">Name <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="fname" class="input-block-level" placeholder="Enter the First name" onblur="return name1()"><span id="fname"></span></td>
		</tr>
				<tr>
			<td style="border-top:0px;"> Gender <font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="gnd">
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
			    </select>
			</td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> address <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" class="input-block-level" name="adrs" placeholder="Enter the address" > <span id="adrs" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> adhaar No <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" class="input-block-level" name="adrno" placeholder="Enter the adhaar Number" > <span id="adrno" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> age <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" class="input-block-level input-medium"  name="age"> </td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Mobile No. <font color=red>*</font> </td>
			<td style="border-top:0px;"> +91 <input type="text" class="input-block-level"  name="mobile" placeholder="" onblur="return mobile1()"> <span id="mn"></span></td>
		</tr>
			<td style="border-top:0px;"><input class="btn btn-info" type="submit" value="submit" id="subb" name="submit"></td>
			<td style="border-top:0px;"><input class="btn btn-info" type="reset" value="Reset"></td>
		</tr>
		
		</table>
		</form>
		</div>
		</div>
		</div>			
	</div>
</body>
</html>
