<?php
$titulo_del_documento = "Ejercicio 3";

$curp = "TARE870826HSPRLN06894";
$universidad = "UASLP";

$idioma = "es";

// If anidados
/*if($idioma == "es") {
	$textoBoton = "Enviar";
} elseif($idioma == "en") {
	$textoBoton = "Send";
} elseif($idioma == "fr") {
	$textoBoton = "Envoyer";
} else {
	$textoBoton = "->";
}*/

//
switch ($idioma) {
	case 'es':
		$textoBoton = "Enviar";
		break;
	
	case 'en':
		$textoBoton = 'Send';
		break;

	case 'fr':
		$textoBoton = 'Envoyer';
		break;

	default:
		$textoBoton = '->';
		break;
}

if(strlen($curp) == 18) {
	$informacion =  "Tu curp está bien escrita";
} else{
	$informacion = "Tu curp no está bien escrita";
}

$notificaciones = 7;
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta charset="UTF-8">
	<title><?php echo $titulo_del_documento; ?></title>
</head>
<body>
	<h1><?php echo $curp ?></h1>
	<p>
		<?php echo $informacion; ?>
	</p>
	<form action="" class="form-control">
		<input type="text" placeholder="Ingresa tu CURP">
		<button type="submit" class="btn-primary"><?php echo $textoBoton; ?></button>
	</form>
</body>
</html>