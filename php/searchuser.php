<?php 
        global $conn;
        require_once('config.php');
        $message = mysqli_real_escape_string($conn, $_POST['srch']);
        $sql = mysqli_query($conn,"SELECT * FROM profiles WHERE fname LIKE '%{$message}%' OR lname LIKE '%{$message}%'");
        $output_users='';
        if(mysqli_num_rows($sql)>0){
            while($row=mysqli_fetch_assoc($sql)){
                $output_users .='<a href="../html/chatting.php?user='.$row['id'].'" class="text-decoration-none text-dark d-flex justify-content-between border-top mt-2 pt-2">
                <div class="content d-flex">
                     <img src="'.$row['image'].'" class="rounded-circle profile" alt="">
                     <div class="details mx-2">
                         <span>'.$row['fname']." ".$row['lname'].'</span>
                         <p>this is the text message</p>
                     </div>
                </div>
                 <div class="status-dot"><i class="fas fa-circle text-success"></i>
                 </div>
                 </a>
                <a href="#" class="text-decoration-none text-dark d-flex justify-content-between border-top mt-2 pt-2">
            ';

            }
        }else{
            $output_users  =" no result found";
        }
        echo $output_users ;


?>