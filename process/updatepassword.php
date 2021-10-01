<?php

require_once('db.php');


if (isset($_POST["updatepassword"])) {
    
    if(isset($_GET['token'])){
        $token = $_GET['token'];
        echo $token;

        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
    
        if($password == $cpassword){

            $updatePass = "update signup set password='$password' , con_password='$cpassword'  where token='$token'";
            $query = mysqli_query($conn,$updatePass);

            if($query){
                
                    echo "<script>alert('Password reset sucessfully')</script>";
                    header('location: ../register.html');
            }
            else{
                echo "<script>alert('Try again later..')</script>";
                    header('location: ../setPassword.php');
            }

        }
    }
}