<?php
include_once "db.php";

// Ensure user_id is set
if (!isset($_SESSION['user_info_id'])) {
    die("User is not logged in.");
}

$user_id = $_SESSION['user_info_id'];

// Update expired appointments
$updateExpiredAppointmentsQuery = "
    UPDATE appointment_details
    SET status_id = 5
    WHERE appointment_date_time < NOW()
    AND status_id != 5
";
mysqli_query($conn, $updateExpiredAppointmentsQuery);

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
        ad.user_id = $user_id
        AND ad.status_id != 5;
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
