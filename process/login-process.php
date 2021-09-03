<?php

require_once('./db.php');

session_start();

error_reporting(0);

if (isset($_SESSION['fullname'])) {
    header("location: ../home.php");
}

if (isset($_POST['login-btn'])) {

    $email = $_POST['mail'];
    $password = $_POST['pwd'];

    $sql = "SELECT * from `signup` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['fullname'] = $row['fullname'];
        header("location: ../home.php");
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Invalid Email or Password')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
    }
} else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
