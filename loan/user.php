<?php

	$conn = mysqli_connect("localhost","root","","goldloan") or die(mysql_error());
session_start();
/*$_SESSION['name'] = "manish";
$_SESSION['sname'] = "kini";
$_SESSION['phonen'] = "7506074086";
$_SESSION['email'] = "manishkini19@gmail.com";
$_SESSION['address'] = "Manik niwas, charkop village, kandiwali west, mumbai 400067";
$_SESSION['gender'] = "male";*/
	if (isset($_SESSION['name'])) {
		$name = $_SESSION['name'];
	}
	if (isset($_SESSION['sname'])) {
		$sname = $_SESSION['sname'];
	}
	if (isset($_SESSION['phonen'])) {
		$mno = $_SESSION['phonen'];
	}
	if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
	}
	if (isset($_SESSION['address'])) {
		$add = $_SESSION['address'];
	}
	if (isset($_SESSION['gender'])) {
		$gender = $_SESSION['gender'];
	}
	if (isset($_SESSION['pass'])) {
		$pass = $_SESSION['pass'];
	}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST['ornaments'])) {
			$ornaments = $_POST['ornaments'];
			$_SESSION['ornaments'] = $ornaments;
		}
		if(isset($_POST["weight"])){
			$weight = $_POST["weight"];
			$_SESSION['weight'] = $weight;
		}
		if(isset($_POST["purity"])){
			$purity = $_POST["purity"];
			$_SESSION['purity'] = $purity;

			if($_SESSION['purity'] == 18){
			$bint = $weight * $r = 1900;
			$_SESSION['bint'] = $bint;
			}
			elseif($_SESSION['purity']==22){
			#before interest
			$bint = $weight * $r = 2100;
			$_SESSION['bint'] = $bint;
			}
			elseif($_SESSION['purity']==24){
			#before interest
			$bint = $weight * $r = 2300;
			$_SESSION['bint'] = $bint;
			}
		if(isset($_SESSION['bint'])){

		$loan = $_SESSION['bint'];
		$_SESSION['loan'] = $loan;

			if ($_SESSION['loan'] <= "50000"){
				$interest = (($loan * 19)/100);
				$_SESSION['interest'] = $interest;
				$m_int = ($interest / 3);
				$m_int = number_format($m_int, 2, '.', '');
				$_SESSION['m_int'] = $m_int;
			}
			elseif ($_SESSION['loan'] <= "100000" && $_SESSION['loan'] > "50000"){
				$interest = (($loan * 15)/100);
				$_SESSION['interest'] = $interest;
				$m_int = ($interest / 3);
				$m_int = number_format($m_int, 2, '.', '');
				$_SESSION['m_int'] = $m_int;
			}
			elseif($_SESSION['loan'] >= "100000"){
				$interest = (($loan * 11)/100);
				$_SESSION['interest'] = $interest;
				$m_int = ($interest / 3);
				$m_int = number_format($m_int, 2, '.', '');
				$_SESSION['m_int'] = $m_int;
			}
		}
	}
/*	$sql = "INSERT INTO `customer`(`firstname`, `lastname`, `mobile`, `email`, `address`, `gender`, `password`, `ornaments`, `weight`, `purity`, `loan`, `interest`, `monthinterest`) VALUES ('$name','$sname','$mno','$email','$add','$gender','$pass','$ornaments','$weight','$purity','$loan','$interest','$m_int')";

	$run = mysqli_query($conn, $sql);

	if ($run == TRUE) {
		echo "Data inserted seccsessfully..";
	}else{
		echo "Error";
	}*/
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Print Your Document</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.main{
			width: 100%;
		}
		.menucolor{
			background-color: #FFA500;
		}
		.menu{
			width: 75%;
			margin: 0 auto;
			font-size: 20px;
			height: 50px;
			line-height: 50px;
		}
		#leftmenu{
			float: left;
			width: 50%;
		}
		#leftmenu ul{
			list-style: none;
			text-align: left;
		}
		#leftmenu ul li{
			display:inline-block;
			position:relative;
			width: 40%;
			text-align: center;
		}
		#leftmenu ul li a{
			display: block;
			text-decoration: none;
			color: #E0FFFF;
		}
		#leftmenu ul li a:hover{
			background-color: green;
			border-radius: 7px;
		}
		#rightmenu{
			float: right;
			width: 45%;
		}
		#rightmenu ul{
			list-style: none;
			text-align: right;
		}
		#rightmenu ul li{
			display: inline-block;
			position: relative;
			text-align: center;
			width: 30%;
			color: #191970;
		}
		#rightmenu ul li a{
			display: block;
			text-decoration: none;
			color: #E0FFFF;
		}
		#rightmenu ul li a:hover{
			background-color: green;
			border-radius: 7px;
		}
		.clear{
			clear: both;
		}
		.dashboard{
			width: 75%;
			margin: 0 auto;
			background-color: #F5F5F5;
			color: #606060;
			height: 700px;
		}
		#heading{
			color: #F80000;
			text-align: center;
			height: 50px;
			line-height: 50px;
		}
		#details{
			margin-left: 40px;
			font-size: 30px;
			line-height: 50px;
			text-align: left;
		}
	</style>
</head>
<body>
	<div class="main menucolor">
		<div class="menu">
			<div id="leftmenu">
				<ul>
					<li><a href="user.php">Personal Information</a></li>
					<li><a href="account.php">Account Details</a></li>
				</ul>
			</div>
			<div id="rightmenu">
				<ul>
					<li>Welcome <?php echo $_SESSION['name']; ?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class="clear">
			</div>
		</div>
	</div>

	<div class="main">
		<div class="dashboard color">
			<h1 id="heading">Gold Loan Management System</h1>
			<hr style="color: #686868;">
			<h1 style="color: #484848; font-size: 40px; margin-left: 20px;">Personal Details - </h1>
			<div id="details">
				<br>
			<b>Name     :-</b><?php echo " ".$_SESSION['name']." ".$_SESSION['sname']."."; ?><br>
			<b>Address  :-</b><?php echo " ".$_SESSION['address'].""; ?><br>
			<b>Phone No :-</b><?php echo " ".$_SESSION['phonen']." "; ?><br>
			<b>E-mail   :-</b><?php echo " ".$_SESSION['email']." "; ?><br>
			<b>gender   :-</b><?php echo " ".$_SESSION['gender']." "; ?>
			</div>
		</div>
	</div>



</body>
</html>