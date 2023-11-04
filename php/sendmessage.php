<?php 
        global $conn;
        require_once('config.php');
        $out = mysqli_real_escape_string($conn, $_POST['out']);
        $in =mysqli_real_escape_string($conn,$_POST['in']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $time = time();
        if($message!=""){
            $sql ="INSERT INTO chats(sender,receiver,message,time) VALUES ('{$out}','{$in}','{$message}','{$time}');";
            mysqli_query($conn,$sql);
       }