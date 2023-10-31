<?php

$tabla = $_POST['tabla_multiplicar'];

$tabla_multiplicar=0;
   
for ($i=0 ; $i<=10 ; $i++) {


    
    $tabla_multiplicar = $tabla*$i;

    echo "$tabla  x  $i =  $tabla_multiplicar </br>";

   }

?>