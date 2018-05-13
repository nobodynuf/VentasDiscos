<?php
    include './comun/header.php';
?>
<script>
    $(document).ready(function(){
        // esperamos a que cargue la pagina y cambiamos el titulo
        document.title = "Ingresar usuario";
    });
</script>

<form id="formUsuario">
	Rellene con sus datos
	<br>
	<img id="icono" src="../Img/metal.png">
	<table>
		<tr>
			<td>Nombre:</td>
			<td><input id="inputNormal" type="text" name=""></td>
		</tr>
		<tr>
			<td>Telefono:</td>
			<td><input id="inputNormal" type="text" name=""></td>
		</tr>
		<tr>
			<td>Direccion:</td>
			<td><input id="inputNormal" type="text" name=""></td>
		</tr>
		<tr>
			<td>Comuna</td>
			<td>
				<select id="selectNormal">
				<option>
					Seleccione Comuna	
				</option>
				<option>
					b
				</option>
				<option>
					c
				</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Region</td>
			<td>
				<select id="selectNormal">
				<option>
					Seleccione Region	
				</option>
				<option>
					b
				</option>
				<option>
					c
				</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Correo:</td>
			<td><input id="inputNormal" type="text" name=""></td>
		</tr>
		<tr>
			<td><input type="submit" name="btn_submit" value="Enviar"></td>
		</tr>

	</table>
</form>

<?php
include './comun/footer.php';
?>