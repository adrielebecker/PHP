<?php
    $matriz = [[1,2,3,4,5], [1,2,3,4,5], [1,2,3,4,5], [1,2,3,4,5],[1,2,3,4,5]];
    $matriz2 = array();

    function numerosImpares($matriz, $matriz2){
        for($i = 0; $i < count($matriz); $i++){
            for($j = 0; $j < count($matriz[$i]); $j++){
                if($matriz[$i][$j] % 2 == 0){
                    $matriz2[$i][$j] = $matriz[$i][$j];
                } else{
                    $matriz2[$i][$j] = 0;
                }
                echo $matriz[$i][$j]." | ";
            }
            echo "<br>";
        }

        echo "<br><br>";

        for($i = 0; $i < count($matriz2); $i++){
            for($j = 0; $j < count($matriz2[$i]); $j++){
                echo $matriz2[$i][$j]." | ";
            }
            echo "<br>";
        }
    }

    numerosImpares($matriz, $matriz2);
?>