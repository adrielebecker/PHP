<?php
    //atividade 8
    function serieFibonacci($num){
        $ant = 0;
        $fib = 1;
        echo $ant." ".$fib." ";
        for($i = 2; $i < $num; $i++){
            $aux = $ant;
            $ant = $fib;
            $fib = $fib + $aux;
            echo $fib." ";
        }
    }

    //atividade 9
    function votantesCidade($populacao, $votantes){
        if($populacao != 0){
            $popVotante = $votantes * 100 / $populacao;
            return $popVotante;
        }
    }

    function votosCandidatoCalculo($votantes, $candidatos){
        if($votantes != 0){
            $candidatos = $candidatos * 100 / $votantes;
            return $candidatos;
        }
    }

    function votosBrancos($votantes, $cand1, $cand2){
        $brancos = $votantes - ($cand1 + $cand2);
        return $brancos;
    }

    //atividade 10
    function fatorial($num, $fat){
        for($i = 1; $i <= $num; $i++){
            $fat = $fat * $i;
        }
        return $fat;
    }

    //atividade 11
    function verificaMaiuscula($caractere){
        if($caractere >= "A" && $caractere <= "Z"){
            return "1";
        }
        else{
            return "0";
        }
    }

    //atividade 12
    function ordemCrescente($num1,$num2,$num3){
        if($num1 > $num2 && $num2 > $num3 && $num3 < $num1){
            return $num3.", ".$num2.", ".$num1;
        }
        else if($num1 > $num2 && $num2 < $num3 && $num3 < $num1){
            return $num2.", ".$num3.", ".$num1;
        }
        else if($num1 > $num2 && $num2 < $num3 && $num3 > $num1){
            return $num2.", ".$num1.", ".$num3;
        }
        else if($num1 < $num2 && $num2 > $num3 && $num3 < $num1){
            return $num3.", ".$num1.", ".$num2;
        }
        else if($num1 < $num2 && $num2 < $num3 && $num3 > $num1){
            return $num1.", ".$num2.", ".$num3; 
        }
        else if($num1 < $num2 && $num2 > $num3 && $num3 > $num1){
            return $num1.", ".$num3.", ".$num2;
        }
        else{
            return $num2.", ".$num1.", ".$num3;
        }
    }
?>