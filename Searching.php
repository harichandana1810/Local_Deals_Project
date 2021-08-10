<?php include('server.php') ?>
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
<li><a href="#home-section" class="nav-link">Home</a></li>
<li><a href="#products-section" class="nav-link">Products</a></li>
<li><a href="#about-section" class="nav-link">About Us</a></li>
<li><a href="#special-section" class="nav-link">Special</a></li>

</nav>
</div>

  <div class="header">
  	<h2>searching shops</h2>
  </div>
	 
  <form method="post" action="searching.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Search through Pincode</label>
  		<input type="text" name="Pincode" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="searching">Search</button>
      </div>
  </form>
  <div>
  <?php 
      if (isset($_POST['searching'])) {
$username = "root"; 
$password = ""; 
$database = "localdeals"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$Pincode = mysqli_real_escape_string($db, $_POST['Pincode']);
$query = "SELECT * FROM RetailerRegistration where Pincode='$Pincode'";
 
 
echo '<div>
        <table border="0" cellspacing="2" cellpadding="2"> 
         <tr> 
            <td> <font face="Arial">username</font> </td> 
            <td> <font face="Arial">ShopName</font> </td> 
            <td> <font face="Arial">Location</font> </td> 
            <td> <font face="Arial">city</font> </td> 
          <td> <font face="Arial">Pincode</font> </td> 
        </tr>
        </div>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $username = $row["username"];
        $ShopName = $row["ShopName"];
        $Location = $row["Location"];
        $City = $row["City"];
        $Pincode = $row["Pincode"]; 
 
        echo '<tr> 
                  <td>'.$username.'</td> 
                  <td>'.$ShopName.'</td> 
                  <td>'.$Location.'</td> 
                  <td>'.$City.'</td> 
                  <td>'.$Pincode.'</td> 
              </tr>';
    }
    $result->free();
} 
}
?>
</div>
</body>
</html>
