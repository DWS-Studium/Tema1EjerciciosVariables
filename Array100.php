<?php 
/**Crear array 100 números aleatorios
 * Primer valor divisible entre 13
 * Ultimo valor divisible entre 5
 * Todos los valores divisibles entre siete
 * Optenga el valor mas pequeño dividido entre 3
 * */

//Creamos el array de 100 numeros aleatorios
$tabla=[];
for($i=0;$i<100;$i++){
    $tabla[]=mt_rand(0,1000);
}
foreach($tabla as $numero){
    echo $numero.', ';
}

//Buscamos el primer valor divisible
echo '<h3>Primer valor divisible entre 13</h3>';
$divisible13=null;
foreach($tabla as $numero){
    if ($numero % 13 == 0){
        $divisible13= $numero;
        break;
    }
}
if(count($divisible13)!=null){
        echo $divisible13.'<br>';
} else {
    echo 'No es divisible entre 13';
}


//Invertimos el orden y mostramos el ultimo valor divisible
$reversed = array_reverse($tabla);
echo '<h3>Ultimo valor divisible entre 5</h3>';
$ultimo=null;
foreach($reversed as $numero){
    if ($numero % 5 == 0){
        $ultimo= $numero;
        break;
    }
}
if(count($ultimo)!=null){
        echo $ultimo.'<br>';
} else {
    echo 'No es divisible entre 5';
}


//Mostramos todos los valores divisibles
echo '<h3>Todos los valores divisibles entre 7</h3>';
$valor7=[];
foreach($tabla as $numero){
    if ($numero % 7 == 0){
        $valor7[] = $numero;
    }
}
if(count($valor7)>0){
    foreach($valor7 as $numero){
        echo $numero.'<br>';
    }
} else {
    echo 'No es divisible entre 7';
}


//valor mas pequeño dividido entre 3
echo '<h3>Menor valor divisible entre 3</h3>';
$menores=[];
foreach($tabla as $numero){
    if ($numero % 3 == 0){
        $menores[]=$numero;
    }
}
if(count($menores)>0){
    echo min($menores);
} else {
    echo 'No es divisible entre 7';
}
