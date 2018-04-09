<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Cotización </title>
</head>
<body>
	<center>
<form action="calculoCotizacion.php" method="POST">
	<h3>Datos personales</h3>
				<input type="text" name="nombre" placeholder="Nombre">
				<br>
				<input type="text" name="apellido" placeholder="Apellido">
				<br>
				<input type="text" name="direccion" placeholder="Direccion">
				<br>
	<table>
		<tr>
			<td>
				<h3>Superficie</h3>
				
				<input type="text" name="superficieAncho" placeholder="Ancho">
				<br>
				<input type="text" name="superficieAlto" placeholder="Alto">
				<br>
			</td>

			<td>
				<h3>Puerta</h3>
	<input type="text" name="puertaAncho" placeholder="Ancho">
	<br>
	<input type="text" name="puertaAlto" placeholder="Alto">
			</td>
		
		<td>
			<h3>Ventana</h3>
	<input type="text" name="ventanaAncho" placeholder="Ancho">
	<br>
	<input type="text" name="ventanaAlto" placeholder="Alto">
		</td>
		</tr>

	
	
	
	</table>
	<br>

	<table>
		<tr>
			<td>
				<h3>Superficie</h3>
				
				<input type="text" name="superficieAncho2" placeholder="Ancho">
				<br>
				<input type="text" name="superficieAlto2" placeholder="Alto">
				<br>
			</td>

			<td>
				<h3>Puerta</h3>
	<input type="text" name="puertaAncho2" placeholder="Ancho">
	<br>
	<input type="text" name="puertaAlto2" placeholder="Alto">
			</td>
		
		<td>
			<h3>Ventana</h3>
	<input type="text" name="ventanaAncho2" placeholder="Ancho">
	<br>
	<input type="text" name="ventanaAlto2" placeholder="Alto">
		</td>
		</tr>

	
	
	
	</table>
	<br>
	<table>
		<tr>
			<td>
				<h3>Superficie</h3>
				
				<input type="text" name="superficieAncho3" placeholder="Ancho">
				<br>
				<input type="text" name="superficieAlto3" placeholder="Alto">
				<br>
			</td>

			<td>
				<h3>Puerta</h3>
	<input type="text" name="puertaAncho3" placeholder="Ancho">
	<br>
	<input type="text" name="puertaAlto3" placeholder="Alto">
			</td>
		
		<td>
			<h3>Ventana</h3>
	<input type="text" name="ventanaAncho3" placeholder="Ancho">
	<br>
	<input type="text" name="ventanaAlto3" placeholder="Alto">
		</td>
		</tr>

	
	
	
	</table>
	<br>

	<table>
		<tr>
			<td>
				<h3>Superficie</h3>
				
				<input type="text" name="superficieAncho4" placeholder="Ancho">
				<br>
				<input type="text" name="superficieAlto4" placeholder="Alto">
				<br>
			</td>

			<td>
				<h3>Puerta</h3>
	<input type="text" name="puertaAncho4" placeholder="Ancho">
	<br>
	<input type="text" name="puertaAlto4" placeholder="Alto">
			</td>
		
		<td>
			<h3>Ventana</h3>
	<input type="text" name="ventanaAncho4" placeholder="Ancho">
	<br>
	<input type="text" name="ventanaAlto4" placeholder="Alto">
		</td>
		</tr>

	
	
	
	</table>
	<br>





	<br>
	<h3>Tipo de pintura</h3>
	<select name="tipoPintura">

	<option>Aceite</option>

	<option>Agua</option>

	<option>Oleo</option>

</select>
<br>
<br>
<input type="submit"  value="Calcular" />
</form>
</center>
</body>
</html>