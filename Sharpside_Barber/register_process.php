<?php
include_once "db.php";

$fullname =  $_POST['r_fullname'];
$uname =  $_POST['r_username'];
$passwd = $_POST['r_passwrd'];
$age = $_POST['r_age'];
$contact = $_POST['r_contact'];
$address = $_POST['r_address'];
$email = $_POST['r_email'];
$sex = $_POST['r_sex'];
$user_type = $_POST['r_type'];

$error_message = ''; // Initialize error message variable

//This will check if the username is already existing
$sql_chk_user = "SELECT user_id FROM user_information
                  WHERE `username` = '$uname'";
//this will execute the SQL above.
$sql_result = mysqli_query($conn, $sql_chk_user);
//This will count the result of the above SQL
$count_result = mysqli_num_rows($sql_result);

if($count_result > 0){
    //user already exists
    header("location: register.php?error=user_already_exist");
}
else {
    //user can register
    $sql_new_user = "INSERT INTO `user_information`
                      (`username`, `password`, `fullname`, `age` , `address`, `contact_number`, `sex` , `email_address` , `user_type`)
                     VALUES
                      ('$uname','$passwd','$fullname','$age','$address','$contact','$sex','$email','$user_type')
                     ";
    $execute_query = mysqli_query($conn,$sql_new_user);
    
    if(!$execute_query){
       header("location: registration.php?error=Insert_Failed");
    }
    else{
       header("location: login.php?msg=Successfully_Registered");
    }
    
}
