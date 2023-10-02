<?php   

 function parOuimpar ($num){

    if ($num % 2 == 0) {
        echo "O número $num: é par <br>";
    } else {
        echo "O número $num: é ímpar <br>";
    }
 }

 parOuimpar(30);
 parOuimpar(31);
 parOuimpar(22);
 parOuimpar(11);