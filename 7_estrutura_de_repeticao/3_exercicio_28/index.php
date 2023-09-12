<?php

$x = 4;
$limite = 30;
while ($x < $limite) {

     echo "Executando o loop $x <br>";
    
    if ($x === 24) {
        echo "parando o loop";
        break;
    }
    $x += 2 ;
   
    
}
