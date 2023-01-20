<?php
session_start();
	$conn = mysqli_connect("localhost","root","","goldloan");
	$email = $pass = $msg = $msg2 = "";
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		if (isset($_POST['ecode']) && isset($_POST['pass']) && !empty($_POST['ecode']) && !empty($_POST['pass'])) {
			
			$ecode = $_POST['ecode'];
			$pass = $_POST['pass'];
			$query = "SELECT id, name, surname, phone, gender, workarea, email, role, basicsalary, da, ta, totalsalary, password FROM `employee` WHERE id = '$ecode' AND  password = '$pass'";
			$result = mysqli_query($conn, $query);
			$user = mysqli_fetch_assoc($result);

			if ($user['password'] == $pass && $user['id'] == $ecode) {
					if($user > 0) {
						$_SESSION['ecode'] = $user['id'];
						$_SESSION['sname'] = $user['surname'];
						$_SESSION['phonen'] = $user['phone'];
						$_SESSION['email'] = $user['email'];
						$_SESSION['name'] = $user['name'];
						$_SESSION['gender'] = $user['gender'];
						$_SESSION['pass'] = $user['password'];
						$_SESSION['workarea'] = $user['workarea'];
						$_SESSION['role'] = $user['role'];
						$_SESSION['bsal'] = $user['basicsalary'];
						$_SESSION['da'] = $user['da'];
						$_SESSION['ta'] = $user['ta'];
						$_SESSION['tsal'] = $user['totalsalary'];
						header("location: payroll/elogin.php");

					}
				}else{
					$msg =  "Wrong password/Employee Code";
				
				}
			}
			else{
				$msg2 = "Plase enter email/password";
			}
		}
	
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Employee Payroll - Gold Loan Management Loan</title>
		<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.main1{
			width: 100%;
		}
		.sub1{
			width: 90%;
			margin: 0 auto;
		}
		.hr1{
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
	<?php include("header.php"); ?>
	<div class="main1">
		<div id="login">
			<div id="head1">
				Employee Login
			</div>
			<div id="l_main">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<strong><?php echo $msg2; ?></strong><br><br><br>
					<p> Employee Code<span>*</span> </p><input id="input" type="text" name="ecode"><br><br>
					<p> Password<span>*</span> </p><input id="input" type="password" name="pass"><br><br><br>
					<strong><?php echo $msg; ?></strong>
					<br><br><br><br>
					<div id="button">
					<input id="log_in" type="submit" name="submit" value="Log in">
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include("footer.php"); ?>

</body>
</html>