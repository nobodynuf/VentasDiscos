<?php
include './comun/header.php';
require '../php/session.php';
?>
<script>
    $(document).ready(function () {
        // esperamos a que cargue la pagina y cambiamos el titulo
        document.titles = "Ingresar usuario";
    });
</script>
<!-- <img src="../Img/oops.jpg" /> -->
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$Venta = $_SESSION['venta'];
$artistaAlbum = $Venta->getAlbum()->getArtista();
$nombreAlbum = $Venta->getAlbum()->getNombre();
$formatoAlbum = $Venta->getAlbum()->getFormato();
$anoAlbum = $Venta->getAlbum()->getAnoEdicion();
$precioAlbum = $Venta->getAlbum()->getPrecio();

$fechaVenta = $Venta->getFecha();
$cantidadVenta = $Venta->getCantidad();
$formaVenta = $Venta->getFormaPago();

$nombreCliente = $Venta->getCliente()->getNombre();
$direccionCliente = $Venta->getCliente()->getDireccion();
$comunaCliente = $Venta->getCliente()->getComuna();
$regionCliente = $Venta->getCliente()->getRegion();
$correoCliente = $Venta->getCliente()->getCorreo();
$telefonoCliente = $Venta->getCliente()->getTelefono();
?>

<div class="cuadrito row" >


    <div class="col-md-2" style="border-style: none">

    </div>

    <div class="col-md-8 " style="border-style: none">
        <h1>Detalles venta</h1>

        <br />

        <img id="icono" src="../Img/metal.png">
    </div>
    <div class="col-md-2 " style="border-style: none">

    </div>
    <div class="col-md-6">
        <table class="table table-dark">
            <thead>
                <tr>
                    <td colspan="2" style="text-align: left">
                        Información usuario
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nombre</td>
                    <td><?= $nombreCliente ?></td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td><?= $telefonoCliente ?></td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td><?= $direccionCliente ?></td>
                </tr>
                <tr>
                    <td>Comuna</td>
                    <td><?= $comunaCliente ?></td>
                </tr>
                <tr>
                    <td>Región</td>
                    <td><?= $regionCliente ?></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><?= $correoCliente ?></td>
                </tr>
            </tbody>
            
        </table>
        <table class="table table-dark">
            <thead>
                <tr>
                    <td colspan="2" style="text-align: left">
                        Información venta
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fecha</td>
                    <td><?= $fechaVenta ?></td>
                </tr>
                <tr>
                    <td>Cantidad comprada</td>
                    <td><?= $cantidadVenta ?></td>
                </tr>
                <tr>
                    <td>Metodo de pago</td>
                    <td><?= $formaVenta ?></td>
                </tr>
                
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-dark">
            <thead>
                <tr>
                    <td colspan="2">
                        Información venta
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    switch ($nombreAlbum) {
                        case "Ride the Lightning":
                            $img = "../Img/cover1.jpg";
                            break;
                        case "South of Heaven" :
                            $img = "../Img/cover2.jpg";
                            break;
                        case "The Final Frontier":
                            $img = "../Img/cover3.jpg";
                            break;
                        case "Master of the Moon":
                            $img = "../Img/cover4.jpg";
                            break;
                        case "Choche: Best hits of all time":
                            $img = "../Img/cover5.jpg";
                            break;
                        case "Unkind Words":
                            $img = "../Img/cover6.jpg";
                            break;
                    }
                    ?>
                    <td colspan="2">
                        <img src="<?= $img ?>" class="cuadrito" />
                    </td>
                </tr>
                <tr>
                    <td>Artista</td>
                    <td><?= $artistaAlbum ?></td>
                </tr>
                <tr>
                    <td>Nombre Álbum</td>
                    <td><?= $nombreAlbum ?></td>
                </tr>
                <tr>
                    <td>Año edición</td>
                    <td><?= $anoAlbum ?></td>
                </tr>
                <tr>
                    <td>Formato</td>
                    <td><?= $formatoAlbum ?></td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td><?= $precioAlbum ?></td>
                </tr>
                
            </tbody>

        </table>
    </div>
    <div class="cuadrito row">
        <table border="0" style="margin: 0 auto;">
            <tbody>
                <tr>
                    <td>Descuento:</td>
                    <td>$<?= $formaVenta === 'Debito' ? ($precioAlbum * $cantidadVenta) * 0.1 : 0 ?></td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td>$<?=
                    $formaVenta === 'Debito' ?
                            ($precioAlbum * $cantidadVenta) - (($precioAlbum * $cantidadVenta) * 0.1) :
                            ($precioAlbum * $cantidadVenta)
                    ?></td>
                </tr>
            </tbody>
        </table>

    </div>

</div>
<?php
include './comun/footer.php';
?>