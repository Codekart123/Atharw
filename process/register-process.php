<?php

require_once('db.php');


// $nameError = $emailError = $contact = "";
// $fullname = $email = $contact = "";

if (isset($_POST["signup-btn"])) {
    // $fullname = $_POST['fullname'];
    // $contact = $_POST['contact'];
    // $email = $_POST['email'];
    // $password = ($_POST['password']);
    // $con_password = ($_POST['con-password']);

    // if ($password == $con_password) {
    //     $sql = "SELECT * FROM signup WHERE email ='$email'";
    //     $result = mysqli_query($conn, $sql);
    //     if (!$result->num_rows > 0) {
    //         $sql = "INSERT INTO `signup`(`fullname`, `contact`, `email`, `password`, `con_password`) VALUES ('$fullname','$contact','$email','$password', '$con_password')";
    //         $result = mysqli_query($conn, $sql);

    //         if ($result) {
    //             // echo "<script>alert('success')</script>";
    //             // header("Location: ../register.html");

    //             echo ("<SCRIPT LANGUAGE='JavaScript'>
    //             window.alert('Registered Succesfully...')
    //             window.location.href='javascript:history.go(-1)';
    //             </SCRIPT>");
    //         } else {
    //             echo ("<SCRIPT LANGUAGE='JavaScript'>
    //             window.alert('Signin failed! Try Again...')
    //             window.location.href='javascript:history.go(-1)';
    //             </SCRIPT>");
    //         }
    //     } else {
    //         echo "<SCRIPT LANGUAGE='JavaScript'>
    //             window.alert('Oops!!! Email is already Exist.')
    //             window.location.href='javascript:history.go(-1)';
    //             </SCRIPT>";
    //     }
    // } else {
    //     echo "<script> alert('Password Doesn't match !')</script>";
    // }

<<<<<<< Updated upstream
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
    $contact = mysqli_real_escape_string($conn,$_POST['contact']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $con_password = mysqli_real_escape_string($conn,$_POST['con-password']);
    $chkStatus = mysqli_real_escape_string($conn, $_POST['chkStatus']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($con_password, PASSWORD_BCRYPT);
    $token = bin2hex( random_bytes(15));

    if($chkStatus){
        //chk for identification proof
        $idProof = $_FILES['id_file'];
        $idname = $idProof['name'];
        $iderror = $idProof['error'];
        $idtmp = $idProof['temp_name'];
=======
    $first_name =  $_POST['first_name'];
    $last_name =$_POST['last_name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pass = $_POST['new-password'];
    $cpass = $_POST['con-password'];
    $chkStatus = isset($_POST['checkStatus']) ? $_POST['checkStatus'] : '0'; 

    // $pass = password_hash($password, PASSWORD_BCRYPT);
    // $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
    $token = bin2hex( random_bytes(15));

    // echo "<script>alert($pass);</script>";
    // echo "<script>alert($cpass);</script>";

    if($chkStatus){
        //chk for identification proof
        $idProof =  $_FILES['id_file'];
        $idname = $idProof['name'];
        $iderror = $idProof['error'];
        $idtmp = $idProof['tmp_name'];
        $dataid = file_get_contents($_FILES['id_file']['tmp_name']);
>>>>>>> Stashed changes
        $idextension = explode('.',$idname); //sepatare name and extension
        $idchk = strtolower(end($idextension)); // store the extension

        //chk for qualification certificate
        $qualificationProof = $_FILES['qual_file'];
        $qualificationname = $qualificationProof['name'];
        $qualificationerror = $qualificationProof['error'];
<<<<<<< Updated upstream
        $qualificationtmp = $qualificationProof['temp_name'];
=======
        $qualificationtmp = $qualificationProof['tmp_name'];
        $dataqual = file_get_contents($qualificationProof['tmp_name']);
>>>>>>> Stashed changes
        $qualificationextension = explode('.',$qualificationname);
        $qualificationchk = strtolower(end($qualificationextension));
        
        $extensionStored = array('png','jpg','jpeg','doc','docx','pdf');

        if(in_array($idchk,$extensionStored) && in_array($qualificationchk,$extensionStored)){
<<<<<<< Updated upstream
            $id_destination_folder = "UploadDocument/id/".$idname;
            $qualification_destination_folder = "UploadDocument/qualification/".$qualificationname;
            move_uploaded_file($idtmp,$id_destination_folder);
            move_uploaded_file($qualificationtmp,$qualification_destination_folder);  

            //teacher registration
            if ($pass === $cpass) {

                $emailQuery = " select * from registration where email = '$email' ";
                $query = mysqli_query($conn, $emailQuery);  

                if(mysqli_num_rows($query) > 0 ){
                    echo "<script>Your id is already registered...</script> ";
=======
            $id_destination_folder = "../UploadDocument/id/".$idname;
            $qualification_destination_folder = "../UploadDocument/qualification/".$qualificationname;
            move_uploaded_file($idtmp,$id_destination_folder);
            move_uploaded_file($qualificationtmp,$qualification_destination_folder);  

            // echo "$qualificationname";
            //teacher registration
            if ($pass == $cpass) {

                $emailQuery = " select * from signup where email = '$email' ";
                $query = mysqli_query($conn, $emailQuery);
                if(mysqli_num_rows($query) > 0 ){
                    echo "<script>Your id is already registered...</script> ";
                    header('location: ../register.html');
>>>>>>> Stashed changes
                }
                else{        
                    $teacher=1;
                    // query
<<<<<<< Updated upstream
                    $register = " insert into signup (first_name,last_name,contact,email,password,con_password,identification,qualification,student_status,token) VALUES (?, ?, ?, ?,?,?,?,?,?,?)";
                    //prepare query
                    $stmt = $mysqli->prepare($conn,$register);
                    // bind query
                    if($stmt){
                        mysqli_stmt_bind_param($stmt,'ssssssbbdss', $first_name, $last_name, $contact, $email,$pass,$cpass,$teacher,$token);
                    }                   
                    // execute query
                    if(mysqli_stmt_execute($stmt)){
                        $subject = "Account activation link..";
                        $body = " ";
                        $headers = "From: patrabhagyashree004@gmail.com";
                        if(mail($email,$subject,$body,$headers)){
                            echo "Email successfully sent to $email...";
=======
                    $register = " insert into signup (first_name,last_name,contact,email,password,con_password,identification,qualification,teacher_status,token) VALUES (?, ?, ?, ?,?,?,?,?,?,?)";
                    //prepare query
                    $stmt = mysqli_prepare($conn,$register);
                    // bind query
                    if($stmt){
                        mysqli_stmt_bind_param($stmt,'ssssssbbds', $first_name, $last_name, $contact, $email,$pass,$cpass,$dataid,$dataqual,$teacher,$token);
                    }                   
                    // execute query C:\xampp\htdocs\Atharw\process\activate.php
                    if(mysqli_stmt_execute($stmt)){
                        $subject = "Account activation link..";
                        $body = "Hi.. $first_name'.'$last_name. click here to activate your account http://localhost/Atharw/process/activate.php?token=$token";
                        $headers = "From: patrabhagyashree004@gmail.com";
                        if(mail($email,$subject,$body,$headers)){
                            echo "<script>alert('Account activation mail successfully sent to $email...')</script>";
                            header('location:../register.html');
>>>>>>> Stashed changes
                        }else{
                            echo "Mail sending failed..";
                        }
                        echo"<script> alert('Registered Succesfully..')</script>";
                    }
                    else{
                        echo"<script> alert('Try again later..')</script>";
                    }
        
                }
        
            }else{
                echo"<script> alert('Passwords are not matching')</script>";
            }           
            
        }
    }
    else{
        // normal user registration
<<<<<<< Updated upstream
        if ($pass === $cpass) {
=======
        if ($pass == $cpass) {
>>>>>>> Stashed changes
            $emailQuery = " select * from signup where email = '$email' ";
            $query = mysqli_query($conn, $emailQuery);        
            if(mysqli_num_rows($query) > 0 ){
                echo "<script>Your id is already registered...</script> ";
            }
            else{
                $student=1;
                // query
<<<<<<< Updated upstream
                $register = " insert into signup (first_name,last_name,contact,email,password,con_password,student_status,token) VALUES (?, ?, ?, ?,?,?,?,?)";
                //prepare query
                $stmt = $mysqli->prepare($conn,$register);
                // bind query
                if($stmt){
                    mysqli_stmt_bind_param($stmt,'ssssssdss', $first_name, $last_name, $contact, $email,$pass,$cpass,$student,$token);
                }
                // execute query
                if(mysqli_stmt_execute($stmt)){
=======
                $register = "insert into `signup` (first_name,last_name,contact,email,password,con_password,student_status,token) VALUES (?, ?, ?, ?,?,?,?,?)";
                //prepare query
                $stmt = mysqli_prepare($conn,$register);
                // bind query
                if($stmt){
                    mysqli_stmt_bind_param($stmt,'ssdsssds', $first_name, $last_name, $contact, $email,$pass,$cpass,$student,$token);
                }
                // execute query C:\xampp\htdocs\Atharw\process\activate.php
                if(mysqli_stmt_execute($stmt)){
                    $subject = "Account activation link..";
                    $body = "Hi.. $first_name'.'$last_name. click here to activate your account http://localhost/Atharw/process/activate.php?token=$token";
                    $sender = "From: patrabhagyashree004@gmail.com";
                    if(mail($email,$subject,$body,$sender)){                        
                       echo "<script>alert('Account activation mail successfully sent to $email...')</script>";
                        header('location: ../register.html');
                    }else{
                        echo "Mail sending failed..";
                    }
>>>>>>> Stashed changes
                    echo"<script> alert('Registered Succesfully..')</script>";
                }
                else{
                    echo"<script> alert('Try again later..')</script>";
                }
            }
        }
        else{
<<<<<<< Updated upstream
            echo"<script> alert('Passwords are not matching')</script>";
=======
            echo"<script> alert('Passwords are not matching user section')</script>";
>>>>>>> Stashed changes
            }
        }
    

}
