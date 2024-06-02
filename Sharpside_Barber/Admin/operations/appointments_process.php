<?php
include_once "../db.php";

// Check if remove appointment form is submitted
if(isset($_POST['remove_appointment'])) {
    // Get appointment_id from POST data
    $appointmentId = $_POST['appointment_id'];
    
    // Update the database to mark the appointment as read
    $updateQuery = "UPDATE appointment_details SET is_read = TRUE WHERE appointment_id = $appointmentId";
    $result = mysqli_query($conn, $updateQuery);

    // Check if update was successful
    if ($result) {
        // Redirect back to the page displaying appointments
        header("Location: ../operations.php #appointments");
        exit();
    } else {
        echo "Error marking appointment as read: " . mysqli_error($conn);
    }
}

// SQL query to fetch all appointments with user, barber, service, and status details
$query_appointments = "
    SELECT 
        ad.*,  -- Select all columns from appointment_details table
        u.username AS user_name,  -- Alias the username column from user_information table as user_name
        ub.username AS barber_name,  -- Alias the username column from user_information table as barber_name
        ast.status  -- Select the status column from appointment_status table
    FROM 
        appointment_details ad  -- Alias for appointment_details table
    JOIN 
        user_information u ON ad.user_id = u.user_id  -- Join appointment_details with user_information on user_id
    JOIN 
        barber b ON ad.barber_id = b.barber_id  -- Join appointment_details with barber on barber_id
    JOIN 
        user_information ub ON b.user_id = ub.user_id  -- Join barber with user_information on user_id
    JOIN 
        appointment_status ast ON ad.status_id = ast.status_id  -- Join appointment_details with appointment_status on status_id
    WHERE
        ad.is_read = 0;  -- Filter out appointments that are read
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
