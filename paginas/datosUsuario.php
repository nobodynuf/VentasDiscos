<?php
include './comun/header.php';
?>
<!-- CODIGO LARGO -->
<script>

    var RegionesYcomunas = {
        "regiones": [
            {
                "NombreRegion": "Región de Arica y Parinacota",
                "comunas": ["Arica", "Camarones", "Putre", "General Lagos"]
            },
            {
                "NombreRegion": "Región de Tarapacá",
                "comunas": ["Iquique", "Alto Hospicio", "Pozo Almonte", "Camiña", "Colchane", "Huara", "Pica"]
            },
            {
                "NombreRegion": "Región de Antofagasta",
                "comunas": ["Antofagasta", "Mejillones", "Sierra Gorda", "Taltal", "Calama", "Ollagüe", "San Pedro de Atacama", "Tocopilla", "María Elena"]
            },
            {
                "NombreRegion": "Región de Atacama",
                "comunas": ["Copiapó", "Caldera", "Tierra Amarilla", "Chañaral", "Diego de Almagro", "Vallenar", "Alto del Carmen", "Freirina", "Huasco"]
            },
            {
                "NombreRegion": "Región de Coquimbo",
                "comunas": ["La Serena", "Coquimbo", "Andacollo", "La Higuera", "Paiguano", "Vicuña", "Illapel", "Canela", "Los Vilos", "Salamanca", "Ovalle", "Combarbalá", "Monte Patria", "Punitaqui", "Río Hurtado"]
            },
            {
                "NombreRegion": "Región de Valparaíso",
                "comunas": ["Valparaíso", "Casablanca", "Concón", "Juan Fernández", "Puchuncaví", "Quintero", "Viña del Mar", "Isla de Pascua", "Los Andes", "Calle Larga", "Rinconada", "San Esteban", "La Ligua", "Cabildo", "Papudo", "Petorca", "Zapallar", "Quillota", "Calera", "Hijuelas", "La Cruz", "Nogales", "San Antonio", "Algarrobo", "Cartagena", "El Quisco", "El Tabo", "Santo Domingo", "San Felipe", "Catemu", "Llaillay", "Panquehue", "Putaendo", "Santa María", "Quilpué", "Limache", "Olmué", "Villa Alemana"]
            },
            {
                "NombreRegion": "Región del Libertador Gral. Bernardo O’Higgins",
                "comunas": ["Rancagua", "Codegua", "Coinco", "Coltauco", "Doñihue", "Graneros", "Las Cabras", "Machalí", "Malloa", "Mostazal", "Olivar", "Peumo", "Pichidegua", "Quinta de Tilcoco", "Rengo", "Requínoa", "San Vicente", "Pichilemu", "La Estrella", "Litueche", "Marchihue", "Navidad", "Paredones", "San Fernando", "Chépica", "Chimbarongo", "Lolol", "Nancagua", "Palmilla", "Peralillo", "Placilla", "Pumanque", "Santa Cruz"]
            },
            {
                "NombreRegion": "Región del Maule",
                "comunas": ["Talca", "ConsVtución", "Curepto", "Empedrado", "Maule", "Pelarco", "Pencahue", "Río Claro", "San Clemente", "San Rafael", "Cauquenes", "Chanco", "Pelluhue", "Curicó", "Hualañé", "Licantén", "Molina", "Rauco", "Romeral", "Sagrada Familia", "Teno", "Vichuquén", "Linares", "Colbún", "Longaví", "Parral", "ReVro", "San Javier", "Villa Alegre", "Yerbas Buenas"]
            },
            {
                "NombreRegion": "Región del Biobío",
                "comunas": ["Concepción", "Coronel", "Chiguayante", "Florida", "Hualqui", "Lota", "Penco", "San Pedro de la Paz", "Santa Juana", "Talcahuano", "Tomé", "Hualpén", "Lebu", "Arauco", "Cañete", "Contulmo", "Curanilahue", "Los Álamos", "Tirúa", "Los Ángeles", "Antuco", "Cabrero", "Laja", "Mulchén", "Nacimiento", "Negrete", "Quilaco", "Quilleco", "San Rosendo", "Santa Bárbara", "Tucapel", "Yumbel", "Alto Biobío", "Chillán", "Bulnes", "Cobquecura", "Coelemu", "Coihueco", "Chillán Viejo", "El Carmen", "Ninhue", "Ñiquén", "Pemuco", "Pinto", "Portezuelo", "Quillón", "Quirihue", "Ránquil", "San Carlos", "San Fabián", "San Ignacio", "San Nicolás", "Treguaco", "Yungay"]
            },
            {
                "NombreRegion": "Región de la Araucanía",
                "comunas": ["Temuco", "Carahue", "Cunco", "Curarrehue", "Freire", "Galvarino", "Gorbea", "Lautaro", "Loncoche", "Melipeuco", "Nueva Imperial", "Padre las Casas", "Perquenco", "Pitrufquén", "Pucón", "Saavedra", "Teodoro Schmidt", "Toltén", "Vilcún", "Villarrica", "Cholchol", "Angol", "Collipulli", "Curacautín", "Ercilla", "Lonquimay", "Los Sauces", "Lumaco", "Purén", "Renaico", "Traiguén", "Victoria"]
            },
            {
                "NombreRegion": "Región de Los Ríos",
                "comunas": ["Valdivia", "Corral", "Lanco", "Los Lagos", "Máfil", "Mariquina", "Paillaco", "Panguipulli", "La Unión", "Futrono", "Lago Ranco", "Río Bueno"]
            },
            {
                "NombreRegion": "Región de Los Lagos",
                "comunas": ["Puerto Montt", "Calbuco", "Cochamó", "Fresia", "FruVllar", "Los Muermos", "Llanquihue", "Maullín", "Puerto Varas", "Castro", "Ancud", "Chonchi", "Curaco de Vélez", "Dalcahue", "Puqueldón", "Queilén", "Quellón", "Quemchi", "Quinchao", "Osorno", "Puerto Octay", "Purranque", "Puyehue", "Río Negro", "San Juan de la Costa", "San Pablo", "Chaitén", "Futaleufú", "Hualaihué", "Palena"]
            },
            {
                "NombreRegion": "Región Aisén del Gral. Carlos Ibáñez del Campo",
                "comunas": ["Coihaique", "Lago Verde", "Aisén", "Cisnes", "Guaitecas", "Cochrane", "O’Higgins", "Tortel", "Chile Chico", "Río Ibáñez"]
            },
            {
                "NombreRegion": "Región de Magallanes y de la Antártica Chilena",
                "comunas": ["Punta Arenas", "Laguna Blanca", "Río Verde", "San Gregorio", "Cabo de Hornos (Ex Navarino)", "AntárVca", "Porvenir", "Primavera", "Timaukel", "Natales", "Torres del Paine"]
            },
            {
                "NombreRegion": "Región Metropolitana de Santiago",
                "comunas": ["Cerrillos", "Cerro Navia", "Conchalí", "El Bosque", "Estación Central", "Huechuraba", "Independencia", "La Cisterna", "La Florida", "La Granja", "La Pintana", "La Reina", "Las Condes", "Lo Barnechea", "Lo Espejo", "Lo Prado", "Macul", "Maipú", "Ñuñoa", "Pedro Aguirre Cerda", "Peñalolén", "Providencia", "Pudahuel", "Quilicura", "Quinta Normal", "Recoleta", "Renca", "San Joaquín", "San Miguel", "San Ramón", "Vitacura", "Puente Alto", "Pirque", "San José de Maipo", "Colina", "Lampa", "TilVl", "San Bernardo", "Buin", "Calera de Tango", "Paine", "Melipilla", "Alhué", "Curacaví", "María Pinto", "San Pedro", "Talagante", "El Monte", "Isla de Maipo", "Padre Hurtado", "Peñaflor"]
            }]
    };
    $(document).ready(function () {
        // ty sergio hidalgo


        // esperamos a que cargue la pagina y cambiamos el titulo
        document.title = "Ingresar usuario";

        var iRegion = 0;
        var htmlRegion = '<option value="">Seleccione región</option><option value="">--</option>';
        var htmlComunas = '<option value="">Seleccione comuna</option><option value="">--</option>';

        $.each(RegionesYcomunas.regiones, function () {
            htmlRegion = htmlRegion + '<option value="' + RegionesYcomunas.regiones[iRegion].NombreRegion + '">' + RegionesYcomunas.regiones[iRegion].NombreRegion + '</option>';
            iRegion++;
        });

        $('#regiones').html(htmlRegion);
        $('#comunas').html(htmlComunas);

        $('#regiones').change(function () {
            var iRegiones = 0;
            var valorRegion = $(this).val();
            var htmlComuna = '<option value="NaN">Seleccione comuna</option><option value="NaN">--</option>';

            $.each(RegionesYcomunas.regiones, function () {
                if (RegionesYcomunas.regiones[iRegiones].NombreRegion === valorRegion) {
                    var iComunas = 0;
                    $.each(RegionesYcomunas.regiones[iRegiones].comunas, function () {
                        htmlComuna = htmlComuna + '<option value="' + RegionesYcomunas.regiones[iRegiones].comunas[iComunas] + '">' + RegionesYcomunas.regiones[iRegiones].comunas[iComunas] + '</option>';
                        iComunas++;
                    });

                }
                iRegiones++;
            });
            $('#comunas').html(htmlComuna);
        });

        $('#comunas').change(function () {
            if ($(this).val() === 'NaN') {
                $('#errorModal').find('.modal-body').html('Seleccione Comuna');
                $('#errorModal').modal();
            } else if ($(this).val() === 'NaN') {
                $('#errorModal').find('.modal-body').html('selecciones Región');
                $('#errorModal').modal();
            }
        });
        $('#regiones').change(function () {
            if ($(this).val() === 'NaN') {

                $('#errorModal').find('.modal-body').html('Seleccione Región');
                $('#errorModal').modal();
            }
        });
    });

    function Comprobar() {
        var cosasQueFaltan = "";
        if (formUsuario.txtNombre.value == "") {
            cosasQueFaltan = cosasQueFaltan + "Nombre "
        }
        if (formUsuario.txtTelefono.value == "") {
            cosasQueFaltan = cosasQueFaltan + "Telefono "
        }
        if (formUsuario.txtDireccion.value == "") {
            cosasQueFaltan = cosasQueFaltan + "Direccion "
        }
        if (formUsuario.txtRegion.value == "") {
            cosasQueFaltan = cosasQueFaltan + "Region "
        }
        if (formUsuario.txtComuna.value == "") {
            cosasQueFaltan = cosasQueFaltan + "Comuna "
        }
        if (formUsuario.txtCorreo.value == "") {
            cosasQueFaltan = cosasQueFaltan + "Correo "
        }

        console.log(cosasQueFaltan);

        if (cosasQueFaltan === "") {
            // QUE ONDA ESTE METODOTONTO AAAAAAAAAAAAAAA
            if (isNaN(parseInt(formUsuario.txtTelefono.value))) {
                $('#errorModal').find('.modal-body').html("Escribe un numero de telefono valido");
                $('#errorModal').modal();
                return false;
            } else {
                console.log("jiji");
                return true;
            }

        } else {
            $('#errorModal').find('.modal-body').html("Completa los campos faltantes: " + cosasQueFaltan);
            $('#errorModal').modal();
            return false;
        }

    }
</script>

<form id="formUsuario" name="formUsuario" action="/php/accionRegistro.php" method="post" onsubmit="return Comprobar()">
    Rellene con sus datos
    <br>
    <img id="icono" src="../Img/metal.png">
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input id="inputNormal" type="text" name="txtNombre"
                       value=""></td>
        </tr>
        <tr>
            <td>Telefono:</td>
            <td><input id="inputNormal" type="text" name="txtTelefono"></td>
        </tr>
        <tr>
            <td>Direccion:</td>
            <td><input id="inputNormal" type="text" name="txtDireccion"></td>
        </tr>
        <tr>
            <td>Region: </td>
            <td>
                <select id="regiones" name="txtRegion"></select>

            </td>
        </tr>
        <tr>
            <td>Comuna: </td>
            <td>
                <select id="comunas" name="txtComuna"></select>
            </td>
        </tr>
        <tr>
            <td>Correo:</td>
            <td><input id="inputNormal" type="text" name="txtCorreo"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="btn_submit" value="Enviar"></td>
        </tr>

    </table>
</form>

<?php
include './comun/footer.php';
?>