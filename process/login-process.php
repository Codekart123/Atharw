<?php

require_once('./db.php');

session_start();

error_reporting(0);

if (isset($_SESSION['fullname'])) {
    header("location: ../index.php");
}

if (isset($_POST['login-btn'])) {

    $email = $_POST['mail'];
    $password = $_POST['pwd'];

<<<<<<< Updated upstream
    $sql = "SELECT * from `signup` WHERE email = '$email' AND password = '$password' AND status='Active' ";
=======
    $sql = "SELECT * from signup s INNER JOIN role_master r ON s.role_code = r.role_code
    WHERE s.email = '$email' AND s.password = '$password' AND s.status='Active' ";
>>>>>>> Stashed changes
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
       $fname = $row['first_name'];
       $lname = $row['last_name'];
<<<<<<< Updated upstream

       $_SESSION['fullname'] = $fname ." ".$lname;
        header("location: ../home.php");
=======
       $dashboard = $row['dashboard'];
       $role_name = $row['role_name'];
       $role_code = $row['role_code'];

       $_SESSION['fullname'] = $fname ." ".$lname;
       $_SESSION['role_name'] = $role_name;
       $_SESSION['role_code'] =$role_code;
        header("location: $dashboard");
>>>>>>> Stashed changes
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Invalid Email or Password')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
    }
} else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email uiuioi or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
