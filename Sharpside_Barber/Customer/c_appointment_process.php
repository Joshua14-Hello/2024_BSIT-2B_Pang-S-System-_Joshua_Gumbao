<?php
include_once('db.php'); // Include your database connection file
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $userId = $_POST['user_id'];
    $barberId = $_POST['barber_id'];
    $totalPrice = $_POST['total_price'];
    $services = $_POST['services'];
    $appointmentDateTime = $_POST['appointment_date_time'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO appointment_details (user_id, barber_id, appointment_deets, total_price, appointment_date_time) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisis", $userId, $barberId, $services, $totalPrice, $appointmentDateTime);

    // Execute the query
    if ($stmt->execute()) {
        echo '<script>
        alert("Booked an appointment successfuly!");
        window.location.href = "index.php";
      </script>';
        exit();
    } else {
        echo '<script>
        alert("Appointment failed! Try again");
        window.location.href = "index.php";
      </script>';
        exit();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>