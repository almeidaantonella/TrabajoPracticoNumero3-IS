<?php


class RaizCuadrada  {
    public $numero;

    public function __construct($numero)
 {
    $this->numero = $numero;

    }

    public function calcularRaiz (){
        return sqrt($this->numero);
    }
    
    public function __toString()
    {
        return "La Raiz Cuadrada de {$this->numero} es = {$this->calcularRaiz ()}";
    }
}