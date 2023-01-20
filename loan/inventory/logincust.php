<?php
session_start();
	$conn = mysqli_connect("localhost","root","","goldloan");
	$email = $pass = $msg = $msg2 = "";
	
	if (isset($_POST['submit'])) {

		if (isset($_POST['email']) && isset($_POST['pass']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
			
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$query = "SELECT id, firstname, lastname, mobile, email, address, gender, password, ornaments, weight, purity, loan, interest, monthinterest, goldrate, paidloan, remening_loan FROM `customer` WHERE email = '$email' AND password = '$pass'";
			$result = mysqli_query($conn, $query);
			$user = mysqli_fetch_assoc($result);

			if ($user['password'] == $pass && $email == $user['email']) {
					if($user > 0) {
						$_SESSION['name'] = $user['firstname'];
						$_SESSION['sname'] = $user['lastname'];
						$_SESSION['phonen'] = $user['mobile'];
						$_SESSION['email'] = $user['email'];
						$_SESSION['address'] = $user['address'];
						$_SESSION['gender'] = $user['gender'];
						$_SESSION['pass'] = $user['password'];
						$_SESSION['ornaments'] = $user['ornaments'];
						$_SESSION['weight'] = $user['weight'];
						$_SESSION['purity'] = $user['purity'];
						$_SESSION['loan'] = $user['loan'];
						$_SESSION['interest'] = $user['interest'];
						$_SESSION['m_int'] = $user['monthinterest'];
						$_SESSION['paidloan'] = $user['paidloan'];
						$_SESSION['goldrate'] = $user['goldrate'];
						$_SESSION['remloan'] = $user['remening_loan'];
						header("location: user.php");

					}
				}else{
					$msg =  "Wrong password/Email";
				}
			}
			else{
				$msg2 = "Plase enter email/password";
			}
		}
		mysqli_close($conn);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.main{
			width: 100%;
		}
		.sub{
			width: 90%;
			margin: 0 auto;
		}
		.hr{
			background-color: #E8E8E8;
			border: 1px solid #E8E8E8;
		}
		#login{
			height: 500px;
			border: 1px solid #b30000;
			width: 30%;
			margin: 0 auto;
		}
		#head{
			background-color: #b30000;
			height: 50px;
			text-align: center;
			color: white;
			line-height: 50px;
			font-size:  25px;
		}
		#head2 img{
			width: 100%;
			height: 300px;
		}
		#head1{
			background-color: #b30000;
			height: 50px;
			text-align: center;
			color: white;
			line-height: 50px;
			font-size:  25px;
		}
		#l_main{
			padding: 10px;
			margin-top: 50px;
			text-align: center;
		}
		#l_main p{
			color: green;
			font-size: 20px;
		}
		#input{
			width: 50%;
			height: 30px;
		}
		#button{
			display: block;
		}
		#log_in{
			width: 30%;
			height: 50px;
			color: white;
			background-color: green;
			border: 1px solid green;
			margin: 0 auto;
			
		}
		#log_in:hover{
			box-shadow:5px 7px 15px 5px gray;
		}
		p{
			text-align: left;
			margin-left: 110px;
		}
		span{
			color: red;
		}
	</style>
</head>
<body>
	<div class="main hr">
		<div class="sub">
			<div id="head">
				Customer Login
			</div>
		</div>
	</div>
	<div class="main hr">
		<div class="sub">
			<div id="head2">
				<img src="../images/s3.jpg">
			</div>
		</div>
	</div>
	<div class="main">
		<div id="login">
			<div id="head1">
				Login Details
			</div>
			<div id="l_main">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<strong><?php echo $msg2; ?></strong><br><br><br>
					<p> E-mail<span>*</span> </p><input id="input" type="text" name="email"><br><br>
					<p> Password<span>*</span> </p><input id="input" type="password" name="pass"><br><br><br>
					<strong><?php echo $msg; ?></strong>
					<br><br><br><br>
					<div id="button">
					<input id="log_in" type="submit" name="submit" value="Log in"><br>
					<a href="rcustomer.php">Register</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include("../footer.php"); ?>
</body>
</html>