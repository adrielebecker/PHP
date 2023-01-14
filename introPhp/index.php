<!DOCTYPE html>
<html lang="pt-BR">
    <?php
    $titulo = "Meu primeiro programa em PHP";
    $texto = "Alô mundo";
    ?>
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo ; ?></title>
</head>
<body>
    <?php
    $nome = "Adriele";
    $sobrenome = "Becker";
    echo "Seu nome completo é $nome $sobrenome";
    echo "<h1>".$titulo. "</h1>";
    echo "<h2>" .$texto. "</h2>";
    ?> 
</body>
</html>