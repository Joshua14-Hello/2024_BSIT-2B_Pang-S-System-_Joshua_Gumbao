<?php
include_once('db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $email_address = $_POST['email_address'];

    $user_id = $_SESSION['user_info_id'];

    $sql_update = "UPDATE user_information SET 
                   fullname='$fullname', 
                   username='$username', 
                   password='$password', 
                   age='$age', 
                   sex='$sex', 
                   address='$address', 
                   contact_number='$contact_number', 
                   email_address='$email_address' 
                   WHERE user_id='$user_id'";

    if (mysqli_query($conn, $sql_update)) {
        // Update session variables
        $_SESSION['user_info_fullname'] = $fullname;
        $_SESSION['user_info_username'] = $username;
        $_SESSION['user_info_password'] = $password;
        $_SESSION['user_info_age'] = $age;
        $_SESSION['user_info_sex'] = $sex;
        $_SESSION['user_info_address'] = $address;
        $_SESSION['user_info_contact_no'] = $contact_number;
        $_SESSION['user_info_email_address'] = $email_address;

        // Redirect to a success page or the profile edit page with a success message
        echo '<script>
            alert("Edit profile successful!");
            window.location.href = "b_account.php";
            </script>';
        exit();
    } else {
        // Redirect to the profile edit page with an error message
        echo '<script>
                alert("Edit failed! Please try again.");
                window.location.href = "b_edit_profile.php";
              </script>';
        exit();
    }

    mysqli_close($conn);
}
?>
