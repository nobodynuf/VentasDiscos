<?php

/*
 * Here comes the license
 * 
 * Oh snap, waddup
 * 
 * (CC BY-SA 4.0) Jorge Manriquez
 */
# session no iniciada

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $_SESSION['error'] = 'No estas registrado! Registrate antes de proceder.';
    header('Location: ' . '/index.php');
    die();
} else {
    if (!isset($_SESSION['venta'])) {
        header('Location: ' . '/index.php');
        $_SESSION['error'] = 'Necesitas una venta antes de poder ver el recibo!.';
        session_abort();
        die();
    }
}