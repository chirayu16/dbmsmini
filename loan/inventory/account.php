<?php
session_start();
$conn = mysqli_connect("localhost","root","","goldloan") or die(mysql_error());
$msg = "";
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
		if (isset($_SESSION['ornaments'])) {
			$ornaments = $_SESSION['ornaments'];
		}
		if(isset($_SESSION['weight'])){
			$weight = $_SESSION['weight'];
		}
		if(isset($_SESSION['purity'])){
			$purity = $_SESSION['purity'];
		}
		if(isset($_SESSION['loan'])){
			$purity = $_SESSION['loan'];
		}

		if(isset($_SESSION['interest'])){
			$purity = $_SESSION['interest'];
		}

		if(isset($_SESSION['m_int'])){
			$purity = $_SESSION['m_int'];
		}
		if (isset($_SESSION['paidloan'])) {
			$paidloan = $_SESSION['paidloan'];
		}
		if (isset($_SESSION['goldrate'])) {
			$goldrate = $_SESSION['goldrate'];
		}
		if (isset($_SESSION['remloan'])) {
			$remloan = $_SESSION['remloan'];
		}
		if (isset($_SESSION[''])) {
			# code...
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
			if (isset($_POST['pl']) && !empty($_POST['pl'])) {
				if (preg_match("/^[0-9]*$/", $_POST['pl'])) {
					if ($_POST['pl'] <= $_SESSION['remloan']) {
						$_SESSION['paidloan'] = $_SESSION['paidloan'] + $_POST['pl'];
						$paidloan = $_SESSION['paidloan'];
						$_SESSION['remloan'] = $_SESSION['remloan'] - $_POST['pl'];
						$remloan = $_SESSION['remloan'];
						$sql = "UPDATE `customer` SET `paidloan`=$paidloan,`remening_loan`=$remloan WHERE email = '$email' AND password = '$pass'";
						$run = mysqli_query($conn, $sql);

						if ($run == TRUE) {
							$msg = "Amount paid succsessfully ".$_POST['pl']."₹/-";
						}else{
							echo "Error : ".mysqli_error($conn)."";
						}
					}else{
						$msg = "Entered amount is Invalid"; 
					}
				}else{
					$msg = "Invalid input, Characters not allowed";
				}
			}else{
				$msg = "Please Enter amount in box";
			}
		}

		mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Details - Gold Loan Management System</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.main{
			width: 100%;
		}
		.sub{
			width: 50%;
			margin: 0 auto;
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
			color: #191970;
			width: 200px;
		}
		#rightmenu ul li:hover{
			animation: name 5s infinite;
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
			height: 600px;
		}
		#heading{
			color: #F80000;
			text-align: center;
			height: 50px;
			line-height: 50px;
		}
		#details{
			margin-left: 240px;
			font-size: 30px;
			line-height: 50px;
			text-align: left;
		}
		@keyframes name{
		0%{color: #0000FF;}
		17%{color: #00FF00;}
		34%{color: #FFFF00;}
		51%{color: #FF7F00;}
		68%{color: #FF0000;}
		85%{color: #9400D3;}
		100%{color: #4B0082;}
		}
		td{
			padding-left:  20px;
		}
		b{
			color: #DAA520;
		}
		#style{
			font-style: italic;
			font-family: Comic Sans MS;
		}
		#interest{
			margin-left: 240px;
			font-size: 30px;
			line-height: 50px;
			text-align: left;
		}
		#text{
			width: 200px;
			height: 30px;
			font-size: 20px;
			font-family: Comic Sans MS;
			font-size: 25px;
			border:1px solid green;
		}
		#text:hover{
			border:1px solid #00FF00;
		}
		#input{
			width: 30%;
			margin: 0 auto;
			height: 40px;
			font-family: Comic Sans MS;
			font-size: 25px;
			background-color: green;
			color: white;
			border:1px solid green;
		}
		#input:hover{
			box-shadow:5px 7px 15px 5px gray;
		}
	</style>
	<script type="text/javascript">
                function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
    </script>
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
					<li>Welcome <?php echo $name; ?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class="clear">
			</div>
		</div>
	</div>
	<div class="main">
		<div class="dashboard color">
			<h1 style="color: #484848; font-size: 40px; margin-left: 20px; padding: 20px;"><u>Account Details -</u></h1>
			<div id="details">
				<br>
				<table>
					<tr>
					<td><b>Ornament Type</b></td><td>:-</td><td id="style"><?php echo "<u>".$_SESSION['ornaments'].".</u>"; ?><br></td>
					</tr>
					<tr>
					<td><b>Gold Purity</b><td>:-</td></td><td id="style"><?php echo "<u>".$_SESSION['purity']."</u> Carat."; ?><br></td>
					</tr>
						<tr>
					<td><b>Gold Weight</b><td>:-</td></td><td id="style"><?php echo "<u>".$_SESSION['weight']."</u> Grams."; ?><br></td>
					</tr>
						<tr>
					<td><b>Actual Loan</b><td>:-</td></td><td id="style"><?php echo "<u>".$_SESSION['loan']."</u> ₹/-"; ?><br></td>
					</tr>
						<tr>
					<td><b>Total interest</b><td>:-</td></td><td id="style"><?php echo "<u>".$_SESSION['interest']."</u> ₹/-"; ?><td>
					</tr>
					<tr>
					<td><b>Month Interest</b><td>:-</td></td><td id="style"><?php echo "<u>".$_SESSION['m_int']."</u> ₹/-"; ?><td>
					</tr>
					<tr>
					<td><b>Goldrate (per gram)</b><td>:-</td></td><td id="style"><?php echo "<u>".$_SESSION['goldrate']."</u> ₹/-"; ?><td>
					</tr>
			</table>
			</div>
		</div>
	</div>
	<br>
	<div class="main">
		<div class="dashboard color">
			<h1 style="color: #484848; font-size: 40px; margin-left: 20px; padding: 20px;"><u>Pay Your Interest Here</u></h1>
			<div id="details">
				<br>
				<table>
					<tr>
					<td><b>Paid loan</b></td><td>:-</td><td id="style"><?php echo "<u>".$_SESSION['paidloan']."</u>₹/-"; ?><br></td>
					</tr>
					<tr>
					<td><b>Remaining Loan</b><td>:-</td></td><td id="style"><?php echo "<u>".$_SESSION['remloan']."</u>₹/-."; ?><br></td>
					</tr>
					<tr>
			</table>
			</div>
			<div id="interest">
				<h5 style="color:#800080; font-family:Comic Sans MS;">If you want to pay interest or loan type the amount below.</h5>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<table>
						<tr>
							<td><b>Pay Interest/Loan</b></td><td>:-</td><td><input id="text" type="text" name="pl"></td>
						</tr>
					</table><br>
				<h5 style="color:#800080; font-family:Comic Sans MS;"><?php echo $msg; ?></h5>
					<br>
					<div class="main">
						<div class="sub">
							<input id="input" type="submit" name="submit" value="Pay">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include("../footer.php"); ?>
</body>
</html>