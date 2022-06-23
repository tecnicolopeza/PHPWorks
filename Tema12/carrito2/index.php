<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css" type="text/css"> 
	<title>Index</title>
</head>
<body>
	<h1>Consulta de la API productos</h1>
	<div class="contenedor">

			<!--tipo get-->
			<form action="peticion.php" method="post">
				<h2>Productos por nombre</h2>
				Nombre <input type="text" name="prod">
				<input type="submit" name="filtraProd" value="Consultar">
			</form><hr>
			<!--tipo get-->
			<form action="peticion.php" method="post">
				<h2>Productos por precio</h2>
				Rango mínimo <input type="number" min="5000" max="50000" name="minPrice" required>
				Rango máximo <input type="number" min="5000" max="20000" name="maxPrice" required>
				<input type="submit" name="filtraPrice" value="Consultar">
			</form><hr>
			<!--tipo get-->
			<!-- <form action="peticion.php" method="post">
				<h2>Asignaturas de un alumno</h2> 
				Matrícula del alumno <input type="text" name="matricula">
				<input type="submit" name="filtraAsignatura" value="Consultar">
			</form><hr> -->
			<!--tipo post-->
			<!-- <form action="peticion.php" method="post">
				<h2>Matricular un alumno en una asignatura</h2> 
				Matricula del Alumno <input type="text" name="matricula" required>
				Código de la Asignatura <input type="text" name="codigo" required>
				<input type="submit" name="matricular" value="Matricular">
			</form><hr> -->
			<!--tipo delete-->
			<!-- <form action="peticion.php" method="POST">
				<h2>Borrar un alumno:</h2> 
				Matricula del Alumno <input type="text" name="matricula" required>
				<input type="submit" name="borrar" value="Borrar">
			</form><hr> -->
			<!--tipo put-->
			<!-- <form action="peticion.php" method="POST">
				<h2>Cambio de grupo de un alumno:</h2> 
				Matricula del Alumno <input type="text" name="matricula" required>
				Nuevo grupo <input type="text" name="grupo" require>
				<input type="submit" name="cambiaGrupo" value="Actualizar">
			</form><hr> -->
	</div>
	</body>
</html>