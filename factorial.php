<?php
require_once 'calcularCuentas.php';

class factorial extends hacerCalculos  {

    public function __construct($numero, $op)
 {
    parent::__construct($numero,$op);

    }

    public function __toString()
    {
        return "El Factorial de {$this->numero} es = {$this->calcularOperaciones ()}";
    }
}