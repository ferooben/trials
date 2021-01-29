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
            <h3>REGİSTER</h3> 
            <form class="m-t" role="form" action="Kayit.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Kullanıcı Adı" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Şifre" required="" name="userpassword">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">KAYIT OL</button>
 
            </form> 
        </div>
    </div>
 
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

