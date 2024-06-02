<?php
include_once "db.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
    <title>Welcome Barber</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Barbero Barber Salon HTML Template has a unique and modern-looking design that will make your clients love your website." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/payment.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Karla:wght@400;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="images/ssb_small.png" type="image/x-icon">
    <link rel="icon" href="images/ssb_small.png" type="image/x-icon">
    <meta name="msapplication-TileImage" content="images/favicon.png" />

	<!-- Add site Favicon -->
	<link rel="shortcut icon" href="images/ssb_small.png" type="image/x-icon">
	<link rel="icon" href="images/ssb_small.png" type="image/x-icon">
	<meta name="msapplication-TileImage" content="images/favicon.png" />

</head>

<body>

	<div class="page-wrapper">

		<!-- Main Header / Header Style Two -->
		<header class="main-header header-style-two">

			<!--Header-Upper-->
			<div class="header-upper">
				<div class="auto-container">
					<div class="clearfix">

						<div class="pull-left logo-box">
							<div class="logo"><a href="payment.php"><img src="images/ssb_small.png" alt="" title=""></a></div>
						</div>

						<div class="nav-outer clearfix">
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse"
										data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
										aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>

									<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation left-nav clearfix">
											<li><a href="b_account.php" style="color: white;">Account</a></li>
											<li><a href="payment.php" style="color: white;">Payment</a></li>
										</ul>
	
										<ul class="navigation right-nav clearfix">
											<li><a href="b_edit_profile.php" style="color: white;">Edit Profile</a></li>
											<li><a href="#" id="logout-link" style="color: white;">Logout</a></li>
										</ul>
									</div>

							</nav>

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="payment.php"><img src="images/ssb_small.png" alt="" title=""></a></div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					</div>
				</nav>
			</div><!-- End Mobile Menu -->

		</header>
		<!--End Main Header -->

		<!-- Page Title Section -->
		<div class="page-title-section" style="background-image: url(images/background/3.jpg)">
			<div class="auto-container">
				<h1 style="color: white;">Payment</h1>
				<ul class="post-meta">
					<li style="color: white;">35 days of subscription only for 499!</li>
				</ul>
				<br>
				<ul class="post-meta">
					<li style="color: white;">WE ONLY ACCEPT SUBSCRIPTION PAYMENT THROUGH GCASH. THANK YOU!</li>
				</ul>
			</div>
		</div>
		<!-- End Page Title Section -->
	

		  <!--  Payment Section -->
		  <div class="payment_section" style="margin-top: 20px; background-image: url(images/background/4.jpg);">
			<div class="container">
				<form action="payment_process.php" method="POST">
					<div class="input-box">
						<input type="text" name="account_name" placeholder="G-cash Account Name" required />
						<input type="text" name="reference_no" placeholder="Reference Number" required />
						<input type="text" name="amount" placeholder="Amount" required />
						<input type="email" name="email" placeholder="Email Address" required />
						<input type="text" name="contact_no" placeholder="Contact Number" required />
						<button type="submit" class="btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<br>
    

         		<!-- Main Footer -->
			<footer class="main-footer" style="background-image: url(images/background/2.jpg)">
				<div class="auto-container">
					<!--Widgets Section-->
					<div class="widgets-section">
						<div class="row clearfix">

							<!-- Footer Column -->
							<div class="footer-column col-lg-4 col-md-6 col-sm-12">
								<div class="footer-widget office-widget">
									<h4>office</h4>
									<ul class="location-list">
										<li>Centro Oriental  <br> Polangui Albay</li>
										<li><a href="mailto:hello@unorestudio.co">hello@unorestudio.co</a></li>
										<li><a href="tel:+0085-346-2188">+0085 346 2188</a></li>
									</ul>
								</div>
							</div>

							<!-- Footer Column -->
							<div class="footer-column col-lg-4 col-md-12 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
									</div>
								</div>
							</div>

							<!-- Footer Column -->
							<div class="footer-column col-lg-4 col-md-6 col-sm-12">
								<div class="footer-widget twitter-widget">
									<h4>twitter</h4>
									<div class="tweet">
										Looking for a Creative PSD Template? <br> It here: <a href="#"> https://tf.net/OAWS890a</a><br>
										<div class="post-date">2 days ago</div>
									</div>
									<div class="tweet">
										You need an image stock <br> It here: <a href="#"> https://uph.com/567AW1</a><br>
										<div class="post-date">4 days ago</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="footer-bottom">
						<div class="auto-container">
							<div class="copyright">
								<p class="copyright">© 2024 <strong>Sharpside Barber</strong> made with <i class="icofont-heart text-danger" aria-hidden="true"></i> by <a href="https://hasthemes.com/"><strong>Pang S(System)</strong></a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
	</div>

	<!-- Scroll To Top -->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/script.js"></script>


	<!-- Logout to-->
    <script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link action
        if (confirm('Are you sure you want to logout?')) {
            window.location.href = '../../visitor_home_page.php';
        }
    });
    </script>
    <!-- end ng Logout script-->

	

</body>

</html>