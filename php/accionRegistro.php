<?php

include 'clases.php';
/*
 * 
 * Here comes the license
 * 
 * Oh snap, waddup
 * 
 * (CC BY-SA 4.0) Jorge Manriquez
 */
echo isset($_POST['btn_submit']);


if (isset($_POST['btn_submit'])) {

    
    
    // aca va el negocio
    $nombre = $_POST['txtNombre'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtDireccion'];
    $comuna = $_POST['txtComuna'];
    $region = $_POST['txtRegion'];
    $correo = $_POST['txtCorreo'];
    session_start();
    if (empty($nombre) || empty($telefono) ||
            empty($direccion) || empty($comuna) ||
            empty($region) || empty($correo)) {
        $_SESSION['error'] = 'Por favor llene todos los campos';
        header('Location: ' . '/paginas/datosUsuario.php');
        die();
    } else {
        $usuario = new Cliente();

        try {
            $usuario->setComuna($comuna);
            $usuario->setCorreo($correo);
            $usuario->setDireccion($direccion);
            $usuario->setNombre($nombre);
            $usuario->setRegion($region);
            $usuario->setTelefono(intval($telefono));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            $_SESSION['error'] = 'Los datos de los campos recibidos fueron invalidos.';
            header('Location: ' . '/paginas/datosUsuario.php');
            die();
        }

        echo $comuna . '<br>';
        echo $correo . '<br>';
        echo $direccion . '<br>';
        echo $nombre . '<br>';
        echo $region . '<br>';
        echo $telefono . '<br>';


        $_SESSION['usuario'] = $usuario;
        $_SESSION['mensaje'] = 'Creado usuario correctamente';
        header('Location: ' . '/paginas/datosUsuario.php');
        die();
    }
} else {
    echo 'OOPS, server rip';
    #header('Location: ' . '/index.php');
    die();
}
