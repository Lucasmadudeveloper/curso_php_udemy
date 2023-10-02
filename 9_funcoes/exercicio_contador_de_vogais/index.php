<?php

function countVowels($string) {
    // Inicialize um contador para as vogais.
    $contador = 0;

    // Converte a string para letras minúsculas para que possamos comparar com vogais em minúsculas.
    $string = strtolower($string);

    // Percorre cada caractere da string.
    for ($i = 0; $i < strlen($string); $i++) {
        // Verifica se o caractere atual é uma vogal.
        $caractere = $string[$i];
        if ($caractere == 'a' || $caractere == 'e' || $caractere == 'i' || $caractere == 'o' || $caractere == 'u') {
            // Se for uma vogal, incrementa o contador.
            $contador++;
        }
    }

    // Retorna a quantidade de vogais encontradas na string.
    return $contador;
}

// Exemplo de uso:
$string = "Hello, World!";
$resultado = countVowels($string);
echo "A quantidade de vogais na string é: $resultado";
