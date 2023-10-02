<?php

function sumEvenNumbers($numero) {
    // Inicialize uma variável para acumular a soma dos números pares.
    $soma = 0;

    // Use um loop for para percorrer os números de 1 até o número fornecido.
    for ($i = 1; $i <= $numero; $i++) {
        // Verifique se o número atual é par.
        if ($i % 2 === 0) {
            // Se for par, adicione-o à soma.
            $soma += $i;
        }
    }

    // Retorne a soma dos números pares.
    return $soma;
}

// Exemplo de uso:
$numero = 10; // Substitua pelo número desejado.
$resultado = sumEvenNumbers($numero);
echo "A soma dos números pares de 1 até $numero é: $resultado";