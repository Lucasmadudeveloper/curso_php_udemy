<?php 
  
   $raca = "Vira lata";
   $nome = "Pandora";
   $idade = 8;
   $cor = "Amarela";

   $pandora = compact("raca", "nome", "idade", "cor");

   print_r($pandora); 
   echo"<br>";

   foreach($pandora as $caracteristica => $value) {
    echo "$caracteristica: $value <br>";
   }
