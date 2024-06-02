<?php
session_start();
include_once "db.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = isset($_SESSION['user_info_id']) ? $_SESSION['user_info_id'] : null;
    $report = isset($_POST['report']) ? $_POST['report'] : null;

    if (!empty($user_id) && !empty($report)) {
        $query = "INSERT INTO appeal (user_id, violation_description) VALUES ('$user_id', '$report')";
        mysqli_query($conn, $query);
    }
}

mysqli_close($conn);
header("Location: b_account.php #report");
exit();
?>
