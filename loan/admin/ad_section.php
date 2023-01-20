<!DOCTYPE html>
<html>
<head>
	<title>Admin Section</title>
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
				<a href="set_gr.php">&#8701; Back</a>
			</div>
		</div>
	</div>

</body>
</html>