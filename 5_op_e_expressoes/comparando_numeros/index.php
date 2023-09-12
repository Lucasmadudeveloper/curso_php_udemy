<?php

function compararNumeros($numero1, $numero2) {
    if ($numero1 > $numero2) {
        return "O primeiro número é maior. <br>";
    } elseif ($numero2 > $numero1) {
        return "O segundo número é maior. <br>";
    } else {
        return "Os números são iguais.";
    }
}

// Exemplos de uso:
$resultado1 = compararNumeros(5, 3);
echo $resultado1;  // Deve imprimir "O primeiro número é maior."

$resultado2 = compararNumeros(3, 5);
echo $resultado2;  // Deve imprimir "O segundo número é maior."

$resultado3 = compararNumeros(5, 5);
echo $resultado3;  // Deve imprimir "Os números são iguais."
?>
