<?php
session_start();
$conn = mysqli_connect("localhost","root","","goldloan") or die(mysql_error());
$paidloan = "0";
$msg = "";
$_SESSION['paidloan'] = $paidloan;
			if (isset($_SESSION['name'])) {
				$name = $_SESSION['name'];
			}
			if (isset($_SESSION['sname'])) {
				$sname = $_SESSION['sname'];
			}
			if (isset($_SESSION['phonen'])) {
				$phonen = $_SESSION['phonen'];
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
		if(isset($_POST["weight"]) && !empty($_POST["weight"])) {
			if (preg_match("/^[0-9]*$/", $_POST["weight"])) {
					$weight = $_POST["weight"];
					$_SESSION['weight'] = $weight;

					if(isset($_POST["purity"])){
						$purity = $_POST["purity"];
						$_SESSION['purity'] = $purity;

						if($_SESSION['purity'] == 18){
						$bint = $weight * $r = $_COOKIE['goldrate18'];
						$_SESSION['bint'] = $bint;
						$_SESSION['goldrate'] = $r;
						}
						elseif($_SESSION['purity']==22){
						#before interest
						$bint = $weight * $r = $_COOKIE['goldrate22'];
						$_SESSION['bint'] = $bint;
						$_SESSION['goldrate'] = $r;
						}
						elseif($_SESSION['purity']==24){
						#before interest
						$bint = $weight * $r = $_COOKIE['goldrate24'];
						$_SESSION['bint'] = $bint;
						$_SESSION['goldrate'] = $r;
						}
					if(isset($_SESSION['bint'])) {

					$loan = $_SESSION['bint'];
					$_SESSION['loan'] = $loan;
					$_SESSION['remloan'] = $loan;

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

					$sql = "INSERT INTO `customer`(`firstname`, `lastname`, `mobile`, `email`, `address`, `gender`, `password`, `ornaments`, `weight`, `purity`, `loan`, `interest`, `monthinterest`, `goldrate`, `paidloan`, `remening_loan`) VALUES ('$name','$sname','$phonen','$email','$add','$gender','$pass','$ornaments','$weight','$purity','$loan','$interest','$m_int','$r','$paidloan','$loan')";

					$run = mysqli_query($conn, $sql);

					if ($run == TRUE) {
						echo "Data inserted seccsessfully..";
						header("location: user.php");
					}else{
						echo "Error : ".mysqli_error($conn)."";
					}

				}else{
					$msg = "Invalid input,You can only enter the numbers(0-9) in box";
					}
			}else{
				$msg = "Please Fill all the details";
				
			}

	}
	mysqli_close($conn);
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
				Invantory Management
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
	<div class="main">
		<div id="login">
			<div class="main">
				<div id="head">
					Gold Details
				</div>
			</div>
			<div id="l_main">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<p>Ornaments<span>*</span> </p> <select id="input" name="ornaments">
									<option value="Rings">Rings</option>
									<option value="Bangles">Bangles</option>
									<option value="Necklace">Necklace</option>
									<option value="Pendent">Pendent</option>
									<option value="Bracelet">Bracelet</option>
									<option value="Ear Rings">Ear Rings</option>
									</select><br><br>
					<p>Gold Purity<span>*</span> </p> <select id="input" name="purity">
									<option value="18 ">18 Carat</option>
									<option value="22">22 Carat</option>
									<option value="24">24 Carat</option>
									</select><br><br>
					<p>Gold Weight (in gram's)<span>*</span> </p><input id="input" type="text" name="weight"><br><br>
					<?php echo $msg; ?><br><br>
					<input id="log_in" type="submit" name="loan" value="Calculate Amount">
				</form>
			</div>
		</div>
	</div>
	<hr>
	<?php include("../footer.php"); ?>

</body>
</html>