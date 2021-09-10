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

}

