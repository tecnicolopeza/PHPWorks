<?php require_once 'ConexionBD.php';

class Incidencia
{
    private $id;
    private $descripcion;
    private $profesor;
    private $fecha;
    private $estado;
    private $admin;

    function __construct($id = NULL, $descripcion = "", $profesor = "", $fecha = "", $estado = "", $admin = NULL)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->profesor = $profesor;
        $this->fecha = $fecha;
        $this->estado = $estado;
        $this->admin = $admin;
    }

    #INSERTAR INCIDENCIAS
    public function insert()
    {
        $conexion = ConexionBD::connectDB();
        $insercion = "INSERT INTO incidencia (descripcion, profesor, fecha, estado, admin) VALUES ('$this->descripcion','$this->profesor', 
        '" . date('Y-m-d H:i:s') . "', '$this->estado', '')";
        $conexion->exec($insercion);
    }


    #BORRAR INCIDENCIAS
    public function delete()
    {
        $conexion = ConexionBD::connectDB();
        $borrado = "DELETE FROM incidencia WHERE id=$this->id";
        $conexion->exec($borrado);
    }

    #ACTUALIZA INCIDENCIAS
    public function cambiarEstado()
    {
        $conexion = ConexionBD::connectDB();
        $update = "UPDATE incidencia SET estado='REPARADA', admin='".$_SESSION['user']."' WHERE id='$this->id'";
        $conexion->exec($update);
    }

    public static function getIncidencias(){
        $conexion = ConexionBD::connectDB();
        $selection = "SELECT * FROM incidencia";
        $consult = $conexion->query($selection);
        $incidencias = [];
        while ($registro = $consult->fetchObject()) {
            $incidencias[] = new Incidencia(
                $registro->id,
                $registro->descripcion,
                $registro->profesor,
                $registro->fecha,
                $registro->estado,
                $registro->admin
            );
        }
        return $incidencias;
    }


    public static function getIncidenciasPendientes(){
        $conexion = ConexionBD::connectDB();
        $selection = "SELECT * FROM incidencia WHERE estado = 'PENDIENTE'";
        $consult = $conexion->query($selection);
        $incidencias = [];
        while ($registro = $consult->fetchObject()) {
            $incidencias[] = new Incidencia(
                $registro->id,
                $registro->descripcion,
                $registro->profesor,
                $registro->fecha,
                $registro->estado,
                $registro->admin
            );
        }
        return $incidencias;
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
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of profesor
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * Set the value of profesor
     */
    public function setProfesor($profesor): self
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     */
    public function setFecha($fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set the value of admin
     */
    public function setAdmin($admin): self
    {
        $this->admin = $admin;

        return $this;
    }
}
