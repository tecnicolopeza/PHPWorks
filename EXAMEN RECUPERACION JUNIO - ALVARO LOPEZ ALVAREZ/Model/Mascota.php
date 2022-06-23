<?php require_once 'ConexionBD.php';
require_once 'session.php';

class Mascota{
    
    private $id;
    private $nombre;
    private $animal;
    private $usuario;

    function __construct($id=NULL, $nombre = "", $animal="", $usuario = 0)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->animal = $animal;
        $this->usuario = $usuario;
    }

    #METODOS
    
    public static function getMascotasById(){
        $conexion = ConexionBD::connectDB();
        $selection = "SELECT * FROM mascota WHERE usuario = '".$_SESSION['id']."'";
        $consult = $conexion->query($selection);
        $mascota = [];
        while ($registro = $consult->fetchObject()) {
            $mascota[] = new Mascota(
                $registro->id,
                $registro->nombre,
                $registro->animal,
                $registro->usuario
            );
        }
        return $mascota;
    }    


    public static function getMascotasByUsuario($usuario){
        $conexion = ConexionBD::connectDB();
        $selection = "SELECT * FROM mascota WHERE usuario = '".$usuario."'";
        $consult = $conexion->query($selection);
        $mascota = [];
        while ($registro = $consult->fetchObject()) {
            $mascota[] = new Mascota(
                $registro->id,
                $registro->nombre,
                $registro->animal,
                $registro->usuario
            );
        }
        return $mascota;
    }  

    public static function getMascotasAdoptadas(){
        $conexion = ConexionBD::connectDB();
        $selection = "SELECT * FROM mascota WHERE usuario != 0";
        $consult = $conexion->query($selection);
        $mascota = [];
        while ($registro = $consult->fetchObject()) {
            $mascota[] = new Mascota(
                $registro->id,
                $registro->nombre,
                $registro->animal,
                $registro->usuario
            );
        }
        return $mascota;
    }

    public static function getMascotasSinAdoptar(){
        $conexion = ConexionBD::connectDB();
        $selection = "SELECT * FROM mascota WHERE usuario = 0";
        $consult = $conexion->query($selection);
        $mascota = [];
        while ($registro = $consult->fetchObject()) {
            $mascota[] = new Mascota(
                $registro->id,
                $registro->nombre,
                $registro->animal,
                $registro->usuario
            );
        }
        return $mascota;
    }

    public function update()
    {
        $conexion = ConexionBD::connectDB();
        $update = "UPDATE mascota SET usuario='$this->usuario' WHERE id='$this->id'";
        $conexion->exec($update);
    }

    public static function getListaTipoAnimales(){
        $conexion = ConexionBD::connectDB();
        $selection = "SELECT DISTINCT animal FROM mascota ORDER BY animal ASC";
        $consult = $conexion->query($selection);
        $mascota = [];
        while ($registro = $consult->fetchObject()) {
            $mascota[] = $registro->animal;
        }
        return $mascota;
    }

    public static function getAnimalesSinAdoptarPorTipo($tipo){
        $conexion = ConexionBD::connectDB();
        $selection = "SELECT * FROM mascota WHERE usuario = 0 AND animal = '".$tipo."'";
        $consult = $conexion->query($selection);
        $mascota = [];
        while ($registro = $consult->fetchObject()) {
            $mascota[] = new Mascota(
                $registro->id,
                $registro->nombre,
                $registro->animal,
                $registro->usuario
            );
        }
        return $mascota;
    }


    public function insert()
    {
        $conexion = ConexionBD::connectDB();
        $insercion = "INSERT INTO mascota (nombre, animal) VALUES ('$this->nombre', '$this->animal')";
        $conexion->exec($insercion);
    }

    public function delete($nombre)
    {
        $conexion = ConexionBD::connectDB();
        $delete = "DELETE FROM mascota WHERE nombre ='".$nombre."'";
        $conexion->exec($delete);
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
     * Get the value of animal
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set the value of animal
     */
    public function setAnimal($animal): self
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get the value of usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     */
    public function setUsuario($usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }
}