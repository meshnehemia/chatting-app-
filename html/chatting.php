<?php 
        $title ="Chatting";
        include('header.php');
        session_start();
        if(!isset($_SESSION['id'])){
            header('location: login.php');
        }else{
            include('../php/config.php');
            $user = mysqli_real_escape_string($conn,$_GET['user']);
            $sql = mysqli_query($conn,"SELECT * FROM profiles WHERE id ='{$user}'");
            if(mysqli_num_rows($sql)>0){
                $row = mysqli_fetch_assoc($sql);
            }else{
                header('location: login.php');
            }
        }
?>
    <div class="wrapper">
        <section class="chatarea m-3">
            <header class="d-flex justify-content-between border-bottom">
                <div class="content d-flex">
                    <a href="chats.php" class="d-flex justify-content-center align-items-center mx-2 mb-3 text-decoration-none text-dark fw-bolder"><i class="fas fa-arrow-left"></i></a>
                    <img src="<?php echo $row['image'] ?>" class="rounded-circle profile" alt="">
                    <div class="details mx-2">
                        <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <div><i class="fas fa-circle text-success"></i></div>
            </header>
            <div class="chat overflow-y-scroll">
            </div>
            <span class="d-none outgoingmessage"><?php echo $_SESSION['id']; ?></span>
            <span class="d-none incomingmessage"><?php echo $user;?></span>
            <form action="" method="POST" class="d-flex shadow-lg px-2 bg-body-secondary form">
                <label for="textarea"></label>
                <input type="text" class="d-none" name='out' value="<?php echo $_SESSION['id']; ?>">
                <input type="text" class="d-none" name='in' value="<?php echo $user;?>">
                <input type="text" placeholder="type your text here" name='message' id="textarea" class="form-control m-2 txtf">
                <button class="btn btn-dark messagebutton m-auto"  type="submit" ><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="../js/chattingupdate.js"></script>
</body>
</html>