<?php
include_once('db.php');

// Ensure session variables are set
$fullname = isset($_SESSION['user_info_fullname']) ? $_SESSION['user_info_fullname'] : '';
$username = isset($_SESSION['user_info_username']) ? $_SESSION['user_info_username'] : '';
$age = isset($_SESSION['user_info_age']) ? $_SESSION['user_info_age'] : '';
$sex = isset($_SESSION['user_info_sex']) ? $_SESSION['user_info_sex'] : '';
$address = isset($_SESSION['user_info_address']) ? $_SESSION['user_info_address'] : '';
$contact_number = isset($_SESSION['user_info_contact_no']) ? $_SESSION['user_info_contact_no'] : '';
$email_address = isset($_SESSION['user_info_email_address']) ? $_SESSION['user_info_email_address'] : '';
$barber_type = isset($_SESSION['user_info_barber_type']) ? $_SESSION['user_info_barber_type'] : '';

// Fetch barber type from the database based on user ID
if (isset($_SESSION['user_info_id'])) {
    $user_id = $_SESSION['user_info_id'];
    // Query to fetch barber type
    $query_barber_type = "SELECT barber_type FROM barber WHERE user_id = $user_id";
    $result_barber_type = mysqli_query($conn, $query_barber_type);

    // Check if query executed successfully
    if ($result_barber_type) {
        $row = mysqli_fetch_assoc($result_barber_type);
        $barber_type = $row['barber_type'];
    } else {
        // Handle query error
        echo "Error fetching barber type: " . mysqli_error($conn);
    }
}
?>
