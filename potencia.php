<?php
require_once 'calcularCuentas.php';

class potencia extends hacerCalculos {
  

    public function __construct($numero,$op){

    parent::__construct($numero,$op);

    }
    
    public function __toString()
    {
        return "El cuadrado de {$this->numero} es = return {$this->calcularOperaciones ()}";
    }
}