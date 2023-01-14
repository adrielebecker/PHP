<!DOCTYPE html>
<?php
    $limSup = isset($_POST['limSup']) ? $_POST['limSup'] : 0;
    $limInf = isset($_POST['limInf']) ? $_POST['limInf'] : 0;
    $decre = isset($_POST['decre']) ? $_POST['decre'] : 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 11</legend>
            <label for="limSup">Limite Superior:</label>
            <input type="text" name="limSup" id="limSup"><br>
            <label for="limInf">Limite Inferior</label>
            <input type="text" name="limInf" id="limInf"><br>
            <label for="decre">Decremento</label>
            <input type="text" name="decre" id="decre"><br>
            <input type="submit" value="Enviar"><br>
<?php
    if(isset($_POST['limSup'])){
    echo "<table>
    <tr>
    <td>Fahrenheit</td><td>Celsius</td>
    </tr>
    ";
    for($i = $limSup; $i >= $limInf; $i -= $decre){
        $cels = 5 * ($i - 32) / 9;
        echo "<tr>
        <td>$i</td><td>$cels</td>
            </tr><br>";
    }
}
?>
</table>
        </fieldset>
    </form>
</body>
</html>