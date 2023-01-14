<?php

    $var = array();

    for($i = 1; $i <= 100; $i++){
        if($i %2 != 0){
            array_push($var,$i);
            // var_dump($var);
            echo $var . "<br>";
        }
        
    }
?>