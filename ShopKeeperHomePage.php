<!DOCTYPE html>
<html lang="en">
<head>
<title>Selling &mdash; Website by Colorlib</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/fonts/icomoon/style.css">
<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/bootstrap.min.css">

<link rel="stylesheet" href="https://colorlib.com/preview/theme/selling/css/style.css">
<link rel="stylesheet" type="text/css" href="https://www.elegantthemes.com/style.css?ver=5.15" />

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-mobile-menu site-navbar-target">
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
<li><a href="#home-section" class="nav-link">Home</a></li>
<li><a href="searching.php" class="nav-link">Search Shops</a></li>
<li><a href="#products-section" class="nav-link">Products</a></li>
<li><a href="#about-section" class="nav-link">About Us</a></li>
<li><a href="CouponGeneration.php" class="nav-link">Coupons</a></li>
<li><a href="index.php?logout='1'" style="color: red;">logout</a></li>
</nav>
</div>
<div class="myDiv">
<?php
$username = "root";
$password = "";
$database = "localdeals";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM RetailerRegistration";


//echo '<table border="0" cellspacing="2" cellpadding="2">
//    <tr>
//      <td> <font face="Arial">username</font> </td>
//      <td> <font face="Arial">ShopName</font> </td>
//      <td> <font face="Arial">Location</font> </td>
//      <td> <font face="Arial">city</font> </td>
//      <td> <font face="Arial">Pincode</font> </td>
//      <td> images </td>
//  </tr>';

if ($result = $mysqli->query($query)) {
while ($row = $result->fetch_assoc()) {
$Retailer_id = $row["Retailer_id"];
$username = $row["username"];
$ShopName = $row["ShopName"];
$Location = $row["Location"];
$City = $row["City"];
$Pincode = $row["Pincode"];
$images = $row["images"];


echo '
<div class="container text-center">

</div>
</div>
</div>
</div>
<div class="row three-column">
<div class="column-container">
<div class="column centered blurb">
<span class="icon-container icon-big">
<img class="lazy" width="48" height="48" src="https://www.elegantthemes.com/images/placeholder.jpg" data-src="https://www.elegantthemes.com/images/icons/big/dad.svg" alt="Drag & Drop">

<img src="data:image/jpeg;base64,'.base64_encode($row['images']).'"/>
</span>
</div>
</div>
<div class="column-container">
<div class="column centered blurb">
<span class="icon-container icon-big">
<img class="lazy" width="48" height="48" src="https://www.elegantthemes.com/images/placeholder.jpg" data-src="https://www.elegantthemes.com/images/icons/big/design.svg" alt="Visual Editing">
</span><a href="Shops.php?id='.$Retailer_id.'">
<tr border="1px">
<td>'.$username.'</td>
<td>'.$ShopName.'</td>
<td>'.$Location.'</td>
<td>'.$City.'</td>
<td>'.$Pincode.'</td>
</tr></a>
</div>
</div>
';
}
$result->free();
}
?>

</div>
</div>
<footer class="site-footer bg-white">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="row">

</div>
</div>

</div>
<div class="row pt-5 mt-5 text-center">
<div class="col-md-12">
<div class="border-top pt-5">
<p>

Copyright &copy; All rights reserved | to <a href="Home.php" target="_blank">LOCALDEALS</a>

</p>
</div>
</div>
</div>
</div>
</footer>
<script src="https://colorlib.com/preview/theme/selling/js/jquery-3.3.1.min.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/jquery-migrate-3.0.1.min.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/jquery-ui.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/popper.min.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/bootstrap.min.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/owl.carousel.min.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/jquery.stellar.min.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/jquery.countdown.min.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/bootstrap-datepicker.min.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/jquery.easing.1.3.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/aos.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/jquery.fancybox.min.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/jquery.sticky.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script src="https://colorlib.com/preview/theme/selling/js/main.js" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="ac9ed73336ee37d4f61e106c-text/javascript"></script>
<script type="ac9ed73336ee37d4f61e106c-text/javascript">
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="ac9ed73336ee37d4f61e106c-|49" defer=""></script></body>
</html>
