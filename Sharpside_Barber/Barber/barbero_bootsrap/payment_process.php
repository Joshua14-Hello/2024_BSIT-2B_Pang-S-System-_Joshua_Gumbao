<?php
include_once "db.php";
session_start(); // Start the session to access session variables

// Check if the session variable 'barber_id' is set
if (!isset($_SESSION['barber_id'])) {
    die("Session variable 'barber_id' is not set. Make sure you are logged in.");
}

// Get the logged-in user's barber_id from the session
$barber_id = $_SESSION['barber_id']; 

// Get the form data
$account_name = $_POST['account_name'];
$reference_no = $_POST['reference_no'];
$amount = $_POST['amount'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];

// Validate the form data
if (empty($barber_id) || empty($account_name) || empty($reference_no) || empty($amount) || empty($email) || empty($contact_no)) {
    header("Location: payment.php?error=empty_fields");
    exit();
}

// Insert the data into the payment table
$sql_new_payment = "INSERT INTO `payment` 
                    (`barber_id`, `account_name`, `reference_no`, `amount`, `email`, `contact_no`)
                    VALUES 
                    ('$barber_id', '$account_name', '$reference_no', '$amount', '$email', '$contact_no')";

$execute_query = mysqli_query($conn, $sql_new_payment);

if (!$execute_query) {
    // Redirect to a success page or the payment page with a success message
    // Here, you can output JavaScript to show a prompt
    echo '<script>
            alert("Payment failed! Please try again.");
            window.location.href = "payment.php";
          </script>';
    exit();
} else {
    // Redirect to a success page or the payment page with a success message
    // Here, you can output JavaScript to show a prompt
    echo '<script>
            alert("Payment successful!");
            window.location.href = "payment.php";
          </script>';
    exit();
}
?>
