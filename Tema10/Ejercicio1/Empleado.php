<?php

// Confeccionar una clase Empleado con los atributos nombre y sueldo.
// Definir un método “asigna” que reciba como dato el nombre y sueldo y actualice los atributos (debe comprobar
// que el nombre recibido coincide con el atributo nombre y si es así actualiza el atributo sueldo con el sueldo
// recibido).
// Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo
// supera a 3000 paga impuestos). 

class Empleado
{

    #ATRIBUTOS
    private $nombre;
    private $sueldo;

    #CONSTRUCTOR
    public function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }


    #METODOS
    public function asigna($nombre, $sueldo) #actualiza sueldo
    {
        if($nombre == $this->getNombre()){
            $this->sueldo = $sueldo;
        }
    }

    public function pagaImpuestos(){
        if ($this->sueldo >3000) {
            return true; #si paga impuestos
        }else{
            return false; #no paga impuestos
        }
    }


    #GETTERS Y SETTERS
    /**
     * Get the value of sueldo
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     */
    public function setSueldo($sueldo): self
    {
        $this->sueldo = $sueldo;

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
}
