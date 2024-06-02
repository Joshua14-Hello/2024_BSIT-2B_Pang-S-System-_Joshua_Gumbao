<?php
session_start();
include_once "db.php";

$user_id = isset($_SESSION['user_info_id']) ? isset($_SESSION['user_info_id']) : '';
$fullname = isset($_SESSION['user_info_fullname']) ? $_SESSION['user_info_fullname'] : '';
$username = isset($_SESSION['user_info_username']) ? $_SESSION['user_info_username'] : '';
$age = isset($_SESSION['user_info_age']) ? $_SESSION['user_info_age'] : '';
$sex = isset($_SESSION['user_info_sex']) ? $_SESSION['user_info_sex'] : '';
$address = isset($_SESSION['user_info_address']) ? $_SESSION['user_info_address'] : '';
$contact_number = isset($_SESSION['user_info_contact_no']) ? $_SESSION['user_info_contact_no'] : '';
$email_address = isset($_SESSION['user_info_email_address']) ? $_SESSION['user_info_email_address'] : '';
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<title>Welcome Customer</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="robots" content="index, follow" />
	<meta name="description" content="Barbero Barber Salon HTML Template has a unique and modern looking design that will make your clients love your website." />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="canonical" href="Replace_with_your_PAGE_URL" />

	<!-- Stylesheets -->
	<link href="css_user/bootstrap.css" rel="stylesheet">
	<link href="css_user/main.css" rel="stylesheet">
	<link href="css_user/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css_user/c_edit_profile.css">

	<!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
	<!-- <meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Barbero - HTML Bootstrap Template" />
	<meta property="og:url" content="PAGE_URL" />
	<meta property="og:site_name" content="SITE_NAME" /> -->
	<!-- For the og:image content, replace the # with a link of an image -->
	<!-- <meta property="og:image" content="#" />
	<meta property="og:description" content="Barbero HTML Bootstrap Template" /> -->

	<!-- Fonts -->
	<link
		href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Karla:wght@400;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<!-- Add site Favicon -->
	<link rel="shortcut icon" href="images/ssb_small.png" type="image/x-icon">
	<link rel="icon" href="images/ssb_small.png" type="image/x-icon">
	<meta name="msapplication-TileImage" content="images/favicon.png" />



</head>

<body>

	<div class="page-wrapper">

		<!-- Main Header-->
		<header class="main-header">

			<!--Header-Upper-->
			<div class="header-upper">
				<div class="auto-container">
					<div class="clearfix">

						<div class="pull-left logo-box">
							<div class="logo"><a href="c_account.php"><img src="images/ssb_small.png" alt="" title=""></a></div>
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
								</div>

								<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation left-nav clearfix">
										<li class="current"><a href="index.php">Home</a></li>
										<li class="current"><a href="c_account.php">Account</a></li>
									</ul>

									<ul class="navigation right-nav clearfix">

										<li class="current"><a href="c_edit_profile.php">Edit Profile</a></li>
										<li class="current"><a href="#" id="logout-link">Logout</a></li>

									</ul>
									

								</div>

							</nav>

					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="index.html"><img src="images/ssb_small.png" alt="" title=""></a></div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					</div>
				</nav>
			</div><!-- End Mobile Menu -->

		</header>
		<!--End Main Header -->

		<!-- Banner Section -->
		<section class="banner-section">
			<div class="main-slider-carousel owl-carousel owl-theme">

				<div class="slide" style="background-image: url(images/main-slider/1.jpg)">
					<div class="auto-container">

						<div class="content-boxed">
							<div class="inner-box">
								<div class="title">Since 2024</div>
								<h1>Sharpside Barber</h1>
								<h2 style="color: gold">Hello <?php echo $_SESSION['user_info_username'];?>!</h2>
							</div>
						</div>

					</div>
				</div>
		</section>

        <!-- Account Section -->
        <div class="video-background">
            <video autoplay muted loop>
                <source src="images/background/profile_backg.mp4" type="video/mp4">
            </video>
        </div>

        <div class="profile-container">
            
            <div class="profile-info">
                
                <div class="user-details">
                    <h1 class="user-name"><?php echo $fullname; ?></h1>
                </div>
            </div>
            <div class="profile-section">
                <h2>Profile</h2>
                <form>
                    <p class="user-details">Username: <input style="color: black;" value="<?php echo $username; ?>" readonly></p>
                    <p class="user-details">Age: <input style="color: black;" value="<?php echo $age; ?>" readonly></p>
                    <p class="user-details">Sex: <input style="color: black;" value="<?php echo $sex; ?>" readonly></p>
                    <p class="user-details">Address: <input style="color: black;" value="<?php echo $address; ?>" readonly></p>
                    <p class="user-details">Contact Number: <input style="color: black;" value="<?php echo $contact_number; ?>" readonly></p>
                    <p class="user-details">Email Address: <input style="color: black;" value="<?php echo $email_address; ?>" readonly></p>
                </form>
            </div>
        </div>
        <!-- End Account Section -->

        <!-- Appointments Section -->
		<section class="testimonial-section" id="appointments" style="background-image: url(images/background/1.jpg)">
			<div class="title-box">
				<h2 id="appointments">Your Appointments:</h2>
			</div>
			<div class="appointments_table">
				<div class="row mr-5 ml-5 mb-5">
					<div class="col">
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered text-center">
									<tr class="bg-dark text-white">
										<td>Appointments</td>
										<td>Status</td>
									</tr>
									<?php
									include('c_appointments_display.php');
									while ($row = mysqli_fetch_assoc($result_appointments)) {
									?>   
										<tr>   
											<td>
												<p>
													<strong><?php echo htmlspecialchars($row['user_name']); ?></strong> set an appointment with barber <strong><?php echo htmlspecialchars($row['barber_name']); ?></strong> on <strong><?php echo htmlspecialchars($row['appointment_date_time']); ?></strong>.<br>
													Selected Services: <?php echo htmlspecialchars($row['appointment_deets']); ?><br>
													Total Price: <strong><?php echo htmlspecialchars($row['total_price']); ?></strong>
												</p>
											</td> 
											<td><?php echo htmlspecialchars($row['status']); ?></td>
										</tr>
									<?php
									}
									?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Appointments Section -->

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
									<li>166 Sta. Felomina Street, Centro Oriental, Polangui <br> Philippines</li>
									<li><a href="mailto:hello@unorestudio.co">hello@unorestudio.co</a></li>
									<li><a href="tel:+0085-346-2188">+0085 346 2188</a></li>
								</ul>
								<!-- Social Box -->
								<ul class="social-box">
									<li><a href="https://twitter.com/" class="icofont-twitter"></a></li>
									<li class="facebook"><a href="http://facebook.com/" class="icofont-facebook"></a></li>
									<li class="google"><a href="https://www.google.com/" class="icofont-google-plus"></a></li>
									<li class="behance"><a href="https://www.behance.net/" class="icofont-behance"></a></li>
									<li class="instagram"><a href="https://www.instagram.com/" class="icofont-instagram"></a></li>
								</ul>
							</div>
						</div>

						<!-- Footer Column -->
						<div class="footer-column col-lg-4 col-md-12 col-sm-12">
							<div class="footer-widget logo-widget">
								<div class="logo">
									<a href="index.html"><img src="images/ssb_footer.png" alt="" /></a>
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
			</div>
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="copyright">
						<p class="copyright">© 2024 <strong>Sharpside Barber</strong> Made with <i class="icofont-heart text-danger" aria-hidden="true"></i> by <a href="https://hasthemes.com/"><strong>Pang S(System)</strong></a>.</p>
					</div>
				</div>
			</div>
		</footer>

	</div>
	<!--End pagewrapper-->



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
	<script src="js/isotope.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/script.js"></script>
	
	<script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link action
        if (confirm('Are you sure you want to logout?')) {
            window.location.href = '../visitor_home_page.php'; // Redirect to the logout page
        }
    });
    </script>



</body>

</html>