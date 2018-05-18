<?php

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
    include 'clases.php';
    $Album = new Album();
    $Venta = new Venta();

    if (intval($_POST['txtAno']) != 0) {
        $ano = intval($_POST['txtAno']);
    }

    $artista = $_POST['txtArtista'];
    $nombre = $_POST['txtNombre'];
    $formato = $_POST['slcFormato'];
    if (intval($_POST['txtPrecio']) != 0) {
        $precio = intval($_POST['txtPrecio']);
    }



    $Album->setArtista($artista);
    $Album->setNombre($nombre);
    $Album->setFormato($formato);
    $Album->setAnoEdicion($ano);
    $Album->setPrecio($precio);
    
    $cantidad = intval($_POST['txtCantidad']);
    $formaPago = $_POST['slcPago'];
    
    
    $Venta->setFecha(time());
    $Venta->setAlbum($Album);
    $Venta->setCantidad($cantidad);
    $Venta->setCliente($_SESSION['usuario']);
    $Venta->setFormaPago($formaPago);
    
    
    $_SESSION['venta'] = $Venta;
    $_SESSION['album'] = $Album;
    $_SESSION['mensaje'] = 'Venta creada satisfactoriamente. <br> cantidad: '.$Venta->getCantidad().' disco - Artista: '.$Venta->getAlbum()->getArtista();
    echo "VENTA DONE";
    header('Location: '. '/paginas/venta.php');
    die();

    #txtArtista txtNombre txtAno txtPrecio slcFormato
}