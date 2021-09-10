<?php

class hacerCalculos  {
    protected $numero;
    public $op;

    public function __construct($numero,$op)
    {
    $this->numero = $numero;
    $this->op = $op;
    }

    public function getNumero(){
        return $this->numero ;
    }
    
    public function calcularOperaciones ()
    {
        switch ( $this->op)  { 
            case 1:
                return $this->numero * $this->numero;
                break;

            case 2:
                return sqrt($this->numero);
                break;
            case 3:
                $factorial = 1; 
                for ($i = 1; $i <= $this->numero; $i++){ 
                  $factorial = $factorial * $i; 
                } 
                return $factorial; 
                break;
        }
    }
    
    public function __toString()
    {
        if ( $this->op === 1){
            return "El cuadrado de {$this->numero} es = return {$this->calcularOperaciones ()}";
        } else if ( $this->op === 2){
            return "El Factorial de {$this->numero} es = {$this->calcularOperaciones ()}";
        } else if ($this->op === 3){
            return "La Raiz Cuadrada de {$this->numero} es = {$this->calcularOperaciones ()}";
        }
        
    }

}

