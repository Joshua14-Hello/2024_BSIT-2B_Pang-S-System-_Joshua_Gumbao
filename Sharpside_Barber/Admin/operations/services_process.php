<?php
include_once "../db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle updating price_cap
    if (isset($_POST['service_id']) && isset($_POST['updated_price']) && isset($_POST['update_price_btn'])) {
        $service_id = $_POST['service_id'];
        $updated_price = $_POST['updated_price'];

        // Update price_cap in the database
        $sql_update_price = "UPDATE services SET price_cap='$updated_price' WHERE service_id='$service_id'";
        if (!mysqli_query($conn, $sql_update_price)) {
            die("Error updating price: " . mysqli_error($conn));
        }

        // Redirect back to the same page
        header("Location: ../operations.php#services");
        exit;
    }

    // Handle adding a new service
    if (isset($_POST['add_service']) && isset($_POST['add_service_description']) && isset($_POST['add_price_cap'])) {
        $item_desc = $_POST['add_service_description'];
        $item_cap = $_POST['add_price_cap'];

        // Insert new service into the database
        $sql_insert_item = "INSERT INTO services (service_description, price_cap) VALUES ('$item_desc', '$item_cap')";
        if (!mysqli_query($conn, $sql_insert_item)) {
            die("Error inserting record: " . mysqli_error($conn));
        }

        // Redirect back to the same page
        header("Location: ../operations.php#services");
        exit;
    }
}

// Fetch all services data
$query_services = "SELECT * FROM services";
$result_services = mysqli_query($conn, $query_services);

// Check for query error
if (!$result_services) {
    die("Error fetching services: " . mysqli_error($conn));
}
?>