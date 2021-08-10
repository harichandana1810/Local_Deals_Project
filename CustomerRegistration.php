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

</nav>
</div>

<div class="header">
<h2>Customer Register</h2>
</div>

<form method="post" action="register.php" enctype="multitype/form">
<?php include('errors.php'); ?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username">
</div>
<div class="input-group">
<label>Email</label>
<input type="email" name="email">
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="Password">
</div>
<div class="input-group">
<label>Confirm password</label>
<input type="password" name="ConfirmPassword">
</div>
<div class="input-group">
<label>Pincode</label>
<input type="text" name="Pincode">
</div>
<div class="input-group">
<button type="submit" class="btn" name="reg_user">Register</button>
</div>
<p>
Already a member? <a href="login.php">Sign in</a>
</p>
</form>
</body>
</html>
