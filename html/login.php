<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/loading.css">
    <script src="../js/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form login m-2 p-3">
            <header class="h1">
                Login
            </header>
            <form action="" method="post" id="myform">
                <div class="error-text bg-warning text-danger text-center p-2 mb-2 rounded-1">incorrect credantials!</div>
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
            <div class="link">not yet signed up?<a href="#">Sign up now</a></div>
        </section>
    </div>
    <script src="../js/showphidep.js"></script>
    <script src="../js/loginerror.js"></script>
    <script src="../js/login.js"></script>
</body>
</html>