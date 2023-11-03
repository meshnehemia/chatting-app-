<?php 
        $title ="sign up";
        include('header.php');
?>
    <div class="wrapper">
        <section class="form login m-2 p-3">
            <header class="h1">
                Sign up
            </header>
            <form action="#" method="post" id="Form" enctype="multipart/form-data">
                <div class="error-text bg-warning text-danger text-center p-2 mb-2 rounded-1"></div>
                   <div class="d-flex">
                       <div class="field">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="Enter your first name" class="form-control">
                        </div>
                        <div class="field mx-2">
                            <label for="lname" class="form-label">Last name</label>
                            <input type="text" name="lname" id="lname" placeholder="Enter your last name" class="form-control">
                        </div>
                   </div>
                    <div class="field">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control">
                    </div>
                    <div class="field position-relative">
                        <label for="password" class="form-label">password</label>
                        <input type="Password" name="password" id="password" placeholder="password" class="form-control">
                       <i class="fas fa-eye position-absolute password_position shp"></i>
                    </div>
                     <div class="field mt-1">
                        <label for="profile" class="form-label">select image</label>
                        <input type="file" name="image" id="profile" placeholder="choose your image" class="form-control">
                    </div>
                    <div class="loading">
                        <div class="loading_panel"></div>
                    </div>
                    <div class="field">
                        <input type="submit" value="click to continue" class="btn btn-success my-3 w-100 sbn" id="#submit">
                    </div>
            </form>
            <div class="link">not yet signed up?<a href="login.php">Sign in now</a></div>
        </section>
    </div>
    <script src="../js/showphidep.js"></script>
    <script src="../js/loginerror.js"></script>
    <script src="../js/signup.js"></script>
</body>
</html>