

</div>
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                if (isset($errorMessage)) {
                    echo $errorMessage;
                }
                ?>
            </div>
            <div class="modal-footer">
                <!--        <button type="button" class="btn btn-secondary" data-dismiss="modal"></button>-->
                <button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mensajeModal" tabindex="-1" role="dialog" aria-labelledby="mensajeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mensajeModalLabel">Informacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                if (isset($mensajeMessage)) {
                    echo $mensajeMessage;
                }
                ?>
            </div>
            <div class="modal-footer">
                <!--        <button type="button" class="btn btn-secondary" data-dismiss="modal"></button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Entendido</button>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <span class="blanco">Informaticos sin neumaticos</span>
    </div>
</footer>
</body>
</html>
