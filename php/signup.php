<?php
    global $conn;
    include_once ('config.php');
    $fname =mysqli_real_escape_string($conn,$_POST['fname']);
    $lname =mysqli_real_escape_string($conn,$_POST['lname']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($fname) or empty($lname) or empty($email)or empty($password) or empty($image)){
      //  echo "All field are required";
    }else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
         //   echo "waiting";
        } else {
         //   echo "incorrect email";
        }

    }