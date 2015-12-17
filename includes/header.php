<?php
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();
require_once 'class.user.php';
require_once 'dbconfig.php';
require_once 'class.crud.php';

$decks = new FlashCard();
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
	$user_login->redirect('account.php');
}

if(isset($_POST['btn-login']))
{
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
	
	if($user_login->login($email,$upass))
	{
		$user_login->redirect('account.php');
	}
}

// add +1 to php variable counter
if(isset($_POST['counter']))
{
$count = $_POST['counter'];
}
else
{$count = 1;
}
// Check if a search query is set
if(isset($_GET['s'])) {
  $search_string = $_GET['s'];
}

// Check if a deck id exists
if(isset($_GET['c']) && isset($count)) {
  $c = $_GET['c'];
  $total = $decks->countCards($c);
}

if(isset($_POST['total']) && isset($_POST['category']) && isset($_POST['counter']))
{
$c = $_POST['category'];
$total = $_POST['total'];
$count = $_POST['counter'];
$percentage = ($count / $total)*100;
}
?>	

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index - Skeets</title>
    <meta name="description" content="Angle - Blog is a clean and minimalist photography blog perfectly designed for photographers and bloggers. Slimply is beautiful, clean and very classic design.">
    <meta name="keywords" content="photoblog, portfolio, photography, photographer, unique, creative, blog, minimal, beautiful theme">
    <meta name="author" content="Laza Themes">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/icon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon/apple-touch-icon-114x114.png">

    <!-- Bootstrap 
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.css">
	
	<!-- Font Stroke 
    ================================================== -->
	<link rel="stylesheet" type="text/css" href="fonts/fontstroke/pe-icon-7-stroke/css/helper.css">
	<link rel="stylesheet" type="text/css" href="fonts/fontstroke/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

	<!-- Animate 
    ================================================== -->
	<link href='css/effect2.css' rel='stylesheet' type='text/css'>
	<link href='css/animate.css' rel='stylesheet' type='text/css'>
	
	<!-- Add fancyBox CSS files -->
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
	
	<!-- Owl Slider CSS -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" media="screen" />
	
	<!-- Custom scroll bar -->
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
	
	<!-- Custom select box -->
	<link rel="stylesheet" type="text/css" href="css/countrySelect.css">
	
    <!-- Custom Css 
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/rs-wp-v1.2.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Google Fonts 
    ================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,500,700,800,600' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  
    <![endif]-->
  </head>
  <body>
	
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="rst-header">
		
			<!-- Register bar -->
			<nav class="rst-line-reg">
				<div class="container">
					<div class="rst-line-reg-social">
						<ul>
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
					<div class="rst-line-reg-setting">
						
						<!-- Account settings -->
						<div class="rst-account">
							<a href="#"><img class="img-circle" src="http://placehold.it/299x299" alt="" />liza doe<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="account.html"><i class="fa fa-user"></i>setting</a></li>
								<li><a href="#"><i class="fa fa-arrow-circle-o-left"></i>Log out</a></li>
							</ul>
						</div> 
						<!-- Account settings -->
						
						<!-- Login -->
						<div class="rst-login">
							<a href="#">Sign in<i class="fa fa-angle-down"></i></a>
							<?php 
							if(isset($_GET['inactive']))
							{
								?>
					            <div class='alert alert-error'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
								</div>
					            <?php
							}
							?>
							<form class="form-signin" method="post">
								      <?php
								        if(isset($_GET['error']))
										{
											?>
								            <div class='alert alert-success'>
												<button class='close' data-dismiss='alert'>&times;</button>
												<strong>Wrong Details!</strong> 
											</div>
								            <?php
										}
										?>
								<input type="email" placeholder="Email address" name="txtemail"  class="text required email" required />
								<input type="password" placeholder="Password" name="txtupass" class="text required" placeholder="Password" required />
								<input type="submit" name="btn-login" value="sign in"/>
								<p>Not have an Account? <a href="register.php">Register</a></p>
								<p><a href="fpass.php">Forgot your Password ? </a></p>
							</form>
						</div>
						<!-- Login -->
						
						<div class="rst-languages">
							<a href="#">English<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="#">English</a></li>
								<li><a href="#">Frances</a></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</nav>
			<!-- Register bar -->
			
			<!-- Header banner -->
			<div class="rst-header-banner rst-banner-background rst-banner-2">
			
				<!-- Menu bar -->
				<div class="rst-header-menu-bar">
					<div class="container">
						<div class="rst-header-logo">
							<a href="index.php"><img src="images/header-logo-2.png" alt="" /></a>
							<a class="rst-logo-sticky" href="index.php"><img src="images/header-logo-2.png" alt="" /></a>
						</div>
							<nav class="rst-header-menu">
								<button class="rst-menu-trigger">
									<span>Toggle navigation</span>
								</button>
								<ul>
									<li><a href="about.html">About</a></li>
									<li class="current-menu-item"><a href="flashcards.php">Flashcards</a></li>
			<!-- 					<li>
										<a href="#">Pages</a>
										<ul>
											<li><a href="prices.html">Prices</a></li>
											<li><a href="category.html">Category</a></li>
											<li><a href="shortcodes.html">Shortcodes</a></li>
											<li><a href="faq.html">FAQs</a></li>
										</ul>
									</li> -->
									<li><a href="contact.html">Contact</a></li>
								</ul>
								<a class="btn btn-mds btn-success" type="button" href="register.php">Register</a>
							</nav>
					</div>
				</div>
				<!-- Menu bar -->


		<?php 
		if(isset($_GET['inactive']))
		{
			?>
            <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
			</div>
            <?php
		}
		?>
        <form class="form-signin" method="post">
        <?php
        if(isset($_GET['error']))
		{
			?>
            <div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Wrong Details!</strong> 
			</div>
            <?php
		}
		?>