<?php    
class Cubo{

    #ATRIBUTOS
    private $capacidad;
    private $contenido;

    #CONSTRUCTOR
    public function __construct($capacidad, $contenido)
    {
        $this->capacidad = $capacidad;
        $this->contenido = $contenido;
    }


    #METODOS

    public function getDisponible() { #cantidad disponible para rellenar 
		return $this->capacidad - $this->contenido;
	}

    public function __toString() { // método mágico toString
        return "<p>Capacidad: ".$this->capacidad.", contenido: ".$this->contenido."</p>";
    }

    public function verter($otro){
        $cadena = "";
        #si el cubo que va a vertir tiene cantidad <= 0
        if ($otro->contenido <= 0) {
            return $cadena = "<p>El contenido a vertir es menor o igual a 0</p>";
        }elseif ($otro->contenido>=$this->getDisponible()) {
            $otro->contenido -= $this->getDisponible(); #le restamos lo que sobra de la cantidad disponible
            $this->contenido = $this->capacidad; #lo llenamos al máximo
            return $cadena = "<p>Se ha llenado el cubo hasta su capacidad máxima.</p>";
        }else{
            $this->contenido += $otro->contenido;
            $otro->contenido = 0;
            return $cadena = "<p>Se ha vertido todo el contenido.</p>";
        }
    }

    #GETTERS Y SETTERS
    /**
     * Get the value of capacidad
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set the value of capacidad
     */
    public function setCapacidad($capacidad): self
    {
        $this->capacidad = $capacidad;

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
