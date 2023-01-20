<!DOCTYPE html>
<html>
<head>
    <title>Gold Loan Management System </title>
    <link rel="stylesheet" type="text/css" href="images/style.css">
    <link rel="stylesheet" href="ism/css/my-slider.css"/>
    <script src="ism/js/ism-2.2.min.js"></script>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="main marquee">
           <marquee><p id="mar"><?php echo "18 Carat gold rate is <strong>".$_COOKIE['goldrate18']."/-₹</strong>  22 Carat gold rate is <strong>".$_COOKIE['goldrate22']."/-₹</strong>  24 Carat gold rate is <strong>".$_COOKIE['goldrate24']."/-₹</strong>"; ?></p></marquee>
    </div>
    <div class="main slider">
        <img class="placeholder" src="images/s3.jpg">
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
        <div class="tag">
            <div id="image">
                <img src="images/1.png">
            </div>
            <div id="text">
                <h1>About Us</h1><br><br>
                <ul >
                    <li>we are providing a loan on gold.</li><br><br>
                    <li>gold has a minimum 18 carat purity.</li><br><br>
                    <li>we provinding a loan to help you financially.</li><br><br>
                    <li>this is trusted website.</li><br>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="main">
        <div class="tag">
            <div id="pt">
                <h1>Policies</h1><br><br>
                <table width="80%" id="policy">
                    <tr>
                        <th>purity</th>
                        <th>gold rate</th>
                        <th>interest</th>
                    </tr>
                    <tr> 
                        <td >18 Purity</td>
                        <td ><?php echo $_COOKIE['goldrate18']; ?></td>
                        <td >less then 50,000 = 19%</td>
                    </tr>
                    <tr> 
                        <td>22 Purity</td>
                        <td><?php echo $_COOKIE['goldrate22']; ?></td>
                        <td>less then 50,000 & more then 1,00,000 = 15%</td>
                    </tr>
                    <tr> 
                        <td>24 Purity</td>
                        <td><?php echo $_COOKIE['goldrate24']; ?></td>
                        <td>More then 1,00,000 = 11%</td>
                    </tr>
                </table>
            </div>
            <div id="pi">
                <img src="images/s5.jpg">
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>