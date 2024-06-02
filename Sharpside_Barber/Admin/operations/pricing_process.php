<?php
include_once "../db.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['service_id']) && isset($_POST['barber_type'])) {
    $service_id = $_POST['service_id'];
    $barber_type = $_POST['barber_type'];

    // Fetch price cap from the services table
    $price_query = "SELECT price_cap FROM services WHERE service_id = '$service_id'";
    $price_result = mysqli_query($conn, $price_query);

    if ($price_result && mysqli_num_rows($price_result) > 0) {
        $price_row = mysqli_fetch_assoc($price_result);
        $price_cap = $price_row['price_cap'];

        // Determine the percentage of the price cap based on barber type
        switch ($barber_type) {
            case 'specialist':
                $percentage = 1.0; // 100%
                $table_name = "pricing_specialist";
                break;
            case 'senior':
                $percentage = 0.6; // 60%
                $table_name = "pricing_senior";
                break;
            case 'junior':
                $percentage = 0.3; // 30%
                $table_name = "pricing_junior";
                break;
            default:
                $_SESSION['message'] = "Invalid barber type.";
                $_SESSION['msg_type'] = "danger";
                header("Location: ../operations.php #pricing");
                exit;
        }

        // Calculate the new price
        $new_price = $price_cap * $percentage;

        // Check if the service_id already exists in the pricing table
        $check_query = "SELECT * FROM $table_name WHERE service_id = '$service_id'";
        $check_result = mysqli_query($conn, $check_query);

        if ($check_result && mysqli_num_rows($check_result) > 0) {
            // Update existing record
            $update_query = "UPDATE $table_name SET price = '$new_price' WHERE service_id = '$service_id'";
        } else {
            // Insert new record
            $update_query = "INSERT INTO $table_name (service_id, price) VALUES ('$service_id', '$new_price')";
        }

        if (mysqli_query($conn, $update_query)) {
            echo '<script>
            alert("Edit profile successful!");
            window.location.href = "../operations.php #pricing";
          </script>';
            exit();
        } else {
            // Redirect to the profile edit page with an error message
        echo '<script>
        alert("Edit failed! Please try again.");
        window.location.href = "../operations.php #pricing";
      </script>';
exit();
        }
    } else {
        // Service not found
        $_SESSION['message'] = "Service not found.";
        $_SESSION['msg_type'] = "danger";
    }
} else {
    // Invalid request
    $_SESSION['message'] = "Invalid request.";
    $_SESSION['msg_type'] = "danger";
}

header("Location: ../operations.php #pricing");
exit;
?>
