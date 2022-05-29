<!--todo falta crear la funcion para validar la sesson -->
<?php
	session_start();

    if(isset($_SESSION["user_id"])){
?>
<!DOCTYPE html>
<html>
<?php require_once("../mainHead/head.php"); ?>
<title>Inicio</title>
</head>

<body class="with-side-menu">
    <!--Cabecera-->
    <?php require_once("../mainHeader/header.php"); ?>
    <div class="mobile-menu-left-overlay"></div>
    <!----navegacion -->
    <?php require_once("../mainNav/nav.php"); ?>
    <div class="page-content">
        <!--contenido-->
        <div class="container-fluid">
            Blank page.
        </div>

		
        <!--.container-fluid-->
    </div>
    <!--.page-content-->
    <?php require_once("../../view/mainJS/js.php"); ?>
	<script type="text/javascript" src="home.js"></script>
</body>
</html>
<?php
    } else {
        header("Location:".Conectar::ruta()."../../index.php");
    }
?>

