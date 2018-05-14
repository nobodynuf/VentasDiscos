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
if (isset($_POST['btn_venta'])) {
    // rofl
    include 'clases.php';
    $Album = new Album();
    if (intval($_POST['txtAno'])) {
        
    }
    
    $Album->setAnoEdicion($_POST['txtAno'])
            
            
            txtArtista txtNombre txtAno txtPrecio slcFormato
}