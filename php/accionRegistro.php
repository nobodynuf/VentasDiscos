<?php

include 'clases.php';
/*
 * Here comes the license
 * 
 * Oh snap, waddup
 * 
 * (CC BY-SA 4.0) Jorge Manriquez
 */
if (isset($_POST['btn_submit'])) {
    header('Location: ' . '/index.php');
    $usuario = new Cliente(
            $_POST['txtNombre'], $_POST['txtTelefono'], $_POST['txtDireccion'], $_POST['txtComuna'], $_POST['txtRegion'], $_POST['txtCorreo']);
    echo 'Hecho cliente';
    echo 'redireccionando';
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['mensaje'] = 'Creado usuario correctamente';
    
    
    
    die();
}
else{
    header('Location: ' . '/index.php');
    die();
}
