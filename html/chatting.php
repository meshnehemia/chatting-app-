<?php 
        $title ="Chatting";
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
        <section class="chatarea m-3">
            <header class="d-flex justify-content-between border-bottom">
                <div class="content d-flex">
                    <a href="" class="d-flex justify-content-center align-items-center mx-2 mb-3 text-decoration-none text-dark fw-bolder"><i class="fas fa-arrow-left"></i></a>
                    <img src="<?php echo $row['image'] ?>" class="rounded-circle profile" alt="">
                    <div class="details mx-2">
                        <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <div><i class="fas fa-circle text-success"></i></div>
            </header>
            <div class="chat overflow-y-scroll">
                <div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div>
                <div class="incoming d-flex mt-3">
                    <img src="../images/profile.png" class="rounded-circle chat-img" alt="">
                    <div class="details bg-white shadow-lg px-3 mx-2 mt-2">
                        <p>Lorem ipsum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ea eveniet, iusto libero maxime placeat provident repellendus vel voluptates voluptatibus. Aperiam doloribus eum maiores odio quaerat, reprehenderit tempora tempore veniam.</p>
                    </div>
                </div>
                 <div class="incoming d-flex mt-3">
                     <img src="../images/profile.png" class="rounded-circle chat-img" alt="">
                     <div class="details bg-white shadow-lg px-3 mx-2 mt-2">
                         <p>Lorem ipsum?</p>
                     </div>
                 </div>
                <div class="incoming d-flex mt-3">
                    <img src="../images/profile.png" class="rounded-circle chat-img" alt="">
                    <div class="details bg-white shadow-lg px-3 mx-2 mt-2">
                        <p>Lorem ipsum?</p>
                    </div>
                </div>
                 <div class="incoming d-flex mt-3">
                     <img src="../images/profile.png" class="rounded-circle chat-img" alt="">
                     <div class="details bg-white shadow-lg px-3 mx-2 mt-2">
                         <p>Lorem ipsum?</p>
                     </div>
                 </div>
                 <div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div>
                <div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque ea enim fuga fugiat iste neque nobis quos sequi vero? Cumque debitis deleniti, eligendi explicabo fugit harum quidem quos veniam..</p>
                    </div>
                </div>
                <div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div>
                <div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div><div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div>
                <div class="incoming d-flex mt-3">
                    <img src="../images/profile.png" class="rounded-circle chat-img" alt="">
                    <div class="details bg-white shadow-lg px-3 mx-2 mt-2">
                        <p>Lorem ipsum?</p>
                    </div>
                </div>
                 <div class="incoming d-flex mt-3">
                     <img src="../images/profile.png" class="rounded-circle chat-img" alt="">
                     <div class="details bg-white shadow-lg px-3 mx-2 mt-2">
                         <p>Lorem ipsum?</p>
                     </div>
                 </div>
                 <div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div>
                <div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div>
                <div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div>
                <div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div><div class="outgoing d-flex justify-content-end text-white">
                    <div class="details bg-dark p-2 mt-2">
                        <p class="m-auto">ellend.</p>
                    </div>
                </div>
            </div>
            <form action="" method="post" class="d-flex shadow-lg px-2 bg-body-secondary">
                <label for="textarea"></label>
                <input type="text" placeholder="type your text here" id="textarea" class="form-control m-2">
                <button class="btn btn-dark messagebutton m-auto"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="../js/chattingupdate.js"></script>
</body>
</html>