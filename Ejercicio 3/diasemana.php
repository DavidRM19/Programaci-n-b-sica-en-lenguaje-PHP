<?php

$diasemana = $_POST['diasemana'];

    if ($diasemana==1) {

        echo "Lunes";
    }
    else if ($diasemana==2) {

        echo "Martes";
    }
    else if ($diasemana==3) {

        echo "Miercoles";
    }
    else if ($diasemana==4) {

        echo "Jueves";
    }
    else if ($diasemana==5) {

        echo "Viernes";
    }
    else if ($diasemana==6) {

        echo "Sabado";
    }
    else if ($diasemana==7) {

        echo "Domingo";
    }
    else {

        echo "ERROR";
    }

?>
