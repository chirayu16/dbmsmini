<?php
session_start();
	$msg = $nameErr = $snameErr = $phoneErr = $emailErr = $addErr = $passErr = "";
	if (isset($_POST["submit"])) {
		if (isset($_POST["name"]) && !empty($_POST["name"])) {
				if (preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
					$_SESSION['name'] = $_POST["name"];
				}else{
					$nameErr = "Only Charaters are allowed";
				}
			}
			else{
				$nameErr = "Name is required";
			}

			if (isset($_POST["sname"]) && !empty($_POST["sname"])) {
				if (preg_match("/^[a-zA-Z ]*$/",$_POST["sname"])){
					$_SESSION['sname'] = $_POST["sname"];
				}else{
					$snameErr = "Only Charaters are allowed";
				}
			}
			else{
				$snameErr = "Surame is required";
			}
			if (isset($_POST["phonen"]) && !empty($_POST["phonen"])) {
				 if(strlen($_POST["phonen"]) == "10" && preg_match("/^[0-9]*$/", $_POST["phonen"])){
					$_SESSION['phonen'] = $_POST["phonen"];
				}else{
					$phoneErr = "characters not allowed";
				}
			}
			else{
				$phoneErr = "fill the phone details";
			}
			if (isset($_POST["email"]) && !empty($_POST["email"])) {
				if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
					$_SESSION['email'] = $_POST["email"];
			    }else{
					$emailErr = "Invalid email format"; 
				}
			}
			else{
				$emailErr = "E-mail is required";
			}
			if (isset($_POST["address"]) && !empty($_POST["address"])) {
				$_SESSION['address'] = $_POST["address"];
			}else{
				$addErr = "Address is required";
			}
			if (isset($_POST["gender"]) && !empty($_POST["gender"])) {
				$_SESSION['gender'] = $_POST["gender"];
			}
			if (isset($_POST["pass"]) && !empty($_POST["pass"])) {
				if (strlen($_POST['pass']) >= "5") {
					if ($_POST['pass'] != $_POST['pass2']) {
					  	$msg = "Your Password Doesn't Match";
					  }else{
							$_SESSION['pass'] = $_POST["pass"];
 						}
					}else{
						$passErr = "Password is More then 5 charaters";
					}
			  } 
			  else{
				  $passErr = "Password is required";
			}
			if (isset($_SESSION['name']) && isset($_SESSION['sname']) && isset($_SESSION['phonen']) && isset($_SESSION['address']) && isset($_SESSION['email']) && isset($_SESSION['pass']) && isset($_SESSION['gender']) ) {
				header("location:inventory.php");
			}
		  
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Registration - Gold Loan Management System</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
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
		#form1, #form2{
			float: left;
			width: 50%;
			height: 350px;
			font-size: 20px;
			background-color: #E6E6FA; 
			padding-top: 100px;
		}
		#form1{
			float: left; 
			text-align: center;
		}
		#form2{
			float: right;
			text-align: center;
		}
		#label{
			float: left;
			margin-left: 200px;
		}
		#input{
			width: 300px;
			height: 30px;
			margin-left: 10px;
		}
		#sub{
			text-align: center;
			background-color: #E6E6FA;
		}
		#sub2{
			width: 25%;
			height: 50px;
			border-radius: 8px;
			border: 1px solid #3CB371;
			background-color: #3CB371;
			font-size: 20px;
			color: white;
			text-align: center;
		}
		#sub2:hover{
			box-shadow: 5px 5px 20px 3px gray;
		}
		#error{
			text-align: center;
			background-color: #E6E6FA;
			font-size: 20px;
			color: black;
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
				Customer Registration Form<br>
			</div>
		</div>
	</div>
	<div class="main hr">
		<div class="sub">
			<div id="head2">
				<img src="../images/s4.jpg">
			</div>
		</div>
	</div>
	<div class="main hr">
		<div class="sub">
			<div id="head">Personal Information</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<fieldset>
					<div id="form1">
						<labal id="label">Name<span>*<?php echo $nameErr; ?></span></labal> <br>
						<input id="input" type="text" name="name"><br>
						<labal id="label">Last name<span>*<?php echo $snameErr; ?></span></labal><br>
						<input id="input" type="text" name="sname"><br>
						<labal id="label">Phone No<span>*<?php echo $phoneErr; ?></span></labal><br>
						<input id="input" type="text" name="phonen"><br>
						<labal id="label">Address<span>*<?php echo $addErr; ?></span></labal><br>
						<input id="input" type="text" name="address"><br>
						<labal id="label">Gender<span>*</span></labal><br>
							<select id="input" name="gender">
								<option  value="male">Male.</option>
								<option  value="female">Female.</option>
							</select><br>
							<br>
					</div>
					<div id="form2">
						<labal id="label">E-mail<span>*<?php echo $emailErr; ?></span></labal><br>
						<input id="input" type="text" name="email"><br>
						<labla id="label">Password<span>*<?php echo $passErr; ?></span></labla><br>
						<input id="input" type="password" name="pass"><br>
						<labla id="label">Confirm Password<span>*</span></labla><br>
						<input id="input" type="password" name="pass2"><br>
					</div>
					<div id="sub">
					<span id="error" ><?php echo $msg; ?></span>
					</div>
					<div id="sub">
						<input id="sub2" type="submit" name="submit" value="submit"><br>
						<a href="logincust.php">Login</a>
					</div>

			</form>
		</div>
	</div>
	<?php include("../footer.php"); ?>
</body>
</html>