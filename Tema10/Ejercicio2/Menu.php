<?php 
class Menu{
    #ATRIBUTOS
    private $titulos;
    private $enlaces;

    #CONSTRUCTOR
    public function __construct()
    {
        $this->titulos = [];
        $this->enlaces = [];
    }

    #METODOS
    public function __toString() { // método mágico toString
        return "<p>Título: </p>".$this->titulo;
    }
    
    function aniadirElementos($titulo, $enlace) {
        $this->titulos[]=$titulo;
        $this->enlaces[]=$enlace;
    }

    function mostrarVerticalMenu()
    {
        $cadena = "";
        for ($i=0; $i < count($this->titulos); $i++) { 
            $cadena .= "<a href='".$this->enlaces[$i]."'>".$this->titulos[$i]."</a><br>";
        }
        return $cadena;
    }

    function mostrarHorizontalMenu()
    {
        $cadena = "";
        for ($i=0; $i < count($this->titulos); $i++) { 
            if ($i == count($this->titulos)-1) {
                $cadena .= "<a href='".$this->enlaces[$i]."'>".$this->titulos[$i]."</a>";
            }else{
                $cadena .= "<a href='".$this->enlaces[$i]."'>".$this->titulos[$i]."</a> - ";
            }
        }
        return $cadena;
    }

    #GETTERS Y SETTERS
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
     * Get the value of enlace
     */
    public function getEnlace()
    {
        return $this->enlace;
    }

    /**
     * Set the value of enlace
     */
    public function setEnlace($enlace): self
    {
        $this->enlace = $enlace;

        return $this;
    }
}
