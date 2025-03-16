<?php
include('../app/config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EGJM Parking | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">

<div style="position: relative; text-align: center;">
    <img src="<?php echo $URL;?>/public/imagenes/parking.jpg" width="1280px" alt="">
    
    <div class="login-box" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(255, 255, 255, 0.9); padding: 20px; border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);">
        <div class="login-logo">
            <a href="">SISTEMA DE</a> <b>PARQUEO</b>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Inicio de sesión</p>
                <form action="controller_login.php" method="post">
                    <input type="text" name="form_login" value="form_login" hidden>
                    <div class="input-group mb-3">
                        <input type="email" name="usuario" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_user" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                    </div>
                    <div class="text-center mt-3">
    <p>¿No tienes una cuenta? <a href="http://localhost/sistema-de-parqueo/login/register.php" style="color: blue; text-decoration: underline;">Crear cuenta</a></p>
</div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>/app/templeates/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>

</body>
</html>
