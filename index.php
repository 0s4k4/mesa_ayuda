<?php
    require_once("config/conexion.php");
    if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
        require_once("models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }
    session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

	<link href="/public/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="./public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="./public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="./public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" method="post" id="login_form">
                    <div class="sign-avatar">
                        <img src="./public/img/avatar-sign.png" alt="">
                    </div>
                    <header class="sign-title">Acceder</header>
                    <!--Mensajes de error segun la exepcion al momento de iniciar sesion-->
                    <?php
                        if(isset($_GET['m'])){
                            switch($_GET['m']){
                                case "1";
                                    ?>
                                    <div class="alert alert-warning alert-icon alert-close alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <i class="font-icon font-icon-warning"></i>
                                        Usuario y/o contraseña son incorrectos
						            </div>
                                    <?php
                                break;

                                case "2";
                                ?>
                                <div class="alert alert-danger alert-icon alert-close alert-dismissible fade show" role="alert">
							        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								        <span aria-hidden="true">×</span>
							        </button>
							        <i class="font-icon font-icon-warning"></i>
							        Datos incompletos, por favor de llenarlos
						        </div>
                                <?php
                            break;
                            }
                        }
                    ?>
                    <div class="form-group">
                        <input type="text" id="user_correo" name="user_correo" class="form-control" placeholder="E-Mail"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="user_pass" name="user_pass" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Manterner conectado</label>
                        </div>
                        <div class="float-right reset">
                            <a href="reset-password.html">Reset Password</a>
                        </div>
                    </div>
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button type="submit" class="btn btn-rounded">Inciar sesion</button>
                    <p class="sign-note">New to our website? <a href="sign-up.html">Sign up</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->


<script src="./public/js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="./public/js/lib/popper/popper.min.js"></script>
<script src="./public/js/lib/tether/tether.min.js"></script>
<script src="./public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="./public/js/plugins.js"></script>
    <script type="text/javascript" src="./public/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="./public/js/app.js"></script>
</body>
</html>