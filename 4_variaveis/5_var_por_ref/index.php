<?php 

 $x = 10;

 $y = & $x;

 echo "$x <br>";
 echo "$y <br>";
 
 $y = 15;

 echo "Atribuição após ref <br>";
 echo "$x <br>";
 echo $y;
?>