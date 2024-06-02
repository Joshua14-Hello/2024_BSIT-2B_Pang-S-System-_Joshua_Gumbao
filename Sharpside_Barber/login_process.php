<?php
include_once "db.php";
session_start();

if(isset($_POST['l_username'])){
    $uname = $_POST['l_username'];
    $pword = $_POST['l_password'];
    
    $sql_check_user_info = "SELECT *
                              FROM `user_information`
                            WHERE `username` = '$uname'
                              AND `password` = '$pword'
                            ";
    $sql_result = mysqli_query($conn, $sql_check_user_info);
    $count_result = mysqli_num_rows($sql_result);
    
    if($count_result == 1){
        // Existing user
        $row = mysqli_fetch_assoc($sql_result);
        
        // Check if user is banned
        if($row['status'] == 3){
            header("location: login.php?error=user_banned");
            exit();
        }
        
        // Create session variables
        $_SESSION['user_info_id'] = $row['user_id'];
        $_SESSION['user_info_user_type'] = $row['user_type'];
        $_SESSION['user_info_fullname'] = $row['fullname'];
        $_SESSION['user_info_username'] = $row['username'];
        $_SESSION['user_info_password'] = $row['password'];
        $_SESSION['user_info_age'] = $row['age'];
        $_SESSION['user_info_sex'] = $row['sex'];
        $_SESSION['user_info_contact_no'] = $row['contact_number'];
        $_SESSION['user_info_email_address'] = $row['email_address'];
        $_SESSION['user_info_address'] = $row['address'];
        
        if($row['user_type'] == 'Admin'){
            // Admin
            header("location: Admin/operations.php");
        }
        else if($row['user_type'] == 'Customer'){
            // Common user
            header("location: Customer/index.php");
        }
        else if ($row['user_type'] == 'Barber') {
            // Additional query to get barber_id for Barber users
            $user_id = $row['user_id'];
            $sql_get_barber_id = "SELECT `barber_id` FROM `barber` WHERE `user_id` = '$user_id'";
            $result_barber_id = mysqli_query($conn, $sql_get_barber_id);
            
            if (mysqli_num_rows($result_barber_id) == 1) {
                $barber_row = mysqli_fetch_assoc($result_barber_id);
                $_SESSION['barber_id'] = $barber_row['barber_id'];
            } else {
                // Handle error if barber_id not found (optional)
                header("location: login.php?error=barber_id_not_found");
                exit();
            }
            
            // Barber
            header("location: Barber/barbero_bootstrap/b_account.php");
        }
    }
    else{
        header("location: login.php?error=user_does_not_exist");
    }
}

?>