<?php 
        $title ="chats";
        include('header.php');
        session_start();
        if(!isset($_SESSION['id'])){
            header('location: login.php');
        }else{
            include('../php/config.php');
            $sql = mysqli_query($conn,"SELECT * FROM profiles WHERE id ='{$_SESSION['id']}'");
            if(mysqli_num_rows($sql)>0){
                $row = mysqli_fetch_assoc($sql);
            }else{
                header('location: login.php');
            }
        }

?>
    <div class="wrapper">
        <section class="users m-3">
            <header class="d-flex justify-content-between border-bottom">
                <div class="content d-flex">
                    <img src="<?php echo $row['image'] ?>" class="rounded-circle profile" alt="">
                    <div class="details mx-2">
                        <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="#" class="logout btn btn-dark">Log out</a>
            </header>
            <div class="search d-flex mt-4">
                <label for="search" class="text d-none">select the user to start the chat</label>
                <input type="text" class="text form-control" id="search" placeholder="Enter name to search">
                <button class="bg-dark rounded-2 col-2"><i class="fas fa-search text-white"></i> </button>
            </div>
            <div class="userlist overflow-y-scroll">
                <a href="#" class="text-decoration-none text-dark d-flex justify-content-between border-top mt-2 pt-2">
                   <div class="content d-flex">
                        <img src="../images/profile.png" class="rounded-circle profile" alt="">
                        <div class="details mx-2">
                            <span>meshack nehemia</span>
                            <p>this is the text message</p>
                        </div>
                   </div>
                    <div class="status-dot"><i class="fas fa-circle text-success"></i></div>
                </a>
                <a href="#" class="text-decoration-none text-dark d-flex justify-content-between border-top mt-2 pt-2">
            </div>
        </section>
    </div>
    <script src="../js/chatupdate.js"></script>
</body>
</html>