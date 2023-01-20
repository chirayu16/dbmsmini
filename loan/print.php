<?php

	$conn = mysqli_connect("localhost","root","","goldloan") or die(mysql_error());
session_start();

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
}

$sql = "INSERT INTO `customer`(`firstname`, `lastname`, `mobile`, `email`, `address`, `gender`, `password`, `ornaments`, `weight`, `purity`, `loan`, `interest`, `monthinterest`) VALUES ('$name','$sname','$mno','$email','$add','$gender','$pass','$ornaments','$weight','$purity','$loan','$interest','$m_int')";

	$run = mysqli_query($conn, $sql);

	if ($run == TRUE) {
		echo "Data inserted seccsessfully..";
	}else{
		echo "Error";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Print Your Document</title>
</head>
<body>
<?php
	if (isset($_SESSION['ornaments'])) {
		echo "Ornaments :- ".$_SESSION['ornaments']."";
		echo "<br>";
	}
	if (isset($_SESSION['purity'])) {
		echo "Purity :- ".$_SESSION['purity']."";
		echo "<br>";
	}
	if (isset($_SESSION['weight'])) {
		echo "Weight :- ".$_SESSION['weight']."";
		echo "<br>";
	}
	if (isset($r)) {
		echo "Gold Rate :- ".$r."";
		echo "<br>";
	}
	if (isset($_SESSION['bint'])) {
		echo "Loan upto :- ".$_SESSION['bint']."";
		echo "<br>";
	}
	if (isset($_SESSION['loan'])) {
		echo "Your Loan :- ".$_SESSION['loan']."";
		echo "<br>";
	}
	if (isset($_SESSION['interest'])) {
		echo "Interest for 3 month's :- ".$_SESSION['interest']."";
		echo "<br>";
	}
	if (isset($_SESSION['m_int'])) {
		echo "Interest for month :- ".$_SESSION['m_int']."";
	}  
?>
</body>
</html>