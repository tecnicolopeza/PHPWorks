<?php require_once 'BlogDB.php';

class Articulo
{
    private $id;
    private $titulo;
    private $fecha_publicacion;
    private $contenido;

    function __construct($id, $titulo = "", $fecha_publicacion = "", $contenido = "")
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->contenido = $contenido;
    }


    #INSERTAR ARTICULOS
    public function insert()
    {
        $conexion = BlogDB::connectDB();
        $insercion = "INSERT INTO articulos (titulo, fecha_publicacion, contenido) VALUES ('$this->titulo', 
        '" . date('Y-m-d H:i:s') . "', '$this->contenido')";
        // $insercion = "INSERT INTO articulos (titulo, fecha_publicacion, contenido) VALUES ('$this->titulo', 
        // NOW(), '$this->contenido')";
        $conexion->exec($insercion);
    }


    #BORRAR ARTICULOS
    public function delete()
    {
        $conexion = BlogDB::connectDB();
        $borrado = "DELETE FROM articulos WHERE id='$this->id'";
        $conexion->exec($borrado);
    }

    #UPDATE ARTICULOS
    public function update()
    {
        $conexion = BlogDB::connectDB();
        $update = "UPDATE articulos SET titulo='$this->titulo', fecha_publicacion = NOW(),
        contenido='$this->contenido' WHERE id='$this->id'";
        $conexion->exec($update);
    }

    #CONSULTAR TODOS LOS ARTICULOS
    public static function getArticulos()
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, titulo, fecha_publicacion, contenido FROM articulos ORDER BY fecha_publicacion DESC";
        $consulta = $conexion->query($seleccion);
        $articulos = [];
        while ($registro = $consulta->fetchObject()) {
            $articulos[] = new Articulo(
                $registro->id,
                $registro->titulo,
                $registro->fecha_publicacion,
                $registro->contenido
            );
        }
        return $articulos;
    }

    #CONSULTAR ARTICULOS POR ID
    public static function getArticuloById($id)
    {
        $articulo = [];
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, titulo, fecha_publicacion, contenido FROM articulos 
        WHERE  id=".$id."";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $articulo[] = new Articulo($registro->id, $registro->titulo, $registro->fecha_publicacion, $registro->contenido);
        return $articulo;
    }

    #CONSULTAR ARTICULOS POR TITULO
    public static function getArticuloByTitle($titulo)
    {
        $articulo = [];
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, titulo, fecha_publicacion, contenido FROM articulos 
        WHERE UPPER(titulo) LIKE UPPER('%" . $titulo . "%') ORDER BY fecha_publicacion DESC"; //busca cadenas que contengan ese titulo
        $consulta = $conexion->query($seleccion);
        while ($registro = $consulta->fetchObject()) {
            $articulo[] = new Articulo(
                $registro->id,
                $registro->titulo,
                $registro->fecha_publicacion,
                $registro->contenido
            );
        }
        return $articulo;
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
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of fecha_publicacion
     */
    public function getFechaPublicacion()
    {
        return $this->fecha_publicacion;
    }

    /**
     * Set the value of fecha_publicacion
     */
    public function setFechaPublicacion($fecha_publicacion): self
    {
        $this->fecha_publicacion = $fecha_publicacion;

        return $this;
    }

    /**
     * Get the value of contenido
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set the value of contenido
     */
    public function setContenido($contenido): self
    {
        $this->contenido = $contenido;

        return $this;
    }
}
