<?php
    $a = 1000000;
    $b = 1300000;
    $cont = 0;
    do{
        $a = ($a * 0.03) + $a;
        $b = ($b *0.02) + $b;
        $cont++;
    } while($a < $b);
    echo "$cont anos";
?>