<?php
$cadena="2";
$numero=2;

if($cadena==$numero){
    echo 'La cadena '.$cadena.' y el numero '.$numero.' Son iguales';
    if($cadena===$numero){
        echo '</br>La cadena '.$cadena.' y el numero '.$numero.' Son identicas';
    }else{
        echo '</br>La cadena '.$cadena.' y el numero '.$numero.' No son identicas';
    }
} else {
    echo 'No son iguales';
}