<?php
include_once "db.php";
session_start();

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
            <a href="operations.php">Operations</a>
            <a href="management.php" class="active">Management</a>
            <div class="logo"><img src="images/resource/ssb.png" alt="" title="Sharpside Barber" height="80"></div>
            <a href="a_edit_profile.php">Edit Profile</a>
            <a href="#" id="logout-link">Logout</a>
        </nav>
    </header>
    <!--End Main Header -->

    <!-- Page title Section -->
    <div class="page-title-section" style="background-image: url(images/background/6.jpg)">
        <div class="auto-container">
            <h2 style="color: gold">Hello admin <?php echo $_SESSION['user_info_username']; ?>!</h2>
            <h1 style="color: white; font-size: 200px">Management</h1>
            <p style="color: gold; font-size: 25px">Payment / Reports / Violations / Feedback</p>
        </div>
    </div>
    <!-- End of Page title Section -->

    <!-- Payment Section -->
    <section class="payment_section" id="payment" style="text-align: center; color: black">
        <h2><strong>Payments</strong></h2>
        <div class="payment_table">
            <div class="row mr-3 ml-3 mb-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Barber Name</td>
                                    <td>G-cash Account Name</td>
                                    <td>Reference Number</td>
                                    <td>Amount</td>
                                    <td>Date Added</td>
                                    <td>End of Subscription</td>
                                    <td>Confirm Payment</td>
                                </tr>
                                <?php include('management/payment_process.php'); ?>
                                <?php while($row = mysqli_fetch_assoc($result_payment)) { ?>
                                <tr>
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <input type="hidden" name="payment_id" value="<?php echo $row['payment_id']; ?>">
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['account_name']; ?></td>
                                        <td><?php echo $row['reference_no']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['date_added']; ?></td>
                                        <td><input type="text" name="sub_end" placeholder="End of Subscription" required/></td>
                                        <td><button type="submit" name="confirm_payment" class="btn btn-primary">Confirm</button></td>
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
    <!-- End of Payment Section -->

    <!-- Report Section -->
    <section class="report_section" id="report" style="text-align: center; color: white; background-image: url(images/background/3.jpg)">
        <h2><strong>Reports</strong></h2>
        <div class="report_table">
            <div class="row mr-3 ml-3 mb-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Barber ID</td>
                                    <td>Barber Name</td>
                                    <td>Contact Number</td>
                                    <td>Email Address</td>
                                    <td>End of Subscription</td>
                                    <td>Actions</td>
                                </tr>
                                <?php include('management/report_process.php'); ?>
                                <?php while ($row = mysqli_fetch_assoc($result_report)) { ?>
                                    <tr>
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>#report">
                                            <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                                            <input type="hidden" name="payment_id" value="<?php echo $row['payment_id']; ?>">
                                            <td><?php echo $row['barber_id']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['contact_number']; ?></td>
                                            <td><?php echo $row['email_address']; ?></td>
                                            <td><?php echo $row['sub_end']; ?></td>
                                            <td>
                                                <button type="submit" name="ban_barber" class="btn btn-danger">Ban Barber</button>
                                                <button type="submit" name="remove_data" class="btn btn-warning">Remove</button>
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
    <!-- End of Report Section -->



        
    <!-- Violations Section -->
    <section class="violations_section" id="violations" style="text-align: center; color: black">
    <h2><strong>Violations</strong></h2>
    <div class="violations_table">
        <div class="row mr-3 ml-3 mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>User ID</td>
                                <td>Violation Description</td>
                                <td>Remove</td>
                            </tr>
                            <?php include('management/violations_process.php'); ?>
                            <?php while($row = mysqli_fetch_assoc($result_violations)) { ?>
                            <tr>
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                                    <td><?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['violation_description']; ?></td>
                                    <td><button type="submit" name="remove_violation" class="btn btn-danger">Remove</button></td>
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
    <!-- End of Violations Section -->

    <!-- Feedback Section -->
    <section class="feedback_section" id="feedback" style="text-align: center; color: white; background-image: url(images/background/2.jpg)">
    <h2><strong>Feedback</strong></h2>
    <div class="feedback_table">
        <div class="row mr-3 ml-3 mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>User ID</td>
                                <td>Feedback</td>
                                <td>Remove</td>
                            </tr>
                            <?php include('management/feedback_process.php'); ?>
                            <?php while($row = mysqli_fetch_assoc($result_feedback)) { ?>
                            <tr>
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                                    <td><?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['feedback_description']; ?></td>
                                    <td><button type="submit" name="remove_feedback" class="btn btn-danger">Remove</button></td>
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
    <!-- End of Feedback Section -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <div class="copyright" style="text-align: center; color: black">
                <p class="copyright">© 2024 <strong>Sharpside Barber</strong> made by <strong>Pang S(System)</strong>.</p>
            </div>
        </div>
    </footer>

    <!-- Logout to-->
    <script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link action
        if (confirm('Are you sure you want to logout?')) {
            window.location.href = '../visitor_home_page.php'; // Redirect to the logout page
        }
    });
    </script>
    <!-- end ng Logout script-->

</body>
</html>
