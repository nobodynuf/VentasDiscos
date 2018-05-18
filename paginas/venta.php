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
$boton = '                    <td colspan="2"><input class="btn-dark" type="submit" onsubmit="return mostarOtroForm()" name="btn_venta" value="Comprar"></td>
';
?>
<script>
    // hermano la pulenta me dio paja ir uno por uno de los forms
    // poniendo los action, method, y poniendo en onsubmit.
    // el codigo de abajo lo hace

    $(function () {
        //$('.formVenta').attr('action', '../php/accionVenta.php');
        $('.formVenta').attr('name', 'formVenta');
        //$('.formVenta').attr('method', 'POST');
        $('.formVenta').submit(function () {
            return FormatoSeleccionado($(this));
        });
    });
    function FormatoSeleccionado(a) {
        console.log(a[0]);
        // vemos que onda el formato
        if (a[0].elements["slcFormato"].value == "") {
            //abre el cuadro
            $('#errorModal').find('.modal-body').html("Debes seleccionar un formato del album " + a[0].elements["txtNombre"].value + "");
            $('#errorModal').modal();
            return false;
        } else {
            $('#txtAno').val(a[0].elements["txtAno"].value);
            $('#txtArtista').val(a[0].elements["txtArtista"].value);
            $('#txtNombre').val(a[0].elements["txtNombre"].value);
            $('#slcFormato').val(a[0].elements["slcFormato"].value);
            $('#txtPrecio').val(a[0].elements["txtPrecio"].value);
            return mostarOtroForm();
        }
    }
    function mostarOtroForm() {
        $('#formModal').modal();
        $('#formVenta').attr('action', '../php/accionVenta.php');
        $('#formVenta').attr('method', 'post');
        return false;
    }

    function generarVenta() {
        
        //negociame esta
        return false;
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
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Informacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" id="formVenta">
                <div class="modal-body">

                    <table>
                        <tr>
                            <th>*******</th>
                            <th>*******</th>
                        </tr>
                        <tr>
                            <td>Cantidad</td>
                            <td><input type="number" name="txtCantidad"></td>
                        </tr>
                        <tr>
                            <td>Forma de Pago</td>
                            <td>
                                <select name="slcPago">
                                    <option value="">
                                        Seleccione...
                                    </option>
                                    <option value="Credito">
                                        Tarjeta Credito
                                    </option>
                                    <option value="Efectivo o Debito">
                                        Efectivo o Debito
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>

                            <td colspan="2">


                            </td>
                        </tr>

                    </table>
                    <input id="txtNombre" type="hidden" name="txtNombre" />
                    <input id="txtArtista" type="hidden" name="txtArtista" />
                    <input id="txtAno" type="hidden" name="txtAno" />
                    <input id="slcFormato" type="hidden" name="slcFormato" />
                    <input id="txtPrecio" type="hidden" name="txtPrecio" />
                </div>
                <div class="modal-footer">
                    <!--        <button type="button" class="btn btn-secondary" data-dismiss="modal"></button>-->

                    <input type="submit" onsubmit="return generarVenta()" class="btn btn-outline-danger" name="btn_gVenta" value="Generar Venta" />
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include './comun/footer.php';
?>