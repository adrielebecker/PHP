<!DOCTYPE html>
<?php
    require_once('funcoes.php');
    $populacao = isset($_POST['populacao']) ? $_POST['populacao'] : 0;
    $votantes = isset($_POST['votantes']) ? $_POST['votantes'] : 0;
    $nome1 = isset($_POST['nome1']) ? $_POST['nome1'] : "";
    $cand1 = isset($_POST['cand1']) ? $_POST['cand1'] : 0;
    $nome2 = isset($_POST['nome2']) ? $_POST['nome2'] : "";
    $cand2 = isset($_POST['cand2']) ? $_POST['cand2'] : 0;

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        População: <input type="text" name="populacao" id="populacao"><br>
        Votantes: <input type="text" name="votantes" id="votantes"><br>
        Nome Candidato 1: <input type="text" name="nome1" id="nome1"><br>
        Votos Candidato 1: <input type="text" name="cand1" id="cand1"><br>
        Nome Candidato 2: <input type="text" name="nome2" id="nome2"><br>
        Votos Candidato 2: <input type="text" name="cand2" id="cand2">
        <input type="submit" value="Enviar"><br><br>
<?php
    $popVotantes = votantesCidade($populacao, $votantes);
    $perce1 = votosCandidatoCalculo($votantes, $cand1);
    $perce2 = votosCandidatoCalculo($votantes, $cand2);
    $brancos = votosBrancos($votantes, $cand1, $cand2);
    if(isset($_POST['populacao']) && isset($_POST['votantes']) && isset($_POST['nome1']) && isset($_POST['nome2']) && isset($_POST['cand2']) && isset($_POST['cand1'])){
        if($votantes <= $populacao){
            echo "Percentual de votantes na cidade: ".$popVotantes." % <br><br>";
            if($cand1 + $cand2 <= $votantes){
                echo "Percentual de votos para ".$nome1." é: ".$perce1."% e para ".$nome2." é: ".$perce2."% <br><br>";
                    if($cand1 + $cand2 < $votantes){
                        echo "O percentual de votos brancos/nulos é de: ".$brancos."% <br><br>";
                    }
                if($perce1 > $perce2){
                    echo $nome1." venceu com ".$perce1."% dos votos!";
                } 
                elseif($perce1 == $perce2){
                    echo $nome1." e ".$nome2." tem a mesma porcentagem dos votos!";
                } 
                else{
                    echo $nome2." venceu com ".$perce2."% dos votos!";
                }
            } 
            else{
                echo "Número inválido de votantes!";
            }
        } 
        else{
            echo "Número inválido de votantes!";
        }
    }   
?>
    </form>
</body>
</html>