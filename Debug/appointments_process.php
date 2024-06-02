<?php
include_once "../db.php";

// Update expired appointments
$updateExpiredAppointmentsQuery = "
    UPDATE appointment_details
    SET status_id = 5
    WHERE appointment_date_time < NOW()
    AND status_id != 5
";
mysqli_query($conn, $updateExpiredAppointmentsQuery);

// SQL query to fetch all appointments with user, barber, service, and status details
$queryAppointments = "
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
        ad.status_id != 5;
";

// Execute the SQL query
$resultAppointments = mysqli_query($conn, $queryAppointments);

// Check for query execution error
if (!$resultAppointments) {
    die("Error executing query: " . mysqli_error($conn));  // Display error message if query execution fails
}

// Check if any rows are returned
if (mysqli_num_rows($resultAppointments) === 0) {
    echo "No appointments found.";  // Display message if no appointments are found
    exit;  // Stop further execution
}
?>
