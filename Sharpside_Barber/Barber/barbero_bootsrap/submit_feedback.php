<?php
session_start();
include_once "db.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = isset($_SESSION['user_info_id']) ? $_SESSION['user_info_id'] : null;
    $feedback = isset($_POST['feedback']) ? $_POST['feedback'] : null;

    if (!empty($user_id) && !empty($feedback)) {
        $query = "INSERT INTO feedback (user_id, feedback_description) VALUES ('$user_id', '$feedback')";
        mysqli_query($conn, $query);
    }
}

mysqli_close($conn);
header("Location: b_account.php #feedback");
exit();
?>
