<!DOCTYPE html>
<html>
<head>
	<title>Inventory Management - Gold Loan Management System</title>
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
		#head2 img{
			width: 100%;
			height: 300px;
		}*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}
		.main{
			width: 100%;
		}
		.sub{
			width: 70%;
			margin: auto;
		}
		.gray{
			background-color: #F8F8F8;
		}
		.bg{
			background-color: #E8E8E8;
		}.clear{
			clear: both;
		}#register , #login{
			width: 48%;
			height: 100px;
			text-align: center;
			background-color: #ffffb3;
			font-family: oswald;
			font-size: 35px;
			word-wrap: break-word;
		}
		#register a, #login a{
			text-decoration: none;
		}
		#register{
			float: left;
		}
		#login{
			float: right;
		}
		#register ul, #login ul{
			list-style: none;
			width: 100%;
			height: 100%;
			display: block;
		}
		#register ul li, #login ul li{
			width: 100%;
			color: #228B22;
			line-height: 40px;
			text-shadow: 5px 5px 20px gray;
		}
		#register:hover{
			box-shadow: 5px 5px 20px 5px gray;
		}
		#login:hover{
			box-shadow: 5px 5px 20px 5px gray;
		}
		#register span, #login span{
			font-size: 20px;
			height: 10px;
			color: red;
			text-shadow: 5px 5px 20px gray;
		}
		#details{
			width: 80%;
			height: 500px;
			padding: 20px;
			margin: 0 auto;
			
		}
		#details h1{
			text-align: center;
			padding: 20px;
			font-size: 40px;
			color: #b30000;
		}
		#details ul li{
			padding: 20px;
			font-size: 25px;
			word-wrap: break-word;
			color: green;
		}
	</style>
</head>
<body>
	<?php include("header.php"); ?>
	<div id="head">
				Inventory Management.
	</div>
	 <hr class="main hr">
	  <hr class="main hr">
	 <div class="main bg">
        <div class="sub">
            <div id="register">
                <a href="inventory/rcustomer.php">
                    <ul>
                        <li><span>*Create a new account, click here.*</span></li>
                        <li>Sign Up</li>
                    </ul>
                </a>
            </div>
            <div id="login">
                <a href="inventory/logincust.php">
                    <ul>
                       <li><span>*Already created account, click here.*</span></li>
                        <li>Sign In</li>
                    </ul>
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <hr class="main hr">
    <hr class="main hr">
    <div class="main">
		<div class="sub">
			<div id="details">
				<h1>Basic details about Gold loan management system..</h1>
				<ul>
					<li>Welcome, we are giving a loan on your gold.</li>
					<li>Given loan are on the basis of our policies(see the home page).</li>
					<li>If you want a loan please register with proper details.</li>
					<li>we are calculate loan for you.</li>
					<li>If you want to pay the interest or amount you can log in and pay from there.</li>
				</ul>
			</div>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>