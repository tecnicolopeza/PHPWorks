<?php

require_once 'EscuelaBD.php';
require_once 'Alumno.php';
require_once 'Asignatura.php';

class AlumnoAsignatura {
	private $matricula;
	private $codigo;

	function __construct($matricula="", $codigo=0) {
		$this->codigo = $codigo;	
		$this->matricula = $matricula;
	}

    public static function getAsignaturaByMatricula($mat) {
		$conexion = EscuelaBD::connectDB();
		$seleccion = "SELECT * FROM asignatura WHERE codigo IN(SELECT codigo FROM alumnoasignatura WHERE matricula=\"".$mat."\")";
		$consulta = $conexion->query($seleccion);
		$asignaturas = [];
        while ($registro = $consulta->fetchObject()) {
            $asignaturas[] = Asignatura::getAsignaturaById($registro->codigo);
        }
		return $asignaturas;
	}

	/**
	 * Get the value of matricula
	 */
	public function getMatricula()
	{
		return $this->matricula;
	}

	/**
	 * Set the value of matricula
	 */
	public function setMatricula($matricula): self
	{
		$this->matricula = $matricula;

		return $this;
	}

	/**
	 * Get the value of codigo
	 */
	public function getCodigo()
	{
		return $this->codigo;
	}

	/**
	 * Set the value of codigo
	 */
	public function setCodigo($codigo): self
	{
		$this->codigo = $codigo;

		return $this;
	}
}