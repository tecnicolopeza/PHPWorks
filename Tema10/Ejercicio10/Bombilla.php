<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


class Bombilla{

    #ATRIBUTOS
    private $estado;
    private $potencia;
    private $ubicacion;

    #CONSTRUCTOR
    public function __construct($estado, $potencia, $ubicacion){
        $this->estado = $estado;
        $this->potencia = $potencia;
        $this->ubicacion = $ubicacion;
    }

    #METODOS
    


    #GETTERS Y SETTERS
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
     * Get the value of potencia
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * Set the value of potencia
     */
    public function setPotencia($potencia): self
    {
        $this->potencia = $potencia;

        return $this;
    }

    /**
     * Get the value of ubicacion
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set the value of ubicacion
     */
    public function setUbicacion($ubicacion): self
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }
}

?>