<!DOCTYPE html>
<?php
    $matriz = array("Bill" => array("rg" => "00.000.000-00", "cpf" => "00.000.000-00"),
                    "Steve" => array("rg" => "10.100.100-1", "cpf" => "100.100.100-10"),
                    "Mark" => array("rg" => "20.200.200-2", "cpf" => "200.200.200-20"));
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz 3 X 3</title>
</head>
<body>
    <?php
        echo $matriz['Bill']['rg']."<br>";
        echo $matriz['Steve']['rg']."<br>";
        echo $matriz['Mark']['rg'];
    ?>
</body>
</html>