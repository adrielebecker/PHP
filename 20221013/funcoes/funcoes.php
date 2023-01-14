<?php
    function temperatura($temperatura, $media, $contador){
        for($i = 0; $i < 5; $i++){
            if($temperatura[$i] > $media){
                $contador++;
            }
        }
        return $contador;
    }

    function somarArrays($a, $b){
        for($i = 0; $i < 10; $i++){
            $soma = $a[$i] + $b[$i];
            echo $a[$i]. " e ". $b[$i]. "soma: ".$soma."<br>";
        }
    }

    function numerarNomes($nome, $cont){
        for($i = 0; $i < 10; $i++){
            $cont++;
            echo $cont." ".$nome[$i]."<br>";
        }
    }

    function numParImpar($num, $cont){
        for($i = 0; $i < count($num); $i++){
            $cont++;
            if($num[$i] % 2 == 0){
                echo $cont." => ".$num[$i]." => par <br>";
            }
            else{
                echo $cont." => ".$num[$i]." => ímpar <br>";
            }
        }
    }

    function ajusteSalario($nome, $salario){
        for($i = 0; $i < 5; $i++){
                $aux = $salario[$i] * 0.08;
                $reajuste = $aux + $salario[$i];
                echo $nome[$i]." R$".$reajuste."<br>";
        }
    }

    function multiplos6($num, $cont){
        for($i = 0; $i < 8; $i++){
            if($num[$i] % 6 == 0){
                $cont++;
            }
            echo $num[$i]."<br>";
        }
        echo $cont." números multiplos de 6";
    }
?>