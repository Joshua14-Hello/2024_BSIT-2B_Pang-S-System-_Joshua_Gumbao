<?php
include_once('db.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<title>Welcome Customer</title>
	<style>
		.barber_form_container {
			padding: 20px;
			background-color: #f8f9fa;
			text-align: center;
			
		}
		.row {
            display: flex;
            flex-wrap: wrap;
        }
		.col-4 {
            width: 33.3333%;
            padding: 15px;
            box-sizing: border-box;
         }

		.barber-box {
			color: white;
			padding: 20px;
			margin-top: 20px;
			border: 1px solid #ccc;
			border-radius: 8px;
			backdrop-filter: blur(10px);
			box-shadow: 0 0 20px black;
		
			background-color: #333; /* Ensure the text color is visible on a dark background */
		}

		select {
			display: block;
			width: 100%;
			padding: 5px;
			margin-bottom: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			background-color: #fff;
			color: #000;
        }

		.checkboxes {
			display: flex;
			flex-direction: column;
		}

		.checkboxes label {
			margin-bottom: 5px;
		}

		.checkboxes input {
			margin-right: 10px;
		}

        .mr-5 {
            margin-right: 3rem;
        }
        .ml-5 {
            margin-left: 3rem;
        }
        .mb-5 {
            margin-bottom: 3rem;
        }

		.choose{
			position:relative;
			color:#ad9a7c;
			font-size:48px;
			font-weight:700;
			line-height:1em;
			transition:all 500ms ease;
			-moz-transition:all 500ms ease;
			-webkit-transition:all 500ms ease;
			-ms-transition:all 500ms ease;
			-o-transition:all 500ms ease;
			display: flex;
			justify-content: center; /* Centers horizontally */
            align-items: center; /* Centers vertically */
		}
		.choose:hover{
        	color:#111111;
		}
     </style>
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
							<div class="logo"><a href="index.php"><img src="images/ssb_small.png" alt="" title=""></a></div>
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
								<h2>Haircut, Shave <br> & Barber</h2>
							</div>
						</div>

					</div>
				</div>



		      </section>
		      <!-- End Banner Section -->

		       <!-- Reserve Section -->
		       <section class="reserve-section">
			   <div class="auto-container">
				<div class="inner-container">
					<div class="row clearfix">

						<!-- Logo Column -->
						<div class="logo-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="images/resource/reserve.png" alt="" />
								</div>
							</div>
						</div>

						<!-- Content Column -->
						<div class="content-column">
							<div class="inner-column">
								<h2>WELCOME TO OUR PLATFORM <h2 style="color: gold"><?php echo $_SESSION['user_info_username']; ?>!</h2></h2>
								<hr>
								<h2>Haircut & Shaving Barbershop</h2>
								<p>Welcome to Sharpside Barber, your go-to platform for finding and booking appointments with the best barbers in your area. We understand that your time is valuable, and finding a quality barber should be hassle-free and convenient. With our user-friendly website, you can easily browse through a selection of skilled barbers, read reviews, and book an appointment that fits your schedule—all from the comfort of your home. Whether you need a quick trim, a stylish haircut, or a relaxing grooming session, Sharpside Barber connects you with top-rated barbers near you. <br> Try our service today and experience the convenience of a seamless online booking process that saves you time and effort, ensuring you always look your best.</p>
								<div class="reserve"> Book Now</div>
								<div class="choose">Choose Your Barber</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Reserve Section -->
	<div class="choose">Junior Barber</div>
	<form method="post" action="c_appointment_process.php">
    <div class="barber_form_container">
        <div class="row mr-5 ml-5 mb-5">
            <?php
            include_once('db.php'); // Include your database connection file

            // Fetch junior barbers with additional information from the database
            $sql = "SELECT barber.*, user_information.username, user_information.age, user_information.address, user_information.contact_number, user_information.email_address
                    FROM barber
                    INNER JOIN user_information ON barber.user_id = user_information.user_id
                    WHERE barber.barber_type = 'Junior'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Extract barber's details
                    $barberId = $row['barber_id'];
                    $username = $row['username'];
                    $age = $row['age'];
                    $address = $row['address'];
                    $contactNumber = $row['contact_number'];
                    $emailAddress = $row['email_address'];

                    // Display each junior barber's details within a box
                    echo "<div class='col-4'>";
                    echo "<div class='barber-box'>";
                    echo "<h3>$username</h3>";
					echo "<hr>";
                    echo "<h5>$row[barber_type] Barber</h5>";
                    echo "<p>Age: $age</p>";
                    echo "<p>Address: $address</p>";    
                    echo "<p>Contact Number: $contactNumber</p>";
                    echo "<p>Email Address: $emailAddress</p>";

                    // Fetch and display service and price information from pricing_junior table
                    $pricingSql = "SELECT services.service_description, pricing_junior.price FROM pricing_junior INNER JOIN services ON pricing_junior.service_id = services.service_id";
                    $pricingResult = mysqli_query($conn, $pricingSql);

                    if (mysqli_num_rows($pricingResult) > 0) {
                        echo "<div class='pricing-info'>";
                        echo "<h4>Services and Prices:</h4>";
                        echo "<ul>";
                        while ($pricingRow = mysqli_fetch_assoc($pricingResult)) {
                            $serviceDescription = $pricingRow['service_description'];
                            $price = $pricingRow['price'];
                            echo "<li>$serviceDescription: $price <input type='checkbox' class='service-checkbox' value='$serviceDescription:$price'></li>";
                        }
                        echo "</ul>";
                        echo "</div>"; // Close pricing-info
                    } else {
                        echo "<p>No pricing information available.</p>";
                    }

                    // Date and time picker for appointment
                    echo "<div class='appointment-datetime mt-3'>";
                    echo "<label for='appointment-date-$username'>Select Appointment Date:</label>";
                    echo "<input type='date' id='appointment-date-$username' class='form-control appointment-date-input'>";
                    echo "<label for='appointment-time-$username'>Select Appointment Time:</label>";
                    echo "<input type='time' id='appointment-time-$username' class='form-control appointment-time-input'>";
                    echo "</div>";

                    // Book Now button for each barber
                    echo "<div class='text-center mt-3'><button type='button' class='btn btn-primary book-now'>Book Now</button></div>";
                    echo "<div class='selected-services mt-3' style='display: none;'>";
                    echo "<h4>Selected Services:</h4>";
                    // Replace the <ul> element with a <textarea>
                    echo "<textarea class='selected-services-list form-control' rows='5' readonly style='color: black;'></textarea>";
                    echo "<p class='total-price'></p>";
                    echo "<p class='selected-datetime'></p>";
                    echo "<div class='text-center mt-3'>";
                    echo "<button type='button' class='btn btn-success submit-booking' data-barber-id='$barberId'>Submit</button>";
                    echo "<button type='button' class='btn btn-danger cancel-booking'>Cancel</button>";
                    echo "</div>"; // Close text-center
                    echo "</div>"; // Close selected-services

                    echo "</div>"; // Close barber-box
                    echo "</div>"; // Close col-4
                }
            } else {
                // Display a message if no junior barbers are found
                echo "<div class='col-12'>";
                echo "<div class='alert alert-info'>No junior barbers found.</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- Hidden fields for submitting the booking -->
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_info_id']; ?>"> <!-- Replace with dynamic user ID -->
    <input type="hidden" name="barber_id" id="barber_id">
    <input type="hidden" name="total_price" id="total_price">
    <input type="hidden" name="services" id="services">
    <input type="hidden" name="appointment_date_time" id="appointment_date_time">
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.book-now').forEach(function(button) {
        button.addEventListener('click', function() {
            const barberBox = this.closest('.barber-box');
            const checkboxes = barberBox.querySelectorAll('.service-checkbox:checked');
            const selectedServicesTextarea = barberBox.querySelector('.selected-services-list');
            const totalPriceElement = barberBox.querySelector('.total-price');
            const selectedDatetimeElement = barberBox.querySelector('.selected-datetime');
            const selectedServicesBox = barberBox.querySelector('.selected-services');
            const appointmentDateInput = barberBox.querySelector('.appointment-date-input');
            const appointmentTimeInput = barberBox.querySelector('.appointment-time-input');

            let totalPrice = 0;
            let selectedServicesText = '';

            // Add selected services to the textarea
            checkboxes.forEach(function(checkbox) {
                const [serviceDescription, price] = checkbox.value.split(':');
                selectedServicesText += `${serviceDescription} - Price: ${price}\n`;

                // Calculate the total price
                totalPrice += parseFloat(price);
            });

            // Display the selected services in the textarea
            selectedServicesTextarea.value = selectedServicesText;

            // Display the total price
            totalPriceElement.textContent = `Total Price: ₱${totalPrice.toFixed(2)}`;

            // Display the selected date and time
            selectedDatetimeElement.textContent = `Appointment Date and Time: ${appointmentDateInput.value} ${appointmentTimeInput.value}`;

            // Show the selected services box
            selectedServicesBox.style.display = 'block';
        });
    });

    // Handle submit booking
    document.querySelectorAll('.submit-booking').forEach(function(button) {
        button.addEventListener('click', function() {
            const barberBox = this.closest('.barber-box');
            const barberId = this.getAttribute('data-barber-id');
            const selectedServicesTextarea = barberBox.querySelector('.selected-services-list');
            const totalPriceElement = barberBox.querySelector('.total-price').textContent;
            const appointmentDateInput = barberBox.querySelector('.appointment-date-input').value;
            const appointmentTimeInput = barberBox.querySelector('.appointment-time-input').value;

            // Populate hidden form fields
            document.getElementById('barber_id').value = barberId;
            document.getElementById('total_price').value = totalPriceElement.replace('Total Price: ₱', '');
            document.getElementById('services').value = selectedServicesTextarea.value;
            document.getElementById('appointment_date_time').value = `${appointmentDateInput} ${appointmentTimeInput}`;

            // Submit the form
            document.querySelector('form').submit();
        });
    });

    // Handle cancel booking
    document.querySelectorAll('.cancel-booking').forEach(function(button) {
        button.addEventListener('click', function() {
            const barberBox = this.closest('.barber-box');
            const selectedServicesBox = barberBox.querySelector('.selected-services');
            selectedServicesBox.style.display = 'none';
            selectedServicesBox.querySelector('.selected-services-list').value = '';
            selectedServicesBox.querySelector('.total-price').textContent = '';
            selectedServicesBox.querySelector('.selected-datetime').textContent = '';
        });
    });
});

</script>


<div class="choose">Senior Barber</div>
<form method="post" action="c_appointment_process.php">
    <div class="barber_form_container">
        <div class="row mr-5 ml-5 mb-5">
            <?php
            include_once('db.php'); // Include your database connection file

            // Fetch Senior barbers with additional information from the database
            $sql = "SELECT barber.*, user_information.username, user_information.age, user_information.address, user_information.contact_number, user_information.email_address
                    FROM barber
                    INNER JOIN user_information ON barber.user_id = user_information.user_id
                    WHERE barber.barber_type = 'Senior'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Extract barber's details
                    $barberId = $row['barber_id'];
                    $username = $row['username'];
                    $age = $row['age'];
                    $address = $row['address'];
                    $contactNumber = $row['contact_number'];
                    $emailAddress = $row['email_address'];

                    // Display each Senior barber's details within a box
                    echo "<div class='col-4'>";
                    echo "<div class='barber-box'>";
                    echo "<h3>$username</h3>";
					echo "<hr>";
                    echo "<h5>$row[barber_type] Barber</h5>";
                    echo "<p>Age: $age</p>";
                    echo "<p>Address: $address</p>";    
                    echo "<p>Contact Number: $contactNumber</p>";
                    echo "<p>Email Address: $emailAddress</p>";

                    // Fetch and display service and price information from pricing_senior table
                    $pricingSql = "SELECT services.service_description, pricing_senior.price FROM pricing_senior INNER JOIN services ON pricing_senior.service_id = services.service_id";
                    $pricingResult = mysqli_query($conn, $pricingSql);

                    if (mysqli_num_rows($pricingResult) > 0) {
                        echo "<div class='pricing-info'>";
                        echo "<h4>Services and Prices:</h4>";
                        echo "<ul>";
                        while ($pricingRow = mysqli_fetch_assoc($pricingResult)) {
                            $serviceDescription = $pricingRow['service_description'];
                            $price = $pricingRow['price'];
                            echo "<li>$serviceDescription: $price <input type='checkbox' class='service-checkbox' value='$serviceDescription:$price'></li>";
                        }
                        echo "</ul>";
                        echo "</div>"; // Close pricing-info
                    } else {
                        echo "<p>No pricing information available.</p>";
                    }

                    // Date and time picker for appointment
                    echo "<div class='appointment-datetime mt-3'>";
                    echo "<label for='appointment-date-$username'>Select Appointment Date:</label>";
                    echo "<input type='date' id='appointment-date-$username' class='form-control appointment-date-input'>";
                    echo "<label for='appointment-time-$username'>Select Appointment Time:</label>";
                    echo "<input type='time' id='appointment-time-$username' class='form-control appointment-time-input'>";
                    echo "</div>";

                    // Book Now button for each barber
                    echo "<div class='text-center mt-3'><button type='button' class='btn btn-primary book-now'>Book Now</button></div>";
                    echo "<div class='selected-services mt-3' style='display: none;'>";
                    echo "<h4>Selected Services:</h4>";
                    // Replace the <ul> element with a <textarea>
                    echo "<textarea class='selected-services-list form-control' rows='5' readonly style='color: black;'></textarea>";
                    echo "<p class='total-price'></p>";
                    echo "<p class='selected-datetime'></p>";
                    echo "<div class='text-center mt-3'>";
                    echo "<button type='button' class='btn btn-success submit-booking' data-barber-id='$barberId'>Submit</button>";
                    echo "<button type='button' class='btn btn-danger cancel-booking'>Cancel</button>";
                    echo "</div>"; // Close text-center
                    echo "</div>"; // Close selected-services

                    echo "</div>"; // Close barber-box
                    echo "</div>"; // Close col-4
                }
            } else {
                // Display a message if no Senior barbers are found
                echo "<div class='col-12'>";
                echo "<div class='alert alert-info'>No senior barbers found.</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- Hidden fields for submitting the booking -->
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_info_id']; ?>"> <!-- Replace with dynamic user ID -->
    <input type="hidden" name="barber_id" id="barber_id">
    <input type="hidden" name="total_price" id="total_price">
    <input type="hidden" name="services" id="services">
    <input type="hidden" name="appointment_date_time" id="appointment_date_time">
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.book-now').forEach(function(button) {
        button.addEventListener('click', function() {
            const barberBox = this.closest('.barber-box');
            const checkboxes = barberBox.querySelectorAll('.service-checkbox:checked');
            const selectedServicesTextarea = barberBox.querySelector('.selected-services-list');
            const totalPriceElement = barberBox.querySelector('.total-price');
            const selectedDatetimeElement = barberBox.querySelector('.selected-datetime');
            const selectedServicesBox = barberBox.querySelector('.selected-services');
            const appointmentDateInput = barberBox.querySelector('.appointment-date-input');
            const appointmentTimeInput = barberBox.querySelector('.appointment-time-input');

            let totalPrice = 0;
            let selectedServicesText = '';

            // Add selected services to the textarea
            checkboxes.forEach(function(checkbox) {
                const [serviceDescription, price] = checkbox.value.split(':');
                selectedServicesText += `${serviceDescription} - Price: ${price}\n`;

                // Calculate the total price
                totalPrice += parseFloat(price);
            });

            // Display the selected services in the textarea
            selectedServicesTextarea.value = selectedServicesText;

            // Display the total price
            totalPriceElement.textContent = `Total Price: ₱${totalPrice.toFixed(2)}`;

            // Display the selected date and time
            selectedDatetimeElement.textContent = `Appointment Date and Time: ${appointmentDateInput.value} ${appointmentTimeInput.value}`;

            // Show the selected services box
            selectedServicesBox.style.display = 'block';
        });
    });

    // Handle submit booking
    document.querySelectorAll('.submit-booking').forEach(function(button) {
        button.addEventListener('click', function() {
            const barberBox = this.closest('.barber-box');
            const barberId = this.getAttribute('data-barber-id');
            const selectedServicesTextarea = barberBox.querySelector('.selected-services-list');
            const totalPriceElement = barberBox.querySelector('.total-price').textContent;
            const appointmentDateInput = barberBox.querySelector('.appointment-date-input').value;
            const appointmentTimeInput = barberBox.querySelector('.appointment-time-input').value;

            // Populate hidden form fields
            document.getElementById('barber_id').value = barberId;
            document.getElementById('total_price').value = totalPriceElement.replace('Total Price: ₱', '');
            document.getElementById('services').value = selectedServicesTextarea.value;
            document.getElementById('appointment_date_time').value = `${appointmentDateInput} ${appointmentTimeInput}`;

            // Submit the form
            document.querySelector('form').submit();
        });
    });

    // Handle cancel booking
    document.querySelectorAll('.cancel-booking').forEach(function(button) {
        button.addEventListener('click', function() {
            const barberBox = this.closest('.barber-box');
            const selectedServicesBox = barberBox.querySelector('.selected-services');
            selectedServicesBox.style.display = 'none';
            selectedServicesBox.querySelector('.selected-services-list').value = '';
            selectedServicesBox.querySelector('.total-price').textContent = '';
            selectedServicesBox.querySelector('.selected-datetime').textContent = '';
        });
    });
});

</script>


<div class="choose">Specialist Barber</div>
<form method="post" action="c_appointment_process.php">
    <div class="barber_form_container">
        <div class="row mr-5 ml-5 mb-5">
            <?php
            include_once('db.php'); // Include your database connection file

            // Fetch Specialist barbers with additional information from the database
            $sql = "SELECT barber.*, user_information.username, user_information.age, user_information.address, user_information.contact_number, user_information.email_address
                    FROM barber
                    INNER JOIN user_information ON barber.user_id = user_information.user_id
                    WHERE barber.barber_type = 'Specialist'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Extract barber's details
                    $barberId = $row['barber_id'];
                    $username = $row['username'];
                    $age = $row['age'];
                    $address = $row['address'];
                    $contactNumber = $row['contact_number'];
                    $emailAddress = $row['email_address'];

                    // Display each specialist barber's details within a box
                    echo "<div class='col-4'>";
                    echo "<div class='barber-box'>";
                    echo "<h3>$username</h3>";
					echo "<hr>";
                    echo "<h5>$row[barber_type] Barber</h5>";
                    echo "<p>Age: $age</p>";
                    echo "<p>Address: $address</p>";    
                    echo "<p>Contact Number: $contactNumber</p>";
                    echo "<p>Email Address: $emailAddress</p>";

                    // Fetch and display service and price information from pricing_specialist table
                    $pricingSql = "SELECT services.service_description, pricing_specialist.price FROM pricing_specialist INNER JOIN services ON pricing_specialist.service_id = services.service_id";
                    $pricingResult = mysqli_query($conn, $pricingSql);

                    if (mysqli_num_rows($pricingResult) > 0) {
                        echo "<div class='pricing-info'>";
                        echo "<h4>Services and Prices:</h4>";
                        echo "<ul>";
                        while ($pricingRow = mysqli_fetch_assoc($pricingResult)) {
                            $serviceDescription = $pricingRow['service_description'];
                            $price = $pricingRow['price'];
                            echo "<li>$serviceDescription: $price <input type='checkbox' class='service-checkbox' value='$serviceDescription:$price'></li>";
                        }
                        echo "</ul>";
                        echo "</div>"; // Close pricing-info
                    } else {
                        echo "<p>No pricing information available.</p>";
                    }

                    // Date and time picker for appointment
                    echo "<div class='appointment-datetime mt-3'>";
                    echo "<label for='appointment-date-$username'>Select Appointment Date:</label>";
                    echo "<input type='date' id='appointment-date-$username' class='form-control appointment-date-input'>";
                    echo "<label for='appointment-time-$username'>Select Appointment Time:</label>";
                    echo "<input type='time' id='appointment-time-$username' class='form-control appointment-time-input'>";
                    echo "</div>";

                    // Book Now button for each barber
                    echo "<div class='text-center mt-3'><button type='button' class='btn btn-primary book-now'>Book Now</button></div>";
                    echo "<div class='selected-services mt-3' style='display: none;'>";
                    echo "<h4>Selected Services:</h4>";
                    // Replace the <ul> element with a <textarea>
                    echo "<textarea class='selected-services-list form-control' rows='5' readonly style='color: black;'></textarea>";
                    echo "<p class='total-price'></p>";
                    echo "<p class='selected-datetime'></p>";
                    echo "<div class='text-center mt-3'>";
                    echo "<button type='button' class='btn btn-success submit-booking' data-barber-id='$barberId'>Submit</button>";
                    echo "<button type='button' class='btn btn-danger cancel-booking'>Cancel</button>";
                    echo "</div>"; // Close text-center
                    echo "</div>"; // Close selected-services

                    echo "</div>"; // Close barber-box
                    echo "</div>"; // Close col-4
                }
            } else {
                // Display a message if no specialist barbers are found
                echo "<div class='col-12'>";
                echo "<div class='alert alert-info'>No specialist barbers found.</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- Hidden fields for submitting the booking -->
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_info_id']; ?>"> <!-- Replace with dynamic user ID -->
    <input type="hidden" name="barber_id" id="barber_id">
    <input type="hidden" name="total_price" id="total_price">
    <input type="hidden" name="services" id="services">
    <input type="hidden" name="appointment_date_time" id="appointment_date_time">
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.book-now').forEach(function(button) {
        button.addEventListener('click', function() {
            const barberBox = this.closest('.barber-box');
            const checkboxes = barberBox.querySelectorAll('.service-checkbox:checked');
            const selectedServicesTextarea = barberBox.querySelector('.selected-services-list');
            const totalPriceElement = barberBox.querySelector('.total-price');
            const selectedDatetimeElement = barberBox.querySelector('.selected-datetime');
            const selectedServicesBox = barberBox.querySelector('.selected-services');
            const appointmentDateInput = barberBox.querySelector('.appointment-date-input');
            const appointmentTimeInput = barberBox.querySelector('.appointment-time-input');

            let totalPrice = 0;
            let selectedServicesText = '';

            // Add selected services to the textarea
            checkboxes.forEach(function(checkbox) {
                const [serviceDescription, price] = checkbox.value.split(':');
                selectedServicesText += `${serviceDescription} - Price: ${price}\n`;

                // Calculate the total price
                totalPrice += parseFloat(price);
            });

            // Display the selected services in the textarea
            selectedServicesTextarea.value = selectedServicesText;

            // Display the total price
            totalPriceElement.textContent = `Total Price: ₱${totalPrice.toFixed(2)}`;

            // Display the selected date and time
            selectedDatetimeElement.textContent = `Appointment Date and Time: ${appointmentDateInput.value} ${appointmentTimeInput.value}`;

            // Show the selected services box
            selectedServicesBox.style.display = 'block';
        });
    });

    // Handle submit booking
    document.querySelectorAll('.submit-booking').forEach(function(button) {
        button.addEventListener('click', function() {
            const barberBox = this.closest('.barber-box');
            const barberId = this.getAttribute('data-barber-id');
            const selectedServicesTextarea = barberBox.querySelector('.selected-services-list');
            const totalPriceElement = barberBox.querySelector('.total-price').textContent;
            const appointmentDateInput = barberBox.querySelector('.appointment-date-input').value;
            const appointmentTimeInput = barberBox.querySelector('.appointment-time-input').value;

            // Populate hidden form fields
            document.getElementById('barber_id').value = barberId;
            document.getElementById('total_price').value = totalPriceElement.replace('Total Price: ₱', '');
            document.getElementById('services').value = selectedServicesTextarea.value;
            document.getElementById('appointment_date_time').value = `${appointmentDateInput} ${appointmentTimeInput}`;

            // Submit the form
            document.querySelector('form').submit();
        });
    });

    // Handle cancel booking
    document.querySelectorAll('.cancel-booking').forEach(function(button) {
        button.addEventListener('click', function() {
            const barberBox = this.closest('.barber-box');
            const selectedServicesBox = barberBox.querySelector('.selected-services');
            selectedServicesBox.style.display = 'none';
            selectedServicesBox.querySelector('.selected-services-list').value = '';
            selectedServicesBox.querySelector('.total-price').textContent = '';
            selectedServicesBox.querySelector('.selected-datetime').textContent = '';
        });
    });
});

</script>


<!-- pastes here the html changes for the appointment-->


	
   <!-- Testimonial Section -->
   <section class="testimonial-section" style="background-image: url(images/background/1.jpg)">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <div class="logo-box">
                    <img src="images/resource/ssb_testimonial.png" alt="" />
                </div>
                <h2>Feedback</h2>
                <!-- Feedback box -->
                <div class="container_feedback">
                    <p>We value your feedback. Please share your thoughts with us:</p>
                    <form action="submit_feedback.php" method="post">
                        <textarea id="feedback" name="feedback" placeholder="What are your thoughts about our website..."></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- End Title Box -->

            <div class="testimonial-outer">
                <div class="quote-icon">
                    <span class="quote"></span>
                </div>
			   <!--Client Testimonial Carousel-->             
			  <div class="client-testimonial-carousel owl-carousel owl-theme">

				  <!-- Testimonial Block -->
				  <?php
                  // Include your database connection script
                  include 'db.php';

                   // Fetch feedback from the database
                  $sql_select_feedback = "SELECT * FROM feedback ORDER BY date_added DESC"; // Remove LIMIT to fetch all records
                  $result = mysqli_query($conn, $sql_select_feedback);



                    if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                     echo "<div class='testimonial-block'>";
                     echo "<div class='inner-box'>";
                     echo "<p>" . $row['feedback_description'] . "</p>";

					 echo "<p>Date Added: " . $row['date_added'] . "</p>";
                     // You can add additional information such as user's name, date, etc. if needed
                     echo "</div>";
                     echo "</div>";
                            }
                     } else {
                     echo "<div class='testimonial-block'>";
                     echo "<div class='inner-box'>";
                     echo "No feedback yet.";
                     echo "</div>";
                     echo "</div>";
                         }
                        ?>



			          <!--Product Thumbs Carousel-->
			          <div class="client-thumb-outer">
				      <div class="client-thumbs-carousel owl-carousel owl-theme">
					 <div class="thumb-item">
						 <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt=""></figure>
					  </div>
					  <div class="thumb-item">
						 <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt=""></figure>
					  </div>
					  <div class="thumb-item">
						 <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt=""></figure>
					  </div>
					  <div class="thumb-item">
						 <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt=""></figure>
					  </div>
					  <div class="thumb-item">
						 <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt=""></figure>
					  </div>
					  <div class="thumb-item">
						 <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt=""></figure>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>
		
<!-- paste here feedback-->			<!-- End Team Section -->

		


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