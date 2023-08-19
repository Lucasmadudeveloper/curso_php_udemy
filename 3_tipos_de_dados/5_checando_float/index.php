<?php

 $a = "teste";
 $b = 12.8;

 if (is_float($a)) {
    echo "É um número float! <br>";
 }

 if (is_float($b)) { // se não for um número float não vai imprimir na tela pois é falso
    echo "É um número float!<br>";
 }
