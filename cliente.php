<?php

require_once 'potencia.php';
require_once 'raizCuadrada.php';
require_once 'factorial.php';


$var1=$_GET['var1'];


$p = new Potencia($var1,1);
$r = new RaizCuadrada($var1,2);
$f = new Factorial($var1,3);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Datos </title>
    </head>
    <body>
      <div class="container">
      <header class="col-12 jumbotron">
        <h1>Resultados de las Operaciones</h1>
      </header>
      <main role="main" class="col-12 row">
        <article>
            <p> <?php echo  $p;?> </p>
            <p> <?php echo  $r;?> </p>
            <p> <?php echo  $f;?> </p>
        </article>
      </main>
        <footer class="col-12 text-muted">
            <p>Este es el TP Nº3: GIT </p>
        </footer>
    </div>
    </body>
</html>
    
