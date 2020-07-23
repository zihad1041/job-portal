<?php

session_start();
include './Database.php';

function validate_mobile($mobile) {
    return preg_match('/^[0]?(1)[56789]\d{8}$/', $mobile);
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['name'])) {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $userId = test_input($_POST['userId']);
    $confirmPassword = test_input($_POST['confirmPassword']);

    if ($name != "" && $email != "" && $password != "" && $userId != "" && $confirmPassword != "" ) {
        if ($password == $confirmPassword) {


                                            $query = "INSERT INTO `user`(`username`, `userId`, `password`, `email`)"
                                                    . " VALUES ('$name','$userId','$password','$email')";
                                            $result = mysql_query($query);

                                            if ($result) {
                                                echo 'Succesfull';
                                            } else {
                                                echo 'Succesfull';
                                            }

        } else {
            echo 'confirm password not match !';
        }
    } else {
        echo 'Field is requred !!';
    }
} else {
    echo 'Field is requred !!';
}
?>