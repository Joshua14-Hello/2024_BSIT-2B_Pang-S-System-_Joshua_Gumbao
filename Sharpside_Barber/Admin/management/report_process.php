<?php
include_once "../db.php";

// Check for form submission for banning a barber or removing data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['ban_barber'])) {
        // Get the form data for banning
        $user_id = $_POST['user_id'];
        $payment_id = $_POST['payment_id'];

        // Update the status column in the user_information table to ban the barber
        $sql_ban_user = "UPDATE user_information SET status = 3 WHERE user_id = '$user_id'";
        if (!mysqli_query($conn, $sql_ban_user)) {
            die("Error banning user: " . mysqli_error($conn));
        }

        // Update the is_read column in the report table
        $sql_update_read = "UPDATE report SET is_read = 1 WHERE payment_id = '$payment_id'";
        if (!mysqli_query($conn, $sql_update_read)) {
            die("Error updating report is_read: " . mysqli_error($conn));
        }

        // Redirect to the same page to avoid form resubmission
        header("Location: management.php #report");
        exit;
    }

    if (isset($_POST['remove_data'])) {
        // Get the form data for removing
        $payment_id = $_POST['payment_id'];

        // Update the is_read column in the payment table
        $sql_update_read = "UPDATE report SET is_read = 1 WHERE payment_id = '$payment_id'";
        if (!mysqli_query($conn, $sql_update_read)) {
            die("Error updating report is_read: " . mysqli_error($conn));
        }

        // Redirect to the same page to avoid form resubmission
        header("Location: ../management.php #report");
        exit;
    }
}

// Fetch all report details along with the barber's username, contact number, and email address
$query_report = "
    SELECT
        report.payment_id,
        report.sub_end,
        payment.barber_id,
        user_information.username,
        user_information.user_id,
        user_information.contact_number,
        user_information.email_address
    FROM 
        report
    JOIN 
        payment 
    ON 
        report.payment_id = payment.payment_id
    JOIN 
        barber 
    ON 
        payment.barber_id = barber.barber_id
    JOIN 
        user_information 
    ON 
        barber.user_id = user_information.user_id
    WHERE 
        report.is_read = 0";

$result_report = mysqli_query($conn, $query_report);

// Check for query error
if (!$result_report) {
    die("Error fetching report details: " . mysqli_error($conn));
}
?>
