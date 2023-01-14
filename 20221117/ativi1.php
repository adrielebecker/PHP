<?php
    $matriz = [[1,2,3,4,5], [1,2,3,4,5], [1,2,3,4,5], [1,2,3,4,5],[1,2,3,4,5]];
    $matriz2 = array();

    function indicesPares($matriz, $matriz2){
        for($i = 0; $i < count($matriz); $i++){
            for($j = 0; $j < count($matriz[$i]); $j++){
                echo $matriz[$i][$j]." | ";
                $soma = $i + $j;

                if($soma % 2 == 0){
                    $matriz2[$i][$j] = $matriz[$i][$j]; 
                } else{
                    $matriz2[$i][$j] = 0;
                }
            }
            echo "<br>";
        }
        echo "<br><br>";
        for($i = 0; $i < count($matriz); $i++){
            for($j = 0; $j < count($matriz[$i]); $j++){
                echo $matriz2[$i][$j]." | ";
            }
            echo "<br>";
        }
    }
    

    indicesPares($matriz, $matriz2);
?>