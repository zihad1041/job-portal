<?php
include './Database.php';
session_start();

if (isset($_POST['userId']) && $_POST['password']) {

    if (($_POST['userId'] !== "") && ($_POST['password'] !== "")) {


        $userId = $_POST['userId'];
        $password = $_POST['password'];
        $query = "select * from `user` where userId='$userId' and password='$password'";
        $result = mysql_query($query);
        if ($result) {
            $_SESSION["isLogin"]=true;
            $_SESSION['username']=$userId;
            echo 'yes';
        }else{
            echo 'no';
        }
    } else {
        echo 'no';
    }
} else {
    echo 'no';
}
?>