<?php
include_once('db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['feedback'])) {
    $feedback_description = $_POST['feedback'];
    $user_id = $_SESSION['user_info_id'];
    $date_added = date('Y-m-d H:i:s'); // Get the current date and time

    $sql_insert = "INSERT INTO feedback (user_id, feedback_description, date_added) 
                   VALUES ('$user_id', '$feedback_description', '$date_added')";

    if (mysqli_query($conn, $sql_insert)) {
        // Insertion successful
        // Redirect the user or perform any other action
        header('Location: index.php'); // Redirect to the homepage
        exit(); // Stop further execution of the script
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
