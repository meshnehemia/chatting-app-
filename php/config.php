<?php
    try{
         $conn =mysqli_connect("localhost","root","","chat");
    }catch(Exception $e){
        echo "connection error";
    }


