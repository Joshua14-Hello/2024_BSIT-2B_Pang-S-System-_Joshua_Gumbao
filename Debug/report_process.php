<?php
include_once "../db.php";

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

// Automatically ban barbers whose subscription has ended
$current_date = date('Y-m-d');
while ($row = mysqli_fetch_assoc($result_report)) {
    if ($row['sub_end'] < $current_date) {
        $user_id = $row['user_id'];
        $payment_id = $row['payment_id'];

        // Ban the barber
        $sql_ban_user = "UPDATE user_information SET status = 3 WHERE user_id = '$user_id'";
        if (!mysqli_query($conn, $sql_ban_user)) {
            die("Error banning user: " . mysqli_error($conn));
        }

        // Update the is_read column in the report table
        $sql_update_read = "UPDATE report SET is_read = 1 WHERE payment_id = '$payment_id'";
        if (!mysqli_query($conn, $sql_update_read)) {
            die("Error updating report is_read: " . mysqli_error($conn));
        }
    }
}

// Fetch the report details again to display in the table
$result_report = mysqli_query($conn, $query_report);

// Check for query error
if (!$result_report) {
    die("Error fetching report details: " . mysqli_error($conn));
}
?>
