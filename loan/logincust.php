<?php

	$conn = mysqli_connect("localhost","root","","goldloan");
	$email = $pass = "";
	
	if (isset($_POST['submit'])) {

		if (isset($_POST['email']) && isset($_POST['pass'])) {
			
			$email = $_POST['email'];
			$pass = $_POST['pass'];

		}
			$query = "SELECT id, firstname, lastname, mobile, email, address, gender, password, ornaments, weight, purity, loan, interest, monthinterest FROM `customer` WHERE email = '$email' AND password = '$pass'";
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
						echo $_SESSION['name'];
					}
				}else{
					echo "Wrong password/Email";
				}
		}
	

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
			width: 40%;
			margin: 0 auto;
		}
		#login{
			height: 300px;
			border: 1px solid #F5F5F5;
		}
		#head{
			height: 100px;
			line-height: 100px;
			font-size: 40px;
			text-align: center;
			background-color: #F5F5F5;
			color : #606060;
		}
		#l_main{
			padding: 10px;
			margin-left: 30px;
		}
		#l_main p{
			color: green;
			font-size: 20px;
		}
		#input{
			width: 90%;
			height: 20px;
		}
		#log_in{
			width: 30%;
			margin-left: 0px;
			margin-right: 0px;
			height: 30px;
		}
	</style>
</head>
<body>
	<div class="main">
		<div class="sub" id="login">
			<div id="head">
				Login
			</div>
			<div id="l_main">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<p> E-mail </p><input id="input" type="text" name="email"><br><br>
					<p> password </p><input id="input" type="password" name="pass"><br><br>
					<input id="log_in" type="submit" name="submit" value="Log in">
				</form>
			</div>
		</div>
	</div>

</body>
</html>