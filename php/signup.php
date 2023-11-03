<?php
    global $row;
    session_start();
    require_once('config.php');
    $fname =mysqli_real_escape_string($conn,$_POST['fname']);
    $lname =mysqli_real_escape_string($conn,$_POST['lname']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($fname) or empty($lname) or empty($email)or empty($password)){
        echo "All field are required";
    }else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn ,"select email From profiles where email = '{$email}'");
            if(mysqli_num_rows($sql)>0){
                print_r("the email entered already exist login with another email");
                die();
            }else{
                $image = $_FILES['image'];
                $image_name = $image['name'];
                $image_information = explode('.',$image_name);
                $image_ext = end($image_information);
                $image_ext =strtolower($image_ext);
                $time = time();
                $extensions = ['jpeg','jpg','png'];

                if(in_array($image_ext,$extensions)){
                    $upload_image = '../images/'.$time.$image_name;
                    move_uploaded_file($image['tmp_name'],$upload_image);
                    $status = "active now";
                    $sql = `CREATE TABLE IF NOT EXISTS profiles(
                                id INT AUTO_INCREMENT,
                                fname VARCHAR(15),
                                lname VARCHAR(15),
                                password VARCHAR(200),
                                email VARCHAR(50),
                                image VARCHAR(60),
                                status varchar(20),
                                PRIMARY KEY (id)
                                );`;
                $sql ="INSERT INTO profiles(fname,lname,password,email,image,status) VALUES ('{$fname}','{$lname}','{$password}','{$email}','{$upload_image}','{$status}');";
                    mysqli_query($conn,$sql);
                $sql2 = mysqli_query($conn,"SELECT * from profiles where email ='{$email}'");
                if(mysqli_num_rows($sql2)>0){
                    $row = mysqli_fetch_assoc($sql2);
                    $_SESSION['id']= $row['id'];
                    echo "successfully";
                }
                }else{
                    echo "incorrect image please try again ";
                }
              
            }
        } else {
            echo "incorrect email";
        }
    }