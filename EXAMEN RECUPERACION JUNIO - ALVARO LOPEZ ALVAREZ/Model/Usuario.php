<?php require_once 'ConexionBD.php';

class Usuario{
    
    private $id;
    private $nombre;

    function __construct($id=NULL, $nombre = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    #METODOS
    
    public static function getUser($nombre){
        $conexion = ConexionBD::connectDB();
        $selection = "SELECT * FROM usuario WHERE nombre='".$nombre."'";
        $consult = $conexion->query($selection);
        $user = "";
        while ($registro = $consult->fetchObject()) {
            $user = new Usuario(
                $registro->id,
                $registro->nombre
            );
        }
        return $user;
    }


    public function insert()
    {
        $conexion = ConexionBD::connectDB();
        $insercion = "INSERT INTO usuario (id, nombre) VALUES ('$this->id', '$this->nombre')";
        // $insercion = "INSERT INTO articulos (titulo, fecha_publicacion, contenido) VALUES ('$this->titulo', 
        // NOW(), '$this->contenido')";
        $conexion->exec($insercion);
    }

    #GETTERS Y SETTERS


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
}

?>