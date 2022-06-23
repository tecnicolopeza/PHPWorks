<?php require_once 'EscuelaBD.php';

class Alumno
{
    private $matricula;
    private $nombre;
    private $apellidos;
    private $curso;

    function __construct($matricula = "", $nombre = "", $apellidos = "", $curso = "")
    {
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->curso = $curso;
    }


    #METODOS

    public static function getAlumnosByCurso($curso)
    {
        $conexion = EscuelaBD::connectDB();
        $selection = "SELECT * FROM alumno WHERE curso LIKE '%".$curso."%'";
        $consult = $conexion->query($selection);
        $alumnos = [];
        while ($registro = $consult->fetchObject()) {
            $alumnos[] = new Alumno(
                $registro->matricula,
                $registro->nombre,
                $registro->apellidos,
                $registro->curso
            );
        }
        return $alumnos;
    }

    public static function getAlumnosByName($name)
    {
        $conexion = EscuelaBD::connectDB();
        $selection = "SELECT * FROM alumno WHERE nombre LIKE '%".$name."%'";
        $consult = $conexion->query($selection);
        $alumnos = [];
        while ($registro = $consult->fetchObject()) {
            $alumnos[] = new Alumno(
                $registro->matricula,
                $registro->nombre,
                $registro->apellidos,
                $registro->curso
            );
        }
        return $alumnos;
    }



    #GETTERS Y SETTERS

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
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos($apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     */
    public function setCurso($curso): self
    {
        $this->curso = $curso;

        return $this;
    }
}
