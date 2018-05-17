<?php
#include '../php/session.php';
include './comun/header.php';
?>
<script>
    $(document).ready(function () {
        // esperamos a que cargue la pagina y cambiamos el titulo
        document.titles = "Ingresar usuario";
    });
</script>
<!-- <img src="../Img/oops.jpg" /> -->

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
</div>
<div class="cuadrito row">
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
                    <td><?= "Nombrecito" ?></td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td><?= "Nombrecito" ?></td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td><?= "Nombrecito" ?></td>
                </tr>
                <tr>
                    <td>Comuna</td>
                    <td><?= "Nombrecito" ?></td>
                </tr>
                <tr>
                    <td>Región</td>
                    <td><?= "Nombrecito" ?></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><?= "Nombrecito" ?></td>
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
                    <td colspan="2">
                        <img src="<?= 'imagencita' ?>" class="cuadrito" />
                    </td>
                </tr>
                <tr>
                    <td>Artista</td>
                    <td><?= "Nombrecito" ?></td>
                </tr>
                <tr>
                    <td>Nombre Álbum</td>
                    <td><?= "Nombrecito" ?></td>
                </tr>
                <tr>
                    <td>Año edición</td>
                    <td><?= "Nombrecito" ?></td>
                </tr>
                <tr>
                    <td>Formato</td>
                    <td><?= "Nombrecito" ?></td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td><?= "Nombrecito" ?></td>
                </tr>
            </tbody>

        </table>
    </div>
</div>
<div class="cuadrito row">
    <table border="0" style="margin: 0 auto;">
        <tbody>
            <tr>
                <td>Descuento:</td>
                <td><?= "DESCUETTOT" ?></td>
            </tr>
            <tr>
                <td>Total:</td>
                <td><?= "TOTTTTTTTTTT" ?></td>
            </tr>
        </tbody>
    </table>

</div>

<?php
include './comun/footer.php';
?>