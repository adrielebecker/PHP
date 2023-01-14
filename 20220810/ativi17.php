<!DOCTYPE html>
<?php
    $sigla = "";
    if(isset($_POST['sigla']))
        $sigla = ($_POST['sigla']);
?>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipla escolha</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 17</legend>
            <label for="sigla">Digite a sigla do estado:</label>
            <input type="text" name="sigla" id="sigla"><br>
            <input type="submit" value="Verificar" name="acao" id="acao">
            <br>
<?php
    if(isset($_POST['sigla'])){
        switch (strtoupper($sigla)){
            case "RJ":
                echo "Carioca";
                break;
            case "SP":
                echo "Paulista";
                break;
            case "MG":
                echo "Mineiro";
                break;
            case "SC":
                echo "Catarinense";
                break;
            case "PR":
                echo "Paranaense";
                break;
            case "BA":
                echo "Baiano";
                break;
            default:
                echo "Sigla não consta na base de dados";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>