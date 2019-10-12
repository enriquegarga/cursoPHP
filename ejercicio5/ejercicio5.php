<?php
	$arreglo = array(
		0 => '2',
		1 => 'Martínez', 
		2 => 'Gómez', 
		3 => 'Daniel', 
		4 => 'Privada de las Flores',
		5 => 'Lomas',
		6 => '#452',
		7 => '3234',
		8 => 'https://startbootstrap.com/assets/img/sb-logo.svg',
	);

	$arreglo2 = array();


	/*for($i = 0; $i <= sizeof($arreglo); $i++) {
		echo $arreglo[$i];
	}*/


	$continuar = true;
	$i = 0;

	// Estructura iterativa
	/*while($continuar) {
		echo $arreglo[$i];
		$i++;

		if($i == sizeof($arreglo)) {
			$continuar = false;
		}
	}*/



	/*$continuar = true;
	$i = 0;
	do {
		echo $arreglo[$i];

		$i++;

		if($i == sizeof($arreglo)) {
			$continuar = false;
		}
	} while($continuar);*/



	/*foreach($arreglo as $valor) {
		echo $valor;	
	}*/

	//die("Se detuvo el proceso en valor");	}

?>
<!DOCTYPE html>
<html lang="en">
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
			<?php
				foreach($arreglo as $valor) {
					echo "<td>" . $valor . "</td>";	
				}
			?>
		</tbody>
		<tbody>
			<td>ID</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			<td>Nombre</td>
			<td>Dirección</td>
			<td>Colonia</td>
			<td>Número</td>
			<td>Teléfono</td>
			<td>URL</td>
		</tbody>
	</table>
</body>
</html>



<!--
Diego Wendy

4442895558 Daery
4443155806 Héctor

-->