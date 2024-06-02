<?php
include_once('db.php');
session_start();

$fullname = isset($_SESSION['user_info_fullname']) ? $_SESSION['user_info_fullname'] : '';
$username = isset($_SESSION['user_info_username']) ? $_SESSION['user_info_username'] : '';
$password = isset($_SESSION['user_info_password']) ? $_SESSION['user_info_password'] : '';
$age = isset($_SESSION['user_info_age']) ? $_SESSION['user_info_age'] : '';
$sex = isset($_SESSION['user_info_sex']) ? $_SESSION['user_info_sex'] : '';
$address = isset($_SESSION['user_info_address']) ? $_SESSION['user_info_address'] : '';
$contact_number = isset($_SESSION['user_info_contact_no']) ? $_SESSION['user_info_contact_no'] : '';
$email_address = isset($_SESSION['user_info_email_address']) ? $_SESSION['user_info_email_address'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Edit Profile</title>
    <link rel="stylesheet" href="css/b_edit_profile.css">
    <link rel="shortcut icon" href="images/ssb_small.png" type="image/x-icon">
    <link rel="icon" href="images/ssb_small.png" type="image/x-icon">
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop>
            <source src="images/background/profile_backg.mp4" type="video/mp4">
        </video>
    </div>

    <div class="profile-container">
    
        <div class="details_container-section">
            <h2>Profile</h2>
            <form action="b_edit_profile_process.php" method="post">
                <p class="user-details">Fullname: <input type="text" name="fullname" style="color: black;" value="<?php echo $fullname; ?>" readonly></p>
                <p class="user-details">Username: <input type="text" name="username" style="color: black;" value="<?php echo $username; ?>" readonly></p>
                <p class="user-details">Password: <input type="password" name="password" style="color: black;" value="<?php echo $password; ?>" readonly></p>
                <p class="user-details">Age: <input type="number" name="age" style="color: black;" value="<?php echo $age; ?>" readonly></p>
                <p class="user-details">Sex: <input type="text" name="sex" style="color: black;" value="<?php echo $sex; ?>" readonly></p>
                <p class="user-details">Address: <input type="text" name="address" style="color: black;" value="<?php echo $address; ?>" readonly></p>
                <p class="user-details">Contact Number: <input type="tel" name="contact_number" style="color: black;" value="<?php echo $contact_number; ?>" readonly></p>
                <p class="user-details">Email Address: <input type="email" name="email_address" style="color: black;" value="<?php echo $email_address; ?>" readonly></p>
                <button type="button" id="edit-button">Edit</button>
                <button type="submit" id="submit-button" style="display: none;">Submit</button>
            </form>
        </div>
    </div>
    <script src="js/user_profile.js"></script>
    <script>
        document.getElementById('edit-button').onclick = function() {
            var inputs = document.querySelectorAll('input[readonly]');
            inputs.forEach(function(input) {
                input.removeAttribute('readonly');
            });
            document.getElementById('submit-button').style.display = 'block';
        };
    </script>
</body>
</html>