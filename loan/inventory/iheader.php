<!DOCTYPE html>
<html>
<head>
    <title>Gold Loan Management System </title>
    <link rel="stylesheet" href="ism/css/my-slider.css"/>
    <script src="ism/js/ism-2.2.min.js"></script>
    <style type="text/css">
        *{
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
        }
        .clear{
            clear: both;
        }
        .hr{
            height: 10px;
            background-color: #E8E8E8;
            border: 1px solid #E8E8E8;
        }
        .marquee{
            background-color: #e6b3b3;
            height: 50px;
            line-height: 50px;
            color: #000000;
            font-size: 20px;
            font-family: oswald;
            text-align: center;
        }
        #h1{
            height: 100%;
            line-height: 55px;
        }
        #h2{
            height: 250px;
            border: 1px solid #E8E8E8;
            align-content: center;
        }
        #top_l{
            height: 30px;
            width: 30%;
            float: left;
            margin-left: 3px;
        }
        #top_l img{
            width: 30px;
            margin: 5px;
            height: 25px;
            margin-top: 15px;
        }
        #top_l img:hover{
            box-shadow: 5px 5px 20px black;
        }
        #left{
            float: left;
            width: 40%;
            height: 250px;
        }
        #left img{
            height: 250px;
            width: 100%;
        }
        #top_r{
            float: right;
            width: 69%;
            text-align: right;
            font-size: 20px;
            color: #D80000;
            text-shadow: 5px 5px 15px gray;
            cursor: help;
        }
        a{
            text-decoration: none;
        }
        #right{
            float: right;
            line-height: 250px;
            width: 60%;
            height: 250px;
            margin: auto;
            align-content: center;
            left: 0;
            right: 0;
        }
        #right ul{
            list-style: none;
            text-align: center;
        }
        #right ul li{
            display:inline-block;
            width: 20%;
            line-height: 60px;
            margin: 10px; 
            text-align:center;
            position:relative;
            font-size: 24px;
        }
        #right ul li a{
            color: #D9338C;
            display: block;
            height: 65px;
            text-shadow: 5px 5px 20px gray;
        }
        #right ul li a:hover{
            background-color: #b30000;
            color: white;
            text-shadow: 5px 5px 20px #0000FF;
            box-shadow: 5px 5px 15px 5px gray;
        }
    </style>
</head>
<body>
    <div class="main"><!--For taking a full width--><!--1st div tag-->
        <div class="sub" id="h1"><!--minimising full width with 70% of its size-->
            <div id="top_l">
                <a href="https://twitter.com"><img src="../images/f.png" id="img"></a>
                <a href="https://twitter.com"><img src="../images/t.jpg" ></a>
                <a href="https://www.youtube.com/"><img src="../images/y.jpg" ></a>
            </div>
            <!--Floated to left-->
            <div id="top_r">
                Helpline No = 1800-777-66-55.
            </div>
            <!--Floated to right-->
        </div>
        <div class="clear"></div><!--this is to clear the div tag-->
    </div><!--1st div close-->
    <hr class="sub hr">
    <div class="main">
        <div class="sub" id="h2">
            <div id="left">
              <a href="../home.php"><img src="../images/logo.jpg"></a>
            </div>
            <div id="right">
            <ul>
                <li><a href="../home.php">Home</a></li>
                <li><a href="../in_path.php">Inventory</a></li>
                <li><a href="../em_path.php">Payroll</a></li>
                <li><a href="../ad_path.php">Admin</a></li>
            </ul>
        </div>
        </div>
        <div class="clear"></div>
    </div>
    <hr class="main hr">