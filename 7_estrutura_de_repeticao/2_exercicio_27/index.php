<?php

 $arr = array (5, "Lucas", true, false, "Futuro Progamador", 1600.00, true, false, [], "Me contrata haha");

 $x = count($arr);
 $y = 0;

 while ($y < $x) {
    if (is_string($arr[$y])) {
        echo $arr[$y] . "<br>";
    }

    $y++;
 }