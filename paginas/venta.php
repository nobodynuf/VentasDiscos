<?php
include '../php/session.php';
include './comun/header.php';
?>

<?php
$select = ' <td>Formato:</td>
                    <td>
                        <select name="slcFormato">
                            <option value="">
                                Seleccione Formato
                            </option>
                            <option value="EP">
                                EP
                            </option>
                            <option value="LP">
                                LP
                            </option>
                            <option value="CD">
                                CD
                            </option>
                            <option value="DVD">
                                DVD
                            </option>
                        </select>
                    </td>';
$boton = '                    <td colspan="2"><input class="btn-dark" type="submit" name="btn_venta" value="Comprar"></td>
';
?>
<script>
    // hermano la pulenta me dio paja ir uno por uno de los forms
    // poniendo los action, method, y poniendo en onsubmit.
    // el codigo de abajo lo hace
    
    $(function () {
        $('.formVenta').attr('action', '../php/accionVenta.php');
        $('.formVenta').attr('name', 'formVenta');
        $('.formVenta').attr('method', 'POST');
        $('.formVenta').submit(function(){return FormatoSeleccionado($(this));});
    });
    function FormatoSeleccionado(a) {
        console.log(a[0]);
        // vemos que onda el formato
        if (a[0].elements["slcFormato"].value == "") {
            //abre el cuadro
            $('#errorModal').find('.modal-body').html("Debes seleccionar un formato del album "+a[0].elements["txtNombre"].value+"");
            $('#errorModal').modal();
            return false;
        }else{
            return true;
        }
    }
</script>
<section class = "row cuadrito">
    <div id = "divRideLight" class = "col-sm-4">
        <img src = "../Img/cover1.jpg">
        <form class = "formVenta" action="../php/accionVenta.php"  > 
            <table>
                <tr>
                    <td>Artista:</td>
                    <td><input type = "text" value = "Metallica" readonly name = "txtArtista"/></td>
                </tr>
                <tr>
                    <td>Nombre Album:</td>
                    <td><input type = "text" value = "Ride the Lightning" readonly name = "txtNombre"/></td>
                </tr>
                <tr>
                    <td>Año Edicion:</td>

                    <td><input type = "number" value = "1984" readonly name = "txtAno"/></td>
                </tr>
                <tr>
                    <?= $select ?>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td><input type="number" value="20000" readonly name="txtPrecio"/></td>
                </tr>
                <tr>
                    <?= $boton ?>
                </tr>
            </table>
        </form>
    </div>
    <div id="southOfHeaven" class="col-sm-4">
        <img src="../Img/cover2.jpg">
        <form class="formVenta" action="../php/accionVenta.php" name="formVenta">
            <table>
                <tr>
                    <td>Artista:</td>
                    <td><input type="text" value="Slayer" readonly name="txtArtista"/></td>
                </tr>
                <tr>
                    <td>Nombre Album:</td>
                    <td><input type="text" value="South of Heaven" readonly name="txtNombre"/></td>
                </tr>
                <tr>
                    <td>Año Edicion:</td>
                    <td><input type="number" value="1988" readonly name="txtAno"/></td>
                </tr>
                <tr>
                    <?= $select ?>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td><input type="number" value="18000" readonly name="txtPrecio"/></td>
                </tr>
                <tr>
                    <?= $boton ?>
                </tr>
            </table>
        </form>
    </div>
    <div id="FinalFrontier" class="col-sm-4">
        <img src="../Img/cover3.jpg">
        <form class="formVenta" action="../php/accionVenta.php" name="formVenta">
            <table>
                <tr>
                    <td>Artista:</td>
                    <td><input type="text" value="Iron Maiden" readonly name="txtArtista"/></td>
                </tr>
                <tr>
                    <td>Nombre Album:</td>
                    <td><input type = "text" value = "The Final Frontier" readonly name = "txtNombre"/></td>
                </tr>
                <tr>
                    <td>Año Edicion:</td>
                    <td><input type = "number" value = "2010" readonly name = "txtAno"/></td>
                </tr>
                <tr>
                    <?= $select ?>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td><input type="number" value="19000" readonly name="txtPrecio"/></td>
                </tr>
                <tr>
                    <?= $boton ?>
                </tr>
            </table>
        </form>
    </div>
    <div id="MasterOfTheMoon" class="col-sm-4">
        <img src="../Img/cover4.jpg">
        <form class="formVenta" action="../php/accionVenta.php" name="formVenta">
            <table>
                <tr>
                    <td>Artista:</td>
                    <td><input type = "text" value = "DIO" readonly name = "txtArtista"/></td>
                </tr>
                <tr>
                    <td>Nombre Album:</td>
                    <td><input type = "text" value = "Master of the Moon" readonly name = "txtNombre"/></td>
                </tr>
                <tr>
                    <td>Año Edicion:</td>
                    <td><input type = "number" value = "2004" readonly name = "txtAno"/></td>
                </tr>
                <tr>
                    <?= $select ?>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td><input type="number" value="23000" readonly name="txtPrecio"/></td>
                </tr>
                <tr>
                    <?= $boton ?>
                </tr>
            </table>
        </form>
    </div>
    <div id="CBHAT" class="col-sm-4">
        <img src="../Img/cover5.jpg">
        <form class="formVenta" action="../php/accionVenta.php" name="formVenta">
            <table>
                <tr>
                    <td>Artista:</td>
                    <td><input type="text" value="Choche Productions" readonly name="txtArtista"/></td>
                </tr>
                <tr>
                    <td>Nombre Album:</td>
                    <td><input type="text" value="Choche: Best hits of all time" readonly name="txtNombre"/></td>
                </tr>
                <tr>
                    <td>Año Edicion:</td>
                    <td><input type="number" value="2010" readonly name="txtAno"/></td>
                </tr>
                <tr>
                    <?= $select ?>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td><input type="number" value="42000" readonly name="txtPrecio"/></td>
                </tr>
                <tr>
                    <?= $boton ?>
                </tr>
            </table>
        </form>
    </div>
    <div id="CUK" class="col-sm-4">
        <img src="../Img/cover6.jpg">
        <form class="formVenta" action="../php/accionVenta.php" name="formVenta">
            <table>
                <tr>
                    <td>Artista:</td>
                    <td><input type="text" value="Choche Productions" readonly name="txtArtista"/></td>
                </tr>
                <tr>
                    <td>Nombre Album:</td>
                    <td><input type="text" value="Unkind Words" readonly name="txtNombre"/></td>
                </tr>
                <tr>
                    <td>Año Edicion:</td>
                    <td><input type="number" value="2011" readonly name="txtAno"/></td>
                </tr>
                <tr>
                    <?= $select ?>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td><input type="number" value="69990" readonly name="txtPrecio"/></td>
                </tr>
                <tr>
                    <?= $boton ?>
                </tr>
            </table>
        </form>
    </div>
</section>
<?php
include './comun/footer.php';
?>