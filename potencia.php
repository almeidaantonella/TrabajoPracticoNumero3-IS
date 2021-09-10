<?php

class potencia  {
    public $numero;

    public function __construct($numero)
 {
    $this->numero = $numero;

    }

    public function calculaPotencia (){
        return $this->numero * $this->numero;
    }
    
    public function __toString()
    {
        return "La cuadrado de {$this->numero} es = return {$this->calculaPotencia ()}";
    }
}