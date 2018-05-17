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
    
        
    if (intval($_POST['txtAno'])!= 0) {
        $ano = intval($_POST['txtAno']);
    }
    if (true) {
        
    }
    
    $Album->setAnoEdicion($_POST['txtAno']);
            
            
    #txtArtista txtNombre txtAno txtPrecio slcFormato
}