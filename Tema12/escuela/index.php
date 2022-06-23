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
	<h1>Consulta de la API alumnos</h1>
	<div class="contenedor">

		<!--tipo get-->
		<form action="peticion.php" method="post">
			<h2>Alumnos por curso</h2>
			<select name="cursos">
				<option value="1SMR">1SMR</option>
				<option value="2SMR">2SMR</option>
				<option value="1DAW">1DAW</option>
				<option value="2DAW">2DAW</option>
			</select>
			<input type="submit" name="filtraPorCurso" value="Consultar"> <!-- Nunca enviar esto al servicio -->
		</form>
		<hr>
		<!--tipo get-->
		<form action="peticion.php" method="post">
			<h2>Alumnos por nombre</h2>
			Nombre <input type="text" name="nombreAlumno">
			<input type="submit" name="filtrarNombreAlumno" value="Consultar">
		</form>
		<hr>
		<!--tipo get-->
		<form action="peticion.php" method="post">
				<h2>Asignaturas de un alumno</h2> 
				Matrícula del alumno <input type="text" name="matricula">
				<input type="submit" name="filtraAsignatura" value="Consultar">
		</form><hr>
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