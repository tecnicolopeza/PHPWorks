<?php 
require_once 'EscuelaBD.php';

class Asignatura
{
    private $codigo;
    private $nombre;

    function __construct($codigo = "", $nombre = "")
    {
        $this->matricula = $codigo;
        $this->nombre = $nombre;
    }

    public static function getAsignaturaById($codigo) {
		$conexion = EscuelaBD::connectDB();
		$seleccion = "SELECT codigo, nombre FROM asignatura WHERE codigo=\"".$codigo."\"";
		$consulta = $conexion->query($seleccion);
		$registro = $consulta->fetchObject();
		$asignatura = new Asignatura($registro->codigo, $registro->nombre);
		return $asignatura;
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

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }
}