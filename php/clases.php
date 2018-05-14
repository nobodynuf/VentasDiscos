<?php

/*
 * Here comes the license
 * 
 * Oh snap, waddup
 * 
 * (CC BY-SA 4.0) Jorge Manriquez
 */

class Album {

    var $artista;
    var $nombre;
    var $anoEdicion;
    var $formato;
    var $precio;

    public function __construct() {
        $this->artista = "";
        $this->nombre = "";
        $this->anoEdicion = 0;
        $this->formato = "";
        $this->precio = 0;
    }

    public function getArtista() {
        return $this->artista;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getAnoEdicion() {
        return $this->anoEdicion;
    }

    public function getFormato() {
        return $this->formato;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setArtista($artista) {
        $this->artista = $artista;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setAnoEdicion($anoEdicion) {
        $this->anoEdicion = $anoEdicion;
    }

    public function setFormato($formato) {
        $this->formato = $formato;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

}

class Cliente {

    var $nombre;
    var $telefono;
    var $direccion;
    var $comuna;
    var $region;
    var $correo;

    public function __construct() {
        $this->nombre = "";
        $this->telefono = 0;
        $this->direccion = "";
        $this->comuna = "";
        $this->region = "";
        $this->correo = "";
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getComuna() {
        return $this->comuna;
    }

    public function getRegion() {
        return $this->region;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setComuna($comuna) {
        $this->comuna = $comuna;
    }

    public function setRegion($region) {
        $this->region = $region;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

}

class Venta {

    var $album;

}

?>
