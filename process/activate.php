<?php 
session_start();
include 'db.php' ;

if(isset($_GET['token'])){

    $token = $_GET['token'];

    $status = 'Active';

    $updateAcc = "update signup set status='Active' where token='$token'";

    $query = mysqli_query($conn,$updateAcc);

    if($query){
        
            echo "<script>alert('Account activated sucessfully')</script>";
            header('location: ../register.html');
    }
    else{
        echo "<script>alert('Account is not yet activated..')</script>";
            header('location: ../register.html');
    }
}




?>