<!DOCTYPE html>
<html lang="pt-BR">
    <?php
    $titulo = "Apresentação";

    $texto = "";
    if(isset($_POST['texto']))
       $texto = $_POST['texto'];

    $cor = "";
    if(isset($_POST['cor']))
       $cor = $_POST['cor']; 

    $fonte = "";
    if(isset($_POST['fonte']))
       $fonte = $_POST['fonte'];
       
    $formatacao = "";
    if(isset($_POST['formatacao']))
       $formatacao = $_POST['formatacao'];
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <textarea name="texto" id="texto" cols="20" rows="2"></textarea><br>
        <input type="color" name="cor" id="cor"> 
        <input type="radio" name="fonte" id="fonte" value="12px">12
        <input type="radio" name="fonte" id="fonte" value="14px" >14
        <input type="radio" name="fonte" id="fonte" value="16px">16
        <select name="formatacao" id="formatacao">
            <option value="h1">H1</option>
            <option value="h2">H2</option>
            <option value="h3">H3</option>
            <option value="h4">H4</option>
            <option value="h5">H5</option>
            <option value="h6">H6</option>
        </select>
        <br><br>
        <input type="submit" name="acao" id ="acao" value="Formatar">
    </fieldset>
    </form>
    <?php
    /*echo $texto;
    echo $cor;
    echo $fonte;
    echo $formatacao;*/
    echo "<$formatacao style = 'color:$cor; font-size:$fonte'>$texto</$formatacao>"; 
    ?>
</body>
</html>