<?php

$suma_acumulativa = $_POST['suma_acumulativa'];
$suma_acumulativa2= 0;
   
for ($i=0 ; $i<=$suma_acumulativa ; $i++) {

    $suma_acumulativa2=$suma_acumulativa2+$i;

   }

   echo $suma_acumulativa2;

?>