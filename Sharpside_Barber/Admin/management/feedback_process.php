<?php
include_once "../db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_feedback'])) {
    // Check if user_id is set
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];

        $sql_remove_feedback = "UPDATE feedback SET is_read = '1' WHERE user_id = '$user_id'";
        if (!mysqli_query($conn, $sql_remove_feedback)) {
            die("Error updating feedback: " . mysqli_error($conn));
        }
        // Redirect to the same page to avoid form resubmission
        header("Location: management.php #feedback");
        exit;
    }
}

// Fetch all violations where is_read is '0'
$query_feedback = "SELECT user_id, feedback_description FROM feedback WHERE is_read = '0'";
$result_feedback = mysqli_query($conn, $query_feedback);

// Check for query error
if (!$result_feedback) {
    die("Error fetching feedbacks: " . mysqli_error($conn));
}