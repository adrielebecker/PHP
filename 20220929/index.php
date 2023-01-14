<!DOCTYPE html>
<?php
    $text = isset($_POST['text']) ? $_POST['text'] : "";
    $radio1 = isset($_POST['radio1']) ? $_POST['radio1'] : "";
    $check1 = isset($_POST['check1']) ? $_POST['check1'] : 0;
    $check2 = isset($_POST['check2']) ? $_POST['check2'] : 0;
    $cor = isset($_POST['cor']) ? $_POST['cor'] : "";
    $num = isset($_POST['num']) ? $_POST['num'] : 0;
    $estado = isset($_POST['estado']) ? $_POST['estado'] : "";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manter contexto</title>
</head>
<body>
    <form action="secundaria.php" method="post">
        Texto: <input type="text" name="text" id="text" value="<?php echo $text; ?>"><br>
        <input type="color" name="cor" id="cor" value="<?php echo $cor;?>"><br>
        Radio 1 :<input type="radio" name="radio1" id="radio1" checked <?php if($radio1 == 1){echo "checked";}?> value="1"><br>
        Radio 2: <input type="radio" name="radio1" id="radio1" <?php if($radio1 == 2){echo "checked";}?> value="2" ><br>
        Check 1<input type="checkbox" name="check1" id="check1" <?php if($check1 == 1){echo "checked";}?> value="1"><br>
        Check 2 <input type="checkbox" name="check2" id="check2" <?php if($check2 == 2){echo "checked";}?> value="2"><br>
        Numero: <input type="text" name="num" id="num" value="<?php echo $num?>"><br>
        Select: <select name="estado" id="estado">
                    <option <?php echo $estado == "SC" ? "selected" : ""; ?> value="SC">Santa Catarina</option>
                    <option <?php echo $estado == "PR" ? "selected" : ""; ?> value="PR">Paraná</option>
                    <option <?php echo $estado == "RS" ? "selected" : "" ?> value="RS">Rio Grande do Sul</option>
                </select>
        <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>
<!--fazer o num aparecer no input e usar algumas funções do php-->