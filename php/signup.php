<?php
    global $conn;
    include_once ('config.php');
    $fname =mysqli_real_escape_string($conn,$_POST['fname']);
    $lname =mysqli_real_escape_string($conn,$_POST['lname']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($fname) or empty($lname) or empty($email)or empty($password)){
        echo "All field are required";
    }else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $image = $_FILES['image'];
            $image_name = $image['name'];
            $image_information = explode('.',$image_name);
            $image_ext = end($image_information);
            $image_ext =strtolower($image_ext);
            $extensions = ['jpeg','jpg','png'];
            if(in_array($image_ext,$extensions)){
                $upload_image = '../images/'.$image_name;
                move_uploaded_file($image['tmp_name'],$upload_image);
                echo "correct image ", $image_name ;
            }else{
                echo "incorrect image please try again ";
            }

        } else {
            echo "incorrect email";
        }

    }