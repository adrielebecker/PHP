<!DOCTYPE html>
<?php
    $populacao = isset($_POST['populacao']) ? $_POST['populacao'] : 0;
    $votantes = isset($_POST['votantes']) ? $_POST['votantes'] : 0;
    $nome1 = isset($_POST['nome1']) ? $_POST['nome1'] : "";
    $cand1 = isset($_POST['cand1']) ? $_POST['cand1'] : 0;
    $nome2 = isset($_POST['nome2']) ? $_POST['nome2'] : "";
    $cand2 = isset($_POST['cand2']) ? $_POST['cand2'] : 0;

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
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="votos2.php" method="post">
        População: <input type="text" name="populacao" id="populacao"><br>
        Votantes: <input type="text" name="votantes" id="votantes"><br>
        Nome Candidato 1: <input type="text" name="nome1" id="nome1"><br>
        Votos Candidato 1: <input type="text" name="cand1" id="cand1"><br>
        Nome Candidato 2: <input type="text" name="nome2" id="nome2"><br>
        Votos Candidato 2: <input type="text" name="cand2" id="cand2">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>