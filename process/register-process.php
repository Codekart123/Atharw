<?php

require_once('db.php');


// $nameError = $emailError = $contact = "";
// $fullname = $email = $contact = "";

if (isset($_POST["signup-btn"])) {
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $con_password = ($_POST['con-password']);

    if ($password == $con_password) {
        $sql = "SELECT * FROM signup WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO `signup`(`fullname`, `contact`, `email`, `password`, `con_password`) VALUES ('$fullname','$contact','$email','$password', '$con_password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // echo "<script>alert('success')</script>";
                // header("Location: ../register.html");

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Registered Succesfully...')
                window.location.href='javascript:history.go(-1)';
                </SCRIPT>");
            } else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Signin failed! Try Again...')
                window.location.href='javascript:history.go(-1)';
                </SCRIPT>");
            }
        } else {
            echo "<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Oops!!! Email is already Exist.')
                window.location.href='javascript:history.go(-1)';
                </SCRIPT>";
        }
    } else {
        echo "<script> alert('Password Doesn't match !')</script>";
    }
}
