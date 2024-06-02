<?php
include_once "../db.php";

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['confirm_payment'])) {
    // Get the form data
    $payment_id = $_POST['payment_id'];

    // Update the is_confirmed column in the payment table
    $sql_confirm_payment = "UPDATE payment SET is_confirmed = 1 WHERE payment_id = '$payment_id'";
    if (!mysqli_query($conn, $sql_confirm_payment)) {
        die("Error confirming payment: " . mysqli_error($conn));
    }

    // Calculate the End of Subscription date (35 days from date_added)
    $sql_get_date_added = "SELECT date_added FROM payment WHERE payment_id = '$payment_id'";
    $result_date_added = mysqli_query($conn, $sql_get_date_added);
    if ($row = mysqli_fetch_assoc($result_date_added)) {
        $date_added = $row['date_added'];
        $sub_end = date('Y-m-d', strtotime($date_added . ' + 35 days'));
    }

    // Insert the payment_id and sub_end into the report table
    $sql_insert_report = "INSERT INTO report (payment_id, sub_end) VALUES ('$payment_id', '$sub_end')";
    if (!mysqli_query($conn, $sql_insert_report)) {
        die("Error inserting report: " . mysqli_error($conn));
    }

    // Redirect to the same page to avoid form resubmission
    header("Location: management.php #payment");
    exit;
}

// Fetch all payment details along with the barber's username
$query_payment = "
    SELECT 
        payment.payment_id, 
        payment.barber_id, 
        user_information.username, 
        payment.account_name, 
        payment.reference_no, 
        payment.amount, 
        payment.date_added 
    FROM 
        payment 
    JOIN 
        barber 
    ON 
        payment.barber_id = barber.barber_id 
    JOIN 
        user_information 
    ON 
        barber.user_id = user_information.user_id
    WHERE
        payment.is_confirmed = 0";

$result_payment = mysqli_query($conn, $query_payment);

// Check for query error
if (!$result_payment) {
    die("Error fetching payment details: " . mysqli_error($conn));
}
?>
