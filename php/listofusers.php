<?php 
    require_once('config.php');
    $sql = mysqli_query($conn,'SELECT * FROM profiles');
    $output_users ="";
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
                 <div class="status-dot"><i class="fas fa-circle text-success"></i></div>
             </a>
             <a href="#" class="text-decoration-none text-dark d-flex justify-content-between border-top mt-2 pt-2">
            ';
        }
    }else{
        echo 'no users available';
    }
    echo $output_users;
    
?>