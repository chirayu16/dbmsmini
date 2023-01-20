<?php
 $conn = mysqli_connect("localhost","root","","goldloan");
 $sql = "SELECT * FROM employee";

 $result = mysqli_query($conn, $sql);  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Database - Gold Loan Management System</title>
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
		#head{
			background-color: #b30000;
			height: 50px;
			color: white;
			font-size:  25px;
 			 display: flex;
  			justify-content: space-between;
  			align-items: center;
		}
		.mr{
			text-align: center;
		}
		.text-c {
			text-align: center;
			padding-right: 30vw;
		}
		.logo{
			height:50px;
			width:60px
		}
	</style>
</head>
<body>
	<div class="main hr">
		<div class="sub">
			<div id="head">
				<a href="/gold/loan/home.php" the target=”_blank” >
			<img class ="logo" src="../images/logo.jpg" alt="">
			</a>
				<div class="text-c">
				Employee Database
				</div>
			</div>
		</div>
	</div>
	<div class="main hr">
		<div class="sub mr">
			<table width="1380" border="1" cellpadding="5" cellspacing="1">
				<tr style="color: black; font-size: 20px;">
					<th>Employee Id</th>
					<th>firstname</th>
					<th>lastname</th>
					<th>mobile</th>
					<th>gender</th>
					<th>Workarea</th>
					<th>email</th>					
					<th>Role</th>
					<th>Basic salary</th>
					<th>DA</th>
					<th>TA</th>
					<th>Total Salary</th>
				</tr>

				<?php

				while ($user = mysqli_fetch_assoc($result)) {

					echo "<tr>";

						echo "<td>".$user['id']."</td>";

						echo "<td>".$user['name']."</td>";

						echo "<td>".$user['surname']."</td>";

						echo "<td>".$user['phone']."</td>";

						echo "<td>".$user['gender']."</td>";

						echo "<td>".$user['workarea']."</td>";

						echo "<td>".$user['email']."</td>";

						echo "<td>".$user['role']."</td>";

						echo "<td>".$user['basicsalary']."</td>";

						echo "<td>".$user['da']."</td>";

						echo "<td>".$user['ta']."</td>";

						echo "<td>".$user['totalsalary']."</td>";

					echo "<tr>";

				}
				?>
			</table>
		</div>
	</div>
	
</body>
</html>