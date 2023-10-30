<?php
    try {
        $conn =mysqli_connect("localhost","root","","chat");
        if($conn){

        }else{
            die();
        }
    }catch (Exception $e){
       die();
    }