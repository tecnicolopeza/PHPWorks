<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css" type="text/css"> 
	<title>Document</title>
</head>
<body>
	<h1>Consulta de la API productos</h1>
	<div class="contenedor">

			<form action="peticion.php" method="post">
				<h2>Filtra jugadores</h2>
				Nombre y/o apellidos: <input type="text" name="nombre">
				<input type="submit" name="filtraJugador" value="Consultar">
			</form><hr>
			<form action="peticion.php" method="post">
				<h2>Top X de jugadores por marca</h2>
				marca <input type="text" name="marca">
				top <input type="number" name="top">
				<input type="submit" name="filtraJugMarca" value="Consultar">
			</form><hr>
			<form action="peticion.php" method="post">
				<h2>Top X del ranking de marcas</h2>
				top <input type="number" name="top">
				<input type="submit" name="filtraRankingMarcas" value="Consultar">
			</form><hr>
	</div>
	</body>
</html>