<?php
include_once "db.php";

// Determine the table name based on the barber type
switch ($barber_type) {
    case 'Junior':
        $table_name = 'pricing_junior';
        break;
    case 'Senior':
        $table_name = 'pricing_senior';
        break;
    case 'Specialist':
        $table_name = 'pricing_specialist';
        break;
    default:
        $table_name = '';
        break;
}

// Query the pricing table and join with the services table to get the service description
$service_data = array();
if (!empty($table_name)) {
    $sql = "
        SELECT services.service_description, $table_name.price 
        FROM $table_name 
        JOIN services ON $table_name.service_id = services.service_id
    ";
    $result = mysqli_query($conn, $sql);

    // Check for SQL errors
    if (!$result) {
        die("SQL Error: " . mysqli_error($conn));
    }

    // Fetch the service descriptions and prices
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $service_data[] = $row;
        }
    } else {
        echo "No rows found in $table_name";
    }
} else {
    echo "Error: Table name is empty!";
}
?>
