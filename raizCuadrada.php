<?php

require_once 'calcularCuentas.php';

class RaizCuadrada extends hacerCalculos  {


    public function __construct($numero,$op)
 {
    parent::__construct($numero,$op);

    }


    public function __toString()
    {
        return "La Raiz Cuadrada de {$this->numero} es = {$this->calcularOperaciones ()}";
    }
}