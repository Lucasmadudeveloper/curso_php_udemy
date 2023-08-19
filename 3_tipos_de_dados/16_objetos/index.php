<?php 

   class Pessoa {

     function falar() {
        echo "Olá Pessoal!";
     }

   }

   $lucas = new Pessoa();

   $lucas->nome = "Lucas";

   echo $lucas->nome;

   echo "<br>";

   $lucas->falar();
?>