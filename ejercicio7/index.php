<?php
	// Conectar a base de dato
	require("conexion.php");

	$stmt = $dbh->prepare("SELECT * FROM personas");
	$stmt->execute();

	$personas = $stmt->fetchAll(PDO::FETCH_OBJ);


	/*
	var_dump(json_encode($personas));
	die();
	foreach($personas as $persona) {
		var_dump($persona);
	}
	die();*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta charset="UTF-8">
	<title>Buen día <?= $arreglo[3]; ?></title>
</head>
<body>
	<img src="<?= $arreglo[8] ?>" alt="" width="10%">
	<input class="input-ejercicio5" type="text" placeholder="<?php echo $arreglo[3] . " ingresa tu número"; ?>">
		<table class="table table-responsive table-hover">
		<thead class="thead">
			<td>ID</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			<td>Nombre</td>
			<td>Dirección</td>
			<td>Colonia</td>
			<td>Número</td>
			<td>Teléfono</td>
			<td>URL</td>
		</thead>
		<tbody>
			<!-- primera vuelta -->
			<?php foreach($personas as $persona): ?>
			<tr>
				<td><?php echo $persona->id; ?></td>
				<td><?php echo $persona->apellido_paterno; ?></td>
				<td><?php echo $persona->apellido_materno; ?></td>
				<td><?php echo $persona->nombre; ?></td>
				<td><?php echo $persona->direccion; ?></td>
				<td><?php echo $persona->colonia; ?></td>
				<td><?php echo $persona->numero; ?></td>
				<td><?php echo $persona->telefono; ?></td>
				<td><?php echo $persona->url; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		<tfooter>
			<td>ID</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			<td>Nombre</td>
			<td>Dirección</td>
			<td>Colonia</td>
			<td>Número</td>
			<td>Teléfono</td>
			<td>URL</td>
		</tfooter>
	</table>
</body>
</html>



<!--
Diego Wendy

4442895558 Daery
4443155806 Héctor

-->