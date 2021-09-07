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

    $sql = "SELECT * from `signup` WHERE email = '$email' AND password = '$password' AND status='Active' ";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
       $fname = $row['first_name'];
       $lname = $row['last_name'];

       $_SESSION['fullname'] = $fname ." ".$lname;
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
