<?php
    $input_array = array("Sarees", "Jeans", "Pants", "Shirts", "Kurtas", "Party wear", "Tops", "Legins", "Dotis", "jackets");
    $discount_on = $input_array[rand(0,sizeof($input_array)-1)];
    /*echo "$discount_on";
    echo "<br>";*/
    $Percentage = "15";
    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $res = "";
    for ($i = 0; $i < 10; $i++) {
        $res .= $chars[mt_rand(0, strlen($chars)-1)];
    }
    /*echo "Coupon ID:    ";
    print($res);
    echo "<br>";*/
    $pin = "0123456789";
    $pinres = "";
    for ($i = 0; $i < 6; $i++) {
        $pinres .= $chars[mt_rand(0,strlen($pin)-1)];
    }
    /*echo "Pin:          ";
    print($pinres);
    echo "<br>";*/
    $sd=strtotime("+0 days");
    $sd1 = date("Y-m-d", $sd);

    //echo "Starting date:  "."$sd1"."<br>";
    $d=strtotime("+60 days");
    $d1 = date("Y-m-d", $d);
    //echo "Ending date:     $d1"."<br>";
    // Create connection
    
$conn = mysqli_connect('localhost', 'root', '', 'LocalDeals');

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully";
 
$sql = "INSERT INTO coupongeneration (discount_on, Percentage, Coupon_id, pin, StartingDate, EndingDate) 
        VALUES ('$discount_on', '$Percentage', '$res', $pinres, '$sd1', '$d1')";
if (mysqli_query($conn, $sql)) {
      //echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Selling &mdash; Website by Colorlib</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/fonts/icomoon/style.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/bootstrap.min.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/jquery-ui.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/owl.carousel.min.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/aos.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap">
<div class="site-mobile-menu site-navbar-target">
<div class="site-mobile-menu-header">
<div class="site-mobile-menu-close mt-3">
<span class="icon-close2 js-menu-toggle"></span>
</div>
</div>
<div class="site-mobile-menu-body"></div>
</div>
<div class="top-bar py-3 bg-light" id="home-section">
<div class="container">
<div class="row align-items-center">
</div>
</div>
</div>
<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">
<div class="container">
<div class="row align-items-center">
<div class="col-6 col-xl-2">
<h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">LOCAL DEALS<span class="text-primary">.</span> </a></h1>
</div>
<div class="col-12 col-md-10 d-none d-xl-block">
<nav class="site-navigation position-relative text-right" role="navigation">
<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
<li><a href="Home.php" class="nav-link">Home</a></li>
<li><a href="searching.php" class="nav-link">Search Shops</a></li>
<li><a href="#about-section" class="nav-link">About Us</a></li>
<li><a href="index.php?logout='1'" style="color: red;">logout</a></li>

</nav>
</div>
</header>
    <div class="header">
        Coupon
        <center>
            <div class="myDiv">
                <table>
                <tr>
                    <td><div class="Div1" colspan="4">Discount on</div></td>
                    <td>-</td>
                    <td><div class="Div1"><?php echo "$discount_on"; ?></td>
                </tr>
                <tr>
                    <td><div class="Div1" colspan="4">Percentage</div></td>
                    <td>-</td>
                    <td><div class="Div1"><?php echo "$Percentage"; ?>%</td>
                </tr>
                <tr>
                    <td><div class="Div1" colspan="4">Coupon ID</div></td>
                    <td>-</td>
                    <td><div class="Div1" id="myInput"><?php echo "$res"; ?></td>
                </tr>
                <tr>
                    <td><div class="Div1" colspan="4">Pin</div></td>
                    <td>-</td>
                    <td><div class="Div1"><?php echo "$pinres"; ?></td>
                </tr>
                
                <tr>
                    <td><div class="Div1" colspan="4">Ending Date</div></td>
                    <td>-</td>
                    <td><div class="Div1"><?php echo "$d1"; ?></td>
                </tr>
                </table>
            </div>
        </center>
</div>

    </body>
</html>
