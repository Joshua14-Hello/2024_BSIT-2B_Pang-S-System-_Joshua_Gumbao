<?php
include_once('db.php');
session_start();
// Fetch the pricing data for each barber type
$result_pricing_specialist = mysqli_query($conn, "SELECT * FROM services");
$result_pricing_senior = mysqli_query($conn, "SELECT * FROM services");
$result_pricing_junior = mysqli_query($conn, "SELECT * FROM services");

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>

    <!-- Stylesheets -->
    <link href="css/operations.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Karla:wght@400;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Add site Favicon -->
    <link rel="icon" href="images/resource/ssb_small.png">
</head>

<body>

    <!-- Main Header-->
    <header class="main-header">
        <nav class="navbar">
            <a href="operations.php" class="active">Operations</a>
            <a href="management.php">Management</a>
            <div class="logo"><img src="images/resource/ssb_small.png" alt="" title="Sharpside Barber" height="80"></div>
            <a href="a_edit_profile.php">Edit Profile</a>
            <a href="#" id="logout-link">Logout</a>
        </nav>
    </header>
    <!--End Main Header -->

    <!-- Page title Section -->
    <div class="page-title-section" style="background-image: url(images/background/4.jpg)">
        <div class="auto-container">
            <h2 style="color: gold">Hello admin <?php echo $_SESSION['user_info_username']; ?>!</h2>
            <h1 style="color: white; font-size: 200px">Operations</h1>
            <p style="color: gold; font-size: 25px">Applications / Services / Pricing / Appointments</p>
        </div>
    </div>
    <!-- End of Page title Section -->

    <!-- Applications Section -->
    <section class="applications_section" id="applications" style="text-align: center; color: black;">
        <h2>Applications</h2>
        <div class="applications_table">
            <div class="row mr-3 ml-3 mb-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>User ID</td>
                                    <td>Fullname</td>
                                    <td>Username</td>
                                    <td>Age</td>
                                    <td>Sex</td>
                                    <td>Contact Number</td>
                                    <td>Email Address</td>
                                    <td>Address</td>
                                    <td>Date Added</td>
                                    <td>Barber Type</td>
                                    <td>Confirm</td>
                                    <td>Reject</td>
                                </tr>
                                <?php include('operations/applications_process.php'); ?>
                                <?php while($row = mysqli_fetch_assoc($result_applications)) { ?>
                                <tr>
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                                        <td><?php echo $row['user_id']; ?></td>
                                        <td><?php echo $row['fullname']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['age']; ?></td>
                                        <td><?php echo $row['sex']; ?></td>
                                        <td><?php echo $row['contact_number']; ?></td>
                                        <td><?php echo $row['email_address']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['date_added']; ?></td>
                                        <td>
                                            <select name="barber_type" required>
                                                <option value="" disabled selected>Choose barber type</option>
                                                <option value="Junior">Junior</option>
                                                <option value="Senior">Senior</option>
                                                <option value="Specialist">Specialist</option>
                                            </select>
                                        </td>
                                        <td><button type="submit" name="confirm" class="btn btn-primary">Confirm</button></td>
                                        <td><button type="submit" name="reject" class="btn btn-danger">Reject</button></td>
                                    </form>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Applications Section -->

    <!-- Services Section -->
    <section class="services_section" id="services" style="text-align: center; color: white; background-image: url(images/background/1.jpg)">
        <h2>Services</h2>
        <div class="applications_table">
            <div class="row mr-5 ml-5 mb-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Service ID</td>
                                    <td>Service Description</td>
                                    <td>Price Cap</td>
                                    <td>Update Price</td>
                                </tr>
                                <?php include('operations/services_process.php') ?>
                                <?php while($row = mysqli_fetch_assoc($result_services)){?>
                                <tr> 
                                    <form method="POST" action="operations/services_process.php">  
                                        <input type="hidden" name="service_id" value="<?php echo $row['service_id']; ?>"> 
                                        <td><?php echo $row['service_id']; ?></td> 
                                        <td><?php echo $row['service_description']; ?></td> 
                                        <td><?php echo $row['price_cap']; ?></td>
                                        <td>
                                            <input type="number" name="updated_price" placeholder="Updated Price" required />
                                            <button type="submit" name="update_price_btn" class="btn btn-primary">Update Price</button>
                                        </td>
                                    </form>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="operations/services_process.php">
            <input type="text" name="add_service_description" placeholder="Service description" required />
            <input type="text" name="add_price_cap" placeholder="Price Cap" required />
            <button type="submit" name="add_service" class="btn btn-primary">Add a service</button>
        </form>
    </section>
    <!-- End of Services Section -->

   <!-- Pricing Section -->
   <section class="pricing_section" id="pricing" style="text-align: center; color: black;">
    <h2>Pricing</h2>
    <div class="container-fluid"> <!-- Full-width container -->
        <!-- First Row: Two Tables Side by Side -->
        <div class="row"> 
            <!-- Specialist Pricing Table -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <p style="color: white; background-color:black; border: gold solid; padding: 3px"><strong>Specialist Barber Pricing</strong></p>
                            <tr class="bg-dark text-white">
                                <td>Service ID</td>
                                <td>Service Description</td>
                                <td>Price</td>
                                <td>Update</td>
                            </tr>
                            <?php while($row = mysqli_fetch_assoc($result_pricing_specialist)) { ?>
                            <tr>
                                <form method="POST" action="operations/pricing_process.php">
                                    <td><?php echo $row['service_id']; ?></td>
                                    <td><?php echo $row['service_description']; ?></td>
                                    <td><?php echo $row['price_cap']; ?></td>
                                    <td>
                                        <input type="hidden" name="service_id" value="<?php echo $row['service_id']; ?>">
                                        <input type="hidden" name="barber_type" value="specialist">
                                        <button type="submit" name="update_pricing" class="btn btn-primary">Update</button>
                                    </td>
                                </form>
                            </tr>
                            <?php } ?>
                            </table>
                    </div>
                </div>
            </div>

       <!-- Senior Barber Pricing Table -->
       <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <p style="color: white; background-color:black; border: gold solid; padding: 3px"><strong>Senior Barber Pricing</strong></p>
                            <tr class="bg-dark text-white">
                                <td>Service ID</td>
                                <td>Service Description</td>
                                <td>Price</td>
                                <td>Update</td>
                            </tr>
                            <?php while($row = mysqli_fetch_assoc($result_pricing_senior)) { ?>
                            <tr>
                                <form method="POST" action="operations/pricing_process.php">
                                    <td><?php echo $row['service_id']; ?></td>
                                    <td><?php echo $row['service_description']; ?></td>
                                    <td><?php echo $row['price_cap'] * 0.6; ?></td>
                                    <td>
                                        <input type="hidden" name="service_id" value="<?php echo $row['service_id']; ?>">
                                        <input type="hidden" name="barber_type" value="senior">
                                        <button type="submit" name="update_pricing" class="btn btn-primary">Update</button>
                                    </td>
                                </form>
                            </tr>
                            <?php } ?>
                            </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Junior Barber Pricing Table -->
        <!-- Second Row: Centered Table -->
        <div class="row justify-content-center mt-4 mb-4"> <!-- Center the column -->
            <!-- Junior Barber Pricing Table -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <p style="color: white; background-color:black; border: gold solid; padding: 3px"><strong>Junior Barber Pricing</strong></p>
                            <tr class="bg-dark text-white">
                                <td>Service ID</td>
                                <td>Service Description</td>
                                <td>Price</td>
                                <td>Update</td>
                            </tr>
                            <?php while($row = mysqli_fetch_assoc($result_pricing_junior)) { ?>
                            <tr>
                                <form method="POST" action="operations/pricing_process.php">
                                    <td><?php echo $row['service_id']; ?></td>
                                    <td><?php echo $row['service_description']; ?></td>
                                    <td><?php echo $row['price_cap'] * 0.3; ?></td>
                                    <td>
                                        <input type="hidden" name="service_id" value="<?php echo $row['service_id']; ?>">
                                        <input type="hidden" name="barber_type" value="junior">
                                        <button type="submit" name="update_pricing" class="btn btn-primary">Update</button>
                                    </td>
                                </form>
                            </tr>
                            <?php } ?>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Pricing Section -->




    <!-- Appointments Section -->
    <section class="appointments_section" id="appointments" style="text-align: center; color: white; background-image: url(images/background/8.jpg)">
        <h2>Appointments</h2>
        <div class="appointments_table">
            <div class="row mr-5 ml-5 mb-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Appointments</td>
                                    <td>Status</td>
                                    <td>Remove</td>
                                </tr>
                                <?php
                                include('operations/appointments_process.php');
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
                                            <!-- Form for remove button -->
                                            <form method="post" action="operations/appointments_process.php">
                                                <!-- Hidden input to store appointment ID -->
                                                <input type="hidden" name="appointment_id" value="<?php echo $row['appointment_id']; ?>">
                                                <!-- Remove button -->
                                                <button type="submit" class="btn btn-danger" name="remove_appointment">Remove</button>
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

    
    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <div class="copyright" style="text-align: center">
                <p class="copyright">© 2024 <strong>Sharpside Barber</strong> made by <strong>Pang S(System)</strong>.</p>
            </div>
        </div>
    </footer>

    <!-- Logout to-->
    <script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link action
        if (confirm('Are you sure you want to logout?')) {
            window.location.href = '../visitor_home_page.php';
        }
    });
    </script>
    <!-- end ng Logout script-->

</body>
</html>
