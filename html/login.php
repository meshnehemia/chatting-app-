<?php 
        $title ="Login up";
        include('header.php');
?>
    <div class="wrapper">
        <section class="form login m-2 p-3">
            <header class="h1">
                Login
            </header>
            <form action="" method="post" id="myform">
                <div class="error-text bg-warning text-danger text-center p-2 mb-2 rounded-1"></div>
                    <div class="field">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control">
                    </div>
                    <div class="field position-relative">
                        <label for="password" class="form-label">password</label>
                        <input type="Password" name="password" id="password" placeholder="password" class="form-control">
                        <i class="fas fa-eye position-absolute password_position shp"></i>
                    </div>
                    <div class="loading">
                        <div class="loading_panel"></div>
                    </div>
                    <div class="field">
                        <input type="submit" value="click to continue" class="btn btn-success my-3 w-100 sbn">
                    </div>
            </form>
            <div class="link">not yet signed up?<a href="signup.php">Sign up now</a></div>
        </section>
    </div>
    <script src="../js/showphidep.js"></script>
    <script src="../js/loginerror.js"></script>
    <script src="../js/login.js"></script>
</body>
</html>