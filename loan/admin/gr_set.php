<?php
$exp = time() + /*(30);*/(86400 * 30);
$msg = $msg1 = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['goldrate'])) {
		if (isset($_POST['carat18']) && preg_match("/^[0-9]*$/", $_POST['carat18']) && !empty($_POST['carat18'])) {
			$carat18 = $_POST['carat18'];
			setcookie("goldrate18","$carat18",$exp,"/");
		}else{
			$msg1 = "Only Number Allowed";
		}
		if (isset($_POST['carat22']) && preg_match("/^[0-9]*$/", $_POST['carat18']) && !empty($_POST['carat22'])) {
			$carat22 = $_POST['carat22'];
			setcookie("goldrate22","$carat22",$exp,"/");
		}else{
			$msg1 = "Only Number Allowed";
		}
		if (isset($_POST['carat24']) && preg_match("/^[0-9]*$/", $_POST['carat18']) && !empty($_POST['carat24'])) {
			$carat24 = $_POST['carat24'];
			setcookie("goldrate24","$carat24",$exp,"/");
		}else{
			$msg1 = "Only Number Allowed";
		}
		if (isset($carat18) && isset($carat22) && isset($carat24)) {
		}
		else{
			$msg = "Plese Fill All Details";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventory Management</title>
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
		#head1{
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
		#login{
			height: 500px;
			border: 1px solid #b30000;
			width: 30%;
			margin: 0 auto;
		}
		#tag{
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
			text-align: center;
			font-family: Comic Sans MS;
		}
		#button{
			display: block;
		}
		#head,#logout{
			background-color: #b30000;
			height: 50px;
			color: white;
			line-height: 50px;
			font-size:  25px;
		}
		#head{
			width: 90%;
			text-align: center;
			float: left;
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
		#logout{
			float: right;
			width: 10%;
			text-align: center;
		}
		#logout a{
			display: block;
			text-decoration: none;
			color: white;
		}
		#logout :hover{
			color: white;
			background-color:black;
		}
	</style>
</head>
<body>
	<div class="main hr">
		<div class="sub color">
			<div id="head">
				Admin Section
			</div>
			<div id="logout">
				<a href="../inventory/logout.php">Logout</a>
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="main">
		<div id="login">
			<div class="main">
				<div id="head1">
					Set Goldrate
				</div>
			</div>
			<div id="l_main">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<p>Set 18 carat goldrate<span>*</span> </p> 
					<input id="input" type="text" name="carat18"><br><br>
					<p>Set 22 carat goldrate<span>*</span> </p> 
					<input id="input" type="text" name="carat22"><br><br>
					<p>Set 24 carat goldrate<span>*</span> </p>
					<input id="input" type="text" name="carat24"><br><br>
					<?php echo $msg1; ?><br>
					<?php echo $msg; ?><br><br>
					<input id="log_in" type="submit" name="goldrate" value="Set Goldrate">
				</form>
			</div>
		</div>
	</div>
	<?php include("../footer.php"); ?>
</body>
</html>