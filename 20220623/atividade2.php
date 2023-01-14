<!DOCTYPE html>
<?php
$camisa = 0;
if(isset($_POST['camisa']))
   $camisa = ($_POST['camisa']);
$nome = "";
if(isset($_POST['nome']))
   $nome = ($_POST['nome']);
?>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 2</legend>
            <label for="nome">Digite o nome do jogador</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="camisa">Digite o número da camisa do jogador:</label>
            <input type="number" name="camisa" id="camisa">
            <input type="submit" name="acao" id="acao" value="Enviar"><br>
<?php
if ($camisa == 1 && $nome == "Weverton Pereira"){
    echo "Weverton Pereira é goleiro da seleção e sua camisa é a 1";}
if ($camisa == 2 && $nome == "Zeca"){
    echo "Zeca é lateral direito da seleção e sua camisa é a 2";}
if ($camisa == 3 && $nome == "Rodrigo Caio"){
    echo "Rodrigo Caio é lateral esquerdo da seleção e sua camisa é a 3";}
if ($camisa == 4 && $nome == "Marquinhos"){
    echo "Marquinhos é zagueiro da seleção e sua camisa é a 4";}
if ($camisa == 5 && $nome == "Renato Augusto"){
    echo "Renato Augusto é cabeça de área da seleção e sua camisa é a 5";}
if ($camisa == 6 && $nome == "Douglas Santos"){
    echo "Douglas Santos é lateral esquerdo da seleção e sua camisa é a 6";}
if ($camisa == 7 && $nome == "Luan"){
    echo "Luan é atacante da seleção e sua camisa é a 7";}
if ($camisa == 8 && $nome == "Wallace"){
    echo "Wallace é meio campo da seleção e sua camisa é a 8";}
if ($camisa == 9 && $nome == "Gabriel Barbosa"){
    echo "Gabriel Barbosa é atacante da seleção e sua camisa é a 9";}
if ($camisa == 10 && $nome == "Neymar Júnior"){
    echo "Neymar Júnior é meio campo da seleção e sua camisa é a 10";} 
if ($camisa == 11 && $nome == "Gabriel Jesus"){
    echo "Gabriel Jesus é atacante da seleção e sua camisa é a 11";}
if ($camisa > 11){
    echo "Número inválido";}
?>
        </fieldset>
    </form>
</body>
</html>