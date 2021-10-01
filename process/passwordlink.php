<?php

require_once('db.php');


if (isset($_POST["emailsubmit"])) {
    
    $email = $_POST['email'];
    $search = " select * from signup where email = '$email' ";
    $query = mysqli_query($conn, $search);
    if(mysqli_num_rows($query) > 0 ){

        while($row = $query->fetch_assoc()) {
            $token = $row['token'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
        }       
        $subject = "Password reset link..";
        $body = "Hi.. $first_name'.'$last_name. click here to reset your password http://localhost/Atharw/setPassword.php?token=$token";
        $headers = "From: patrabhagyashree004@gmail.com";
        if(mail($email,$subject,$body,$headers)){
            echo "<script>alert('Password reset link sent to $email...')</script>";
            header('location:../forgotpassword.php');
        }else{
            echo "Mail sending failed..";
        }
       
    }
    else{
        echo "<script>Invalid email..</script> ";
        header('location: ../forgotpassword.php');
    }

}