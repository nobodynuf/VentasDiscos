<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="/css/bootstrap.css" />
        <script src="/js/jquery-3.3.1.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/estilos.css">
    </head>
    <body>
        <header>
            <a href="." style="width: inherit; height: inherit;"></a>
        </header>
        <nav class="nav">
            <ul class="nav navbar w-100 justify-content-center">
                <li class="nav nav-item"><a href="/paginas/datosUsuario.php">LLENAR DATOS DE USUARIO</a></li><!-- id="aNormal"-->
                <li class="nav nav-item"><a href="/paginas/venta.php">GENERAR VENTA</a></li>
                <li class="nav nav-item"><a href="/paginas/listaVenta.php">LISTAR COMPROBANTE VENTA</a></li>
            </ul>

        </nav>
        <div class="container" >
            <!-- aqui ponemos un script que mostrara un mensaje si cierta var
            session existe. -->
            <script>
                $(document).ready(function () {
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['error'])) {
    $errorMessage = $_SESSION['error'];
    session_unset();
    echo '$(\'#errorModal\').modal();';
} else if (isset($_SESSION['mensaje'])) {
    $mensajeMessage = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
    echo '$(\'#mensajeModal\').modal();';
}
?>
                });
            </script>

