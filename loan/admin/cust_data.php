<?php
 $conn = mysqli_connect("localhost","root","","goldloan");
 $sql = "SELECT * FROM customer";

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
			text-align: center;
			color: white;
			line-height: 50px;
			font-size:  25px;
		}
		.mr{
			text-align: center;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="main hr">
		<div class="sub">
			<div id="head">
				Customer Database
			</div>
		</div>
	</div>
	<div class="main hr">
		<div class="mr">
			<table width="100%" border="1" cellpadding="5" cellspacing="1">
				<tr style="font-size: 20px;">
					<th>Id</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Address</th>
					<th>Gender</th>
					<th>Ornaments</th>
					<th>Weight</th>
					<th>Purity</th>
					<th>Loan</th>
					<th>Interest</th>
					<th>Monthinterest</th>
					<th>Goldrate</th>
					<th>Paidloan</th>
					<th>Remening_loan</th>
				</tr>

				<?php

				while ($user = mysqli_fetch_assoc($result)) {

					echo "<tr>";

						echo "<td>".$user['id']."</td>";

						echo "<td>".$user['firstname']."</td>";

						echo "<td>".$user['lastname']."</td>";

						echo "<td>".$user['mobile']."</td>";

						echo "<td>".$user['email']."</td>";

						echo "<td>".$user['address']."</td>";

						echo "<td>".$user['gender']."</td>";

						echo "<td>".$user['ornaments']."</td>";

						echo "<td>".$user['weight']."</td>";

						echo "<td>".$user['purity']."</td>";

						echo "<td>".$user['loan']."</td>";

						echo "<td>".$user['interest']."</td>";

						echo "<td>".$user['monthinterest']."</td>";

						echo "<td>".$user['paidloan']."</td>";

						echo "<td>".$user['goldrate']."</td>";

						echo "<td>".$user['remening_loan']."</td>";

					echo "<tr>";

				}
				?>
			</table>
		</div>
	</div>
	
</body>
</html>