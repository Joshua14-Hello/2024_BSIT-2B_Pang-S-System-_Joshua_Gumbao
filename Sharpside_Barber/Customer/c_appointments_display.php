<?php
include_once "db.php";

// Ensure user_id is set
if (!isset($_SESSION['user_info_id'])) {
    die("User is not logged in.");
}

$user_id = $_SESSION['user_info_id'];

// Check if completed appointment form is submitted
if (isset($_POST['complete_appointment'])) {
    // Get appointment_id from POST data and sanitize it
    $appointmentId = intval($_POST['appointment_id']);

    // Update the status of the appointment to completed (status_id = 5)
    $updateQuery = "UPDATE appointment_details SET status_id = 5 WHERE appointment_id = $appointmentId";
    $result = mysqli_query($conn, $updateQuery);

    // Check if update was successful
    if ($result) {
        // Redirect back to the page displaying appointments
        header("Location: c_account.php #appointments");
        exit();
    } else {
        echo "Error completing appointment: " . mysqli_error($conn);
    }
}

// SQL query to fetch appointments linked to the logged-in user
$query_appointments = "
    SELECT 
        ad.*,  
        u.username AS user_name,  
        ub.username AS barber_name,  
        ast.status  
    FROM 
        appointment_details ad  
    JOIN 
        user_information u ON ad.user_id = u.user_id  
    JOIN 
        barber b ON ad.barber_id = b.barber_id  
    JOIN 
        user_information ub ON b.user_id = ub.user_id  
    JOIN 
        appointment_status ast ON ad.status_id = ast.status_id  
    WHERE
        ad.is_read = 0  
        AND ad.user_id = $user_id
";

// Execute the SQL query
$result_appointments = mysqli_query($conn, $query_appointments);

// Check for query execution error
if (!$result_appointments) {
    die("Error executing query: " . mysqli_error($conn));  // Display error message if query execution fails
}

// Check if any rows are returned
if (mysqli_num_rows($result_appointments) === 0) {
    echo "No appointments found.";  // Display message if no appointments are found
    exit;  // Stop further execution
}
?>
