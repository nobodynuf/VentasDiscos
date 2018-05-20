<?php

require 'clases.php';
/*
 * Here comes the license
 * 
 * Oh snap, waddup
 * 
 * (CC BY-SA 4.0) Jorge Manriquez
 */
echo isset($_POST['btn_venta']);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['btn_gVenta'])) {
    // rofl

    $Album = new Album();
    $Venta = new Venta();

    if (intval($_POST['txtAno']) != 0) {
        $ano = intval($_POST['txtAno']);
    }
    echo '$ano: ' . intval($_POST['txtAno']) . '<br>';

    $artista = $_POST['txtArtista'];
    echo '$artista: ' . $artista . '<br>';

    $nombre = $_POST['txtNombre'];
    echo '$nombre: ' . $nombre . '<br>';

    $formato = $_POST['slcFormato'];
    echo '$formato ' . $formato . '<br>';

    if (intval($_POST['txtPrecio']) != 0) {
        $precio = intval($_POST['txtPrecio']);
    }
    echo '$precio ' . $precio . '<br>';


    $Album->setArtista($artista);
    $Album->setNombre($nombre);
    $Album->setFormato($formato);
    $Album->setAnoEdicion($ano);
    $Album->setPrecio($precio);

    $cantidad = intval($_POST['txtCantidad']);
    echo 'cantidad: ' . $cantidad . '<br>';
    $formaPago = $_POST['slcPago'];
    echo 'formapago: ' . $formaPago . '<br>';


    $Venta->setFecha(date('d/M/y'));
    $Venta->setAlbum($Album);
    $Venta->setCantidad($cantidad);
    $Venta->setCliente($_SESSION['usuario']);
    echo 'nombre cliente ' . $Venta->getCliente()->getNombre() . '<br>';

    $Venta->setFormaPago($formaPago);


    $_SESSION['venta'] = $Venta;
    $_SESSION['album'] = $Album;

    $_SESSION['mensaje'] = 'Venta creada satisfactoriamente.';
    echo "VENTA DONE";
    header('Location: ' . '/paginas/venta.php');
    die();




    #txtArtista txtNombre txtAno txtPrecio slcFormato
}