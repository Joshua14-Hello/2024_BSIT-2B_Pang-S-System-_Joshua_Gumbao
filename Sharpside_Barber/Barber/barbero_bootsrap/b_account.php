<?php
include_once('db.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<title>Welcome Barber</title>
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/b_edit_profile.css" rel="stylesheet">

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
							<div class="logo"><a href="b_account.php"><img src="images/ssb_small.png" alt="" title=""></a></div>
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
										<li class="current"><a href="b_account.php" style="color: white;">Account</a></li>
										<li><a href="payment.php" style="color: white;">Payment</a></li>
									</ul>

									<ul class="navigation right-nav clearfix">
										<li><a href="b_edit_profile.php" style="color: white;">Edit Profile</a></li>
										<li><a href="#" id="logout-link" style="color: white;">Logout</a></li>
									</ul>
								</div>

							</nav>

			<!--End Header Upper-->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="profile.php"><img src="images/ssb_small.png" alt="" title=""></a></div>
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
								<h2 style="color: gold">Hello barber <?php echo $_SESSION['user_info_username']; ?>!</h2>
							</div>
						</div>
					</div>
				</div>
		</section>
		<!-- End Banner Section -->

		<!-- Account Section -->
		<section class="reserve-section">
			<div class="profile-container">
				<div class="profile-info">
					<div class="video-background">
						<video autoplay muted loop>
							<source src="images/background/profile_backg.mp4" type="video/mp4">
						</video>
					</div>
					<div class="user-details">
						<?php include 'b_account_process.php'; ?>
						<h2 class="user-name"><?php echo $fullname; ?></h2>
					</div>
				</div>
				<div class="profile-section">
					<h2>Account</h2>
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
			<script src="js/user_profile.js"></script>
		</section>
		<!-- Account Section -->

		<!-- Services and Prices Section -->
		<section class="testimonial-section" style="background-image: url(images/background/1.jpg)">
			<div class="title-box">
				<h2><?php echo $barber_type; ?> Barber</h2>
				<h3>Offered Services and Prices</h3>
			</div>
			<div class="row justify-content-center mt-4 mb-4"> <!-- Center the column -->
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<table class="table table-bordered text-center">
								<tr class="bg-dark text-white">
									<td>Service Description</td>
									<td>Price</td>
								</tr>
								<?php
								// Include service_price.php to fetch and display the pricing table
								include 'service_price.php';
								if (!empty($service_data)) {
									foreach ($service_data as $row) {
										echo "<tr>";
										echo "<td>" . $row['service_description'] . "</td>";
										echo "<td>" . $row['price'] . "</td>";
										echo "</tr>";
									}
								}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End ng Services and Prices Section -->

		<!-- Appointments Section -->
		<section class="testimonial-section" style="background-image: url(images/background/1.jpg)">
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
										<td>Actions</td>
									</tr>
									<?php
									include('b_appointments_process.php');
									// Loop through the appointment results
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
											<td>
												<!-- Form for confirm button -->
												<form method="post" action="b_appointments_process.php" style="display:inline;">
													<input type="hidden" name="appointment_id" value="<?php echo $row['appointment_id']; ?>">
													<button type="submit" class="btn btn-success" name="confirm_appointment">Confirm</button>
												</form>
												<!-- Form for reject button -->
												<form method="post" action="b_appointments_process.php" style="display:inline;">
													<input type="hidden" name="appointment_id" value="<?php echo $row['appointment_id']; ?>">
													<button type="submit" class="btn btn-danger" name="reject_appointment">Reject</button>
												</form>
											</td>
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

		<!-- Report and Feedback Section -->
		<section class="team-section">
			<div class="auto-container">
				<div class="section-title centered light" id="report">
					<h2>Report</h2>
				</div>
				<form action="submit_report.php" method="post">
					<div>
						<textarea name="report" placeholder="Enter your report here"></textarea>
					</div>
					<div>
						<button type="submit" name="submit_report" class="btn btn-danger">Submit Report</button>
					</div>
				</form>
				<br><br><br><br><br>

				<div class="section-title centered light" id="feedback">
					<h2>Feedback</h2>
				</div>
				<form action="submit_feedback.php" method="post">
					<div>
						<textarea name="feedback" placeholder="Enter your feedback here"></textarea>
					</div>
					<div>
						<button type="submit" name="submit_feedback" class="btn btn-primary">Submit Feedback</button>
					</div>
				</form>
			</div>
		</section>
		<!-- End Feedback Section -->

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

	<!-- Search Popup -->
	<div class="search-popup">
		<button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
		<button class="close-search"><span class="icofont-arrow-up"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</div>
	<!-- End Header Search -->

		<div class="logout-button" style="position: fixed; top: 20px; right: 20px">
			<a href="logout.php" style="color: white">Logout</a>
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
	<script src="js/isotope.js"></script>
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