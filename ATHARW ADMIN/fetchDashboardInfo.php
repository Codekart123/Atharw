<?php

include '../process/db.php' ;

session_start();

error_reporting(0);

    $output = array();
    $user_count = "SELECT COUNT(email)
    FROM signup
    WHERE status='Active' ";

    $teacher_count = "SELECT COUNT(email)
    FROM signup
    WHERE status='Active' AND teacher_status = 1 ";

    $result1 = mysqli_query($conn, $user_count);
    $result2 = mysqli_query($conn, $teacher_count);

   $output['teacher'] = mysqli_fetch_row($result2)[0];
   $output['user'] = mysqli_fetch_row($result1)[0];
   
    echo json_encode($output);
    
    ?>
