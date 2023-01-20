<?php
session_start();
	$msg = $nameErr = $snameErr = $phoneErr = $emailErr = $passErr = $bsalErr = $daErr = $taErr = $ecodeErr = "";
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
			if (isset($_POST["gender"]) && !empty($_POST["gender"])) {
				$_SESSION['gender'] = $_POST["gender"];
			}
			if (isset($_POST["area"]) && !empty($_POST["area"])) {
				$_SESSION['area'] = $_POST["area"];
			}
			if (isset($_POST["assignedUsers"]) && !empty($_POST["assignedUsers"])) {
				$_SESSION['assignedUsers'] = $_POST["assignedUsers"];
			}
			if (isset($_POST["role"]) && !empty($_POST["role"])) {
				$_SESSION['role'] = $_POST["role"];
			}
			if (isset($_POST["pass"]) && !empty($_POST["pass"])) {
				if (strlen($_POST['pass']) >= "5") {
						$_SESSION['pass'] = $_POST["pass"];
					}else{
						$passErr = "Password is More then 5 charaters";
					}
			  } 
			  else{
				  $passErr = "Password is required";
			}
			if (isset($_POST["ecode"]) && !empty($_POST["ecode"])) {
				 if(preg_match("/^[0-9]*$/", $_POST["ecode"])){
					$_SESSION['ecode'] = $_POST["ecode"];
				}else{
					$ecodeErr = "characters not allowed";
				}
			}
			else{
				$ecodeErr = "Employee code is required";
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
			if (isset($_POST["bsal"]) && !empty($_POST["bsal"])) {
				 if(preg_match("/^[0-9]*$/", $_POST["bsal"])){
					$_SESSION['bsal'] = $_POST["bsal"];
				}else{
					$bsalErr = "characters not allowed";
				}
			}
			else{
				$bsalErr = "fill the salary details";
			}
			if (isset($_POST["da"]) && !empty($_POST["da"])) {
				 if(preg_match("/^[0-9]*$/", $_POST["da"])){
					$_SESSION['da'] = $_POST["da"];
				}else{
					$daErr = "characters not allowed";
				}
			}
			else{
				$daErr = "fill the DA details";
			}
			if (isset($_POST["ta"]) && !empty($_POST["ta"])) {
				 if(preg_match("/^[0-9]*$/", $_POST["ta"])){
					$_SESSION['ta'] = $_POST["ta"];
				}else{
					$taErr = "characters not allowed";
				}
			}
			else{
				$taErr = "fill the TA details";
			}
			if (isset($_SESSION['name']) && isset($_SESSION['sname']) && isset($_SESSION['assignedUsers']) && isset($_SESSION['area']) && isset($_SESSION['email']) && isset($_SESSION['pass']) && isset($_SESSION['gender']) && isset($_SESSION['da']) && isset($_SESSION['ta']) && isset($_SESSION['bsal']) && isset($_SESSION['role']) && isset($_SESSION['ecode']) && isset($_SESSION['phonen'])) {
				$_SESSION['tsal'] = $_SESSION['da'] + $_SESSION['ta'] + $_SESSION['bsal'];
				$ecode = $_SESSION['ecode'];
				$name = $_SESSION['name'];
				$sname = $_SESSION['sname'];
				$area = $_SESSION['area'];
				$email = $_SESSION['email'];
				$pass = $_SESSION['pass'];
				$gender = $_SESSION['gender'];
				$da = $_SESSION['da'];
				$ta = $_SESSION['ta'];
				$tsal = $_SESSION['tsal'];
				$role = $_SESSION['role'];
				$bsal = $_SESSION['bsal'];
				$phonen = $_SESSION['phonen'];
				$customer = $_SESSION['assignedUsers'];

				$conn = mysqli_connect("localhost","root","","goldloan");

				$sql = "INSERT INTO `employee`(`id`, `name`, `surname`, `phone`, `gender`, `workarea`, `email`, `role`, `basicsalary`, `da`, `ta`, `totalsalary`, `password`, `customer`) VALUES ('$ecode','$name','$sname','$phonen','$gender','$area','$email','$role','$bsal','$da','$ta','$tsal','$pass', '$customer')";

				$result = mysqli_query($conn, $sql);
				if($result)
				{
					$msg = "Data inserted successfully";
					session_destroy();
				}else{
					$msg = mysqli_error($conn);
				}
			}
		  
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Registration - Admin Section</title>
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
			height: 500px;
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
				Employee Registration<br>
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
			<div id="head">Employee Details</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<fieldset>
					<div id="form1">
						<labal id="label">Name<span>*<?php echo $nameErr; ?></span></labal> <br>
						<input id="input" type="text" name="name"><br>
						<labal id="label">Surname<span>*<?php echo $snameErr; ?></span></labal><br>
						<input id="input" type="text" name="sname"><br>
						<labal id="label">Employee Code<span>*<?php echo $ecodeErr; ?></span></labal><br>
						<input id="input" type="text" name="ecode"><br>
						<labal id="label">Phone Number<span>*<?php echo $phoneErr; ?></span></labal><br>
						<input id="input" type="text" name="phonen"><br>
						<labal id="label">Gender<span>*</span></labal><br>
							<select id="input" name="gender">
								<option  value="male">Male.</option>
								<option  value="female">Female.</option>
							</select><br>
						<labal id="label">Work Area<span>*</span></labal><br>
							<select id="input" name="area">
								<option  value="Dehli">Dehli.</option>
								<option  value="Mumbai">Mumbai.</option>
								<option  value="Pune">Pune.</option>
								<option  value="Chennai">Chennai</option>
								<option  value="Goa">Goa</option>
							</select><br>
						<label id=label>Assigned Customers<span>*</span></label></br>
						<?php
							$conn = mysqli_connect("localhost","root","","goldloan");
							$sql = "SELECT * FROM customer";

							$all_users = mysqli_query($conn, $sql);  
							?>
						<select id="input" name="assignedUsers">
							<?php
								while ($user = mysqli_fetch_assoc($all_users)):;
							?>

								<option value="<?php echo $user['firstname'];?>">
								<?php echo $user['firstname'];?>
								</option>
								<?php
									endwhile;
								?>
						</select>
						<br>
					</div>
					<div id="form2">
						<labal id="label">E-mail<span>*<?php echo $emailErr; ?></span></labal><br>
						<input id="input" type="text" name="email"><br>
						<labal id="label">Role<span>*</span></labal><br>
							<select id="input" name="role">
								<option  value="Senior_manager">Senior_manager</option>
								<option  value="Head_of_department">Head_of_department</option>
								<option  value="branch_managere">branch_manager</option>
								<option  value="officer">officer</option>
								<option  value="junior_assistant">junior_assistant</option>
								<option  value="staff">staff</option>
								<option  value="pieon">pieon</option>
							</select><br>
						<labla id="label">Basic Salary<span>*<?php echo $bsalErr; ?></span></labla><br>
						<input id="input" type="text" name="bsal"><br>
						<labla id="label">Dearness Allowance<span>*<?php echo $daErr; ?></span></labla><br>
						<input id="input" type="text" name="da"><br>
						<labla id="label">Travelling Allowance<span>*<?php echo $taErr; ?></span></labla><br>
						<input id="input" type="text" name="ta"><br>
						<labla id="label">Password<span>*<?php echo $passErr; ?></span></labla><br>
						<input id="input" type="password" name="pass"><br>
						
					</div>
					<div id="sub">
					<span id="error" ><?php echo $msg; ?></span>
					<br><br>
					</div>
					<div id="sub">
						<input id="sub2" type="submit" name="submit" value="submit">
					</div>
			</form>
		</div>
	</div>

	<?php include("../footer.php"); ?>
</body>
</html>