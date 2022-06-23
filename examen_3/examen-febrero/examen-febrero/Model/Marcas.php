<?php
require_once 'EscuelaDB.php';
class Marcas
{
    private $id;
    private $nombre;

    function __construct($id = 0, $nombre = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function insert()
    {
        $conexion = DB::connectDB();
        $insercion = "INSERT INTO marcas (titulo, fecha, contenido) VALUES ('$this->titulo','" . date('Y-m-d H:i:s') . "', '$this->contenido')";
        $conexion->exec($insercion);
    }
    public function delete()
    {
        $conexion = DB::connectDB();
        $borrado = "DELETE FROM marcas WHERE codigo=$this->codigo";
        $conexion->exec($borrado);
    }
    public function update()
    {
        $conexion = DB::connectDB();
        $actualiza = "UPDATE marcas SET titulo='$this->titulo', fecha=now(), contenido='$this->contenido' WHERE codigo='$this->codigo'";
        $conexion->exec($actualiza);
    }
    // read
    public static function getMarcas()
    {
        $conexion = DB::connectDB();
        $seleccion = "SELECT * FROM marcas";
        $consulta = $conexion->query($seleccion);
        $marcas = [];
        while ($registro = $consulta->fetchObject()) {
            $marcas[] = new Marcas($registro->id, $registro->nombre);
        }
        return $marcas;
    }
    public static function getArticuloByCategoria($categoria, $titulo, $likes, $contenido = null)
    {
        $conexion = DB::connectDB();
        $seleccion = "SELECT * FROM marcas WHERE categoria='$categoria' ";
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

        $marcas = [];
        while ($registro = $consulta->fetchObject()) {
            $marcas[] = new marcas($registro->codigo, $registro->titulo, $registro->categoria, $registro->fecha, $registro->contenido, $registro->likes);
        }
        return $marcas;
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
}
