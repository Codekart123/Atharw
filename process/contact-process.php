<?php

require_once('db.php');

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = ($_POST['subject']);
    $message = ($_POST['message']);


    $sql = "INSERT INTO `contactus` (`fullname`, `email`, `subject`, `message`) VALUES ('$fullname','$email','$subject','$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../home.php");
    } else {
        echo "<script>alert('Sorry Try Again.')</script>";
    }
}
