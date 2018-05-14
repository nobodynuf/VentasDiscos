<?php

/*
 * Here comes the license
 * 
 * Oh snap, waddup
 * 
 * (CC BY-SA 4.0) Jorge Manriquez
 */
# session no iniciada
session_start();
if (session_status() == PHP_SESSION_NONE) {
    $_SESSION['error'] = 'No estas registrado! Registrate antes de proceder.';
    header('Location: ' . '/index.php');
} else {
    #dependiendo de donde, necesitamos comprobar session

    switch (substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], '/'))) {
        case "/paginas/venta.php":
            if (!isset($_SESSION['usuario'])) {
                $_SESSION['error'] = 'Necesitas registrarte antes de poder pedir discos!';
                header('Location: ' . '/index.php');
                die();
            }
            break;
        case "/paginas/listaVenta.php":
            if (!isset($_SESSION['venta'])) {
                $_SESSION['error'] = 'Necesitas una venta antes de poder ver el recibo!';
                header('Location: ' . '/index.php');
                die();
            }
            break;
        default :
            break;
    }
}

