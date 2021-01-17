<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Php Öğreniyorum</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">PO+</h1>

            </div>
            <h3>Login</h3> 
            <form class="m-t" role="form" action="Login.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Kullanıcı Adı" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Şifre" required="" name="userpassword">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Giriş</button>

                <a href="#"><small>Şifremi unuttum...</small></a> 
                <a class="btn btn-sm btn-white btn-block" href="Register.php">Hesap oluştur..</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>


<!-- Mirrored from chuibility.github.io/inspinia/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 18:54:05 GMT -->
</html>
