<?php
include_once "../db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_violation'])) {
    // Check if user_id is set
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];

        // Here you can add code to remove or handle the violation
        // For example, you could mark the violation as read or delete it from the database
        $sql_remove_violation = "UPDATE appeal SET is_read = '1' WHERE user_id = '$user_id'";
        if (!mysqli_query($conn, $sql_remove_violation)) {
            die("Error updating violation: " . mysqli_error($conn));
        }
        header("location: management.php #violations");
        exit;
    }
}

// Fetch all violations where is_read is '0'
$query_violations = "SELECT user_id, violation_description FROM appeal WHERE is_read = '0'";
$result_violations = mysqli_query($conn, $query_violations);

// Check for query error
if (!$result_violations) {
    die("Error fetching violations: " . mysqli_error($conn));
}