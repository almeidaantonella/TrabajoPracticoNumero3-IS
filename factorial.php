<?php

class factorial  {
    public $numero;

    public function __construct($numero)
 {
    $this->numero = $numero;

    }

    public function calculaFactorial (){ 
        $factorial = 1; 
            for ($i = 1; $i <= $this->numero; $i++){ 
              $factorial = $factorial * $i; 
            } 
        return $factorial; 
         
         
    }
    
    public function __toString()
    {
        return "El Factorial de {$this->numero} es = {$this->calculaFactorial ()}";
    }
}