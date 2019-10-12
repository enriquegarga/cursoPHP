<?php 
require('conexion.php');


if($_POST){
	$apellido_paterno = $_POST['apellido_paterno'];
	$apellido_materno = $_POST['apellido_materno'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$colonia = $_POST['colonia'];
	$numero = $_POST['numero'];
	$telefono = $_POST['telefono'];
	$url = $_POST['url'];


	// Prepare
	$stmt = $dbh->prepare("INSERT INTO personas (apellido_paterno, apellido_materno, nombre, direccion, colonia, numero, telefono, url) VALUES (:apellido_paterno, :apellido_materno, :nombre, :direccion, :colonia, :numero, :telefono, :url)");

		$stmt->bindParam(':apellido_paterno', $apellido_paterno);
		$stmt->bindParam(':apellido_materno', $apellido_materno);
		$stmt->bindParam(':nombre', $nombre);
		$stmt->bindParam(':direccion', $direccion);
		$stmt->bindParam(':colonia', $colonia);
		$stmt->bindParam(':numero', $numero);
		$stmt->bindParam(':telefono', $telefono);
		$stmt->bindParam(':url', $url);

		$stmt->execute();
}

$persona = new Persona();

$persona->name = $post->name;
$persona->direccion = $post->direccion;

$persona->save();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta charset="UTF-8">
	<title>Crear registro</title>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form method="post" action="create.php">
					<?php if($_POST):?>
					<div class="alert alert-success" role="alert">
  						Se creó el registro
					</div>
					<?php endif; ?>
				<!-- Apellido Paterno -->
				  <div class="form-group">
				    <label>Apellido paterno</label>
				    <input type="text" class="form-control" placeholder="Ingresa el apellido paterno" name="apellido_paterno">
				  </div>

				  <!-- Apellido Materno -->
				  <div class="form-group">
				    <label>Apellido materno</label>
				    <input type="text" class="form-control" placeholder="Ingresa el apellido materno" name="apellido_materno">
				  </div>

				  <!-- Nombre -->
				  <div class="form-group">
				    <label>Nombre</label>
				    <input type="text" class="form-control" placeholder="Ingresa el nombre" name="nombre">
				  </div>

				  <!-- Dirección -->
				  <div class="form-group">
				    <label>Dirección</label>
				    <input type="text" class="form-control" placeholder="Ingresa la dirección" name="direccion">
				  </div>

				  <!-- Colonia -->
				  <div class="form-group">
				    <label>Colonia</label>
				    <input type="text" class="form-control" placeholder="Ingresa la colonia" name="colonia">
				  </div>

				  <!-- Número -->
				  <div class="form-group">
				    <label>Número</label>
				    <input type="text" class="form-control" placeholder="Ingresa el número" name="numero">
				  </div>
				  
				  <!-- Teléfono -->
				  <div class="form-group">
				    <label>Teléfono</label>
				    <input type="text" class="form-control" placeholder="Ingresa el teléfono" name="telefono">
				  </div>
				  
				  <!-- URL -->
				  <div class="form-group">
				    <label>URL</label>
				    <input type="text" class="form-control" placeholder="Ingresa la URL" name="url">
				  </div>
			  <button type="submit" class="btn btn-primary">Enviar</button>
			</form>
			</div>
		</div>
	</div>

</body>
</html>		