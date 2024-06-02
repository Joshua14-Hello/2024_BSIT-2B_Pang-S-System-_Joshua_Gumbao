<?php
include_once "../db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if required fields are set
    if (isset($_POST['user_id']) && isset($_POST['barber_type'])) {
        $user_id = $_POST['user_id'];
        $barber_type = $_POST['barber_type'];

        if (isset($_POST['confirm'])) {
            // Update status to 2 for confirmed users
            $sql_update_status = "UPDATE user_information SET status = '2' WHERE user_id = '$user_id'";
            if (!mysqli_query($conn, $sql_update_status)) {
                die("Error updating status: " . mysqli_error($conn));
            }

            // Insert into the barber table
            $sql_insert_barber = "INSERT INTO barber (user_id, barber_type) VALUES ('$user_id', '$barber_type')";
            if (!mysqli_query($conn, $sql_insert_barber)) {
                die("Error inserting record into barber table: " . mysqli_error($conn));
            }

            // Redirect with fragment
            header("Location: operations.php#applications");
            exit;
        } elseif (isset($_POST['reject'])) {
            // Update status to 0 for rejected users
            $sql_update_status = "UPDATE user_information SET status = '0' WHERE user_id = '$user_id'";
            if (!mysqli_query($conn, $sql_update_status)) {
                die("Error updating status: " . mysqli_error($conn));
            }

            // Redirect with fragment
            header("Location: operations.php#applications");
            exit;
        }
    }
}

// Fetch all applications data excluding users with status "0" and "2"
$query_applications = "SELECT * FROM user_information WHERE user_type = 'Barber' AND status = '1'";
$result_applications = mysqli_query($conn, $query_applications);

// Check for query error
if (!$result_applications) {
    die("Error fetching applications: " . mysqli_error($conn));
}
?>
