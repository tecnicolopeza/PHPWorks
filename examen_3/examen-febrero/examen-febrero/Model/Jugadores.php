<?php
require_once 'EscuelaDB.php';
class Jugadores
{
    private $id;
    private $nombre;
    private $puntos;
    private $marca;


    function __construct($id = 0, $nombre = "", $puntos = 0, $marca = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->puntos = $puntos;
        $this->marca = $marca;
    }
    // create
    public function insert()
    {
        $conexion = DB::connectDB();
        $insercion = "INSERT INTO jugadores (nombre, puntos, marca) VALUES ('$this->nombre','$this->puntos', '$this->marca')";
        $conexion->exec($insercion);
    }

    public function delete()
    {
        $conexion = DB::connectDB();
        $borrado = "DELETE FROM jugadores WHERE codigo=$this->codigo";
        $conexion->exec($borrado);
    }

    // suma
    public function update()
    {
        $puntos = $this->puntos + 25;
        $conexion = DB::connectDB();
        $actualiza = "UPDATE jugadores SET puntos='$puntos' WHERE id = '$this->id'";
        $conexion->exec($actualiza);
    }

    // read
    public static function getJugadores()
    {
        $conexion = DB::connectDB();
        $seleccion = "SELECT * FROM jugadores ORDER BY puntos DESC";
        $consulta = $conexion->query($seleccion);
        $jugadores = [];
        while ($registro = $consulta->fetchObject()) {
            $jugadores[] = new Jugadores($registro->id, $registro->nombre, $registro->puntos, $registro->marca);
        }
        return $jugadores;
    }

    // id
    public static function getJugadorById($id)
    {
        $conexion = DB::connectDB();
        $seleccion = "SELECT * FROM jugadores WHERE id='$id'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $jugador = new Jugadores($registro->id, $registro->nombre, $registro->puntos, $registro->marca);
        return $jugador;
    }

    // puesto
    public static function getJugadorOrderPuntos()
    {
        $conexion = DB::connectDB();
        $seleccion = "SELECT * FROM jugadores ORDER BY puntos DESC";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $jugador = new Jugadores($registro->id, $registro->nombre, $registro->puntos, $registro->marca);
        return $jugador;
    }
    // por nombre
    public static function getJugadoresFiltroNombre($nombre)
    {
        $conexion = DB::connectDB();
        $seleccion = "SELECT * FROM jugadores WHERE nombre LIKE '%$nombre%' ";
        $seleccion .= " ORDER BY puntos DESC ";
        $consulta = $conexion->query($seleccion);
        $jugadores = [];
        while ($registro = $consulta->fetchObject()) {
            $jugadores[] = new Jugadores($registro->id, $registro->nombre, $registro->puntos, $registro->marca);
        }
        return $jugadores;
    }
    // por marca
    public static function getJugadoresFiltroJugMarca($marca, $top=100)
    {
        $conexion = DB::connectDB();
        $seleccion = "SELECT * FROM jugadores WHERE marca='$marca' ";
        $seleccion .= " ORDER BY puntos DESC ";
        $seleccion .= " LIMIT $top ";
        $consulta = $conexion->query($seleccion);
        $jugadores = [];
        while ($registro = $consulta->fetchObject()) {
            $jugadores[] = new Jugadores($registro->id, $registro->nombre, $registro->puntos, $registro->marca);
        }
        return $jugadores;
    }
    public static function getArticuloByCategoria($categoria, $titulo, $likes, $contenido = null)
    {
        $conexion = DB::connectDB();
        $seleccion = "SELECT * FROM jugadores WHERE categoria='$categoria' ";
        if ($contenido) {
            $seleccion .= " and contenido LIKE '%$contenido%' ";
        }
        if ($titulo) {
            $seleccion .= " and titulo LIKE '%$titulo%' ";
        }
        if ($titulo) {
            $seleccion .= " and likes >= '$likes' ";
        }
        $seleccion .= " ORDER BY fecha DESC ";
        $consulta = $conexion->query($seleccion);

        $jugadores = [];
        while ($registro = $consulta->fetchObject()) {
            $jugadores[] = new Jugadores($registro->codigo, $registro->titulo, $registro->categoria, $registro->fecha, $registro->contenido, $registro->likes);
        }
        return $jugadores;
    }


    public static function getSumaMarca()
    {
        $conexion = DB::connectDB();
        $seleccion = "SELECT marca, SUM(puntos) AS suma FROM jugadores GROUP BY marca";
        $consulta = $conexion->query($seleccion);
        $sumMarcas = [];
        while ($registro = $consulta->fetchObject()) {
            $sumMarcas[] = [
                'marca' => $registro->marca,
                'suma' => $registro->suma
            ];
        }
        return $sumMarcas;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

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
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of puntos
     */
    public function getPuntos()
    {
        return $this->puntos;
    }

    /**
     * Set the value of puntos
     *
     * @return  self
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
}
