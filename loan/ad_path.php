<?php
$conn = mysqli_connect("localhost","root","","goldloan");
$msg2 = $msg =""; 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['user']) && isset($_POST['pass']) && !empty($_POST['user']) && !empty($_POST['pass'])) {
		
		$username = $_POST['user'];
		$pass = $_POST['pass'];
		$query = "SELECT `username`, `password` FROM `admin` WHERE  `username` = '$username' AND `password` = '$pass'";



		$result = mysqli_query($conn,$query);
		$user = mysqli_fetch_assoc($result);


			if ($user['password'] == $pass && $user['username'] == $username) {
					if($user > 0) {
				header("location:admin/set_gr.php");
				}
			}else{
				$msg = "Invalid username/password";

			}
	}
	else{
		$msg = "Please fill all the details";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Section - Gold Loan Management System</title>
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
				Admin Login
			</div>
			<div id="l_main">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<strong><?php echo $msg2; ?></strong><br><br><br>
					<p> Username<span>*</span> </p><input id="input" type="text" name="user"><br><br>
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