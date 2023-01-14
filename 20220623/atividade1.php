<!DOCTYPE html>
<?php
$camisa = 1;
if(isset($_POST['camisa']))
   $camisa = ($_POST['camisa']);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de seleção</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Estruturas de seleção</legend>
            <label for="camisa">Digite o número da camisa do jogador</label>
            <input type = "number" name="camisa" id="camisa"><br>
            <input type="submit" name="acao" id="acao"value="Enviar"><br>
<?php
if ($camisa == 1){ 
    echo " O nome do jogador é Weverton Pereira";}
if ($camisa == 2){
    echo "O nome do jogador é Zeca";}
if ($camisa == 3){
    echo "O nome do jogador é Rodrigo Caio";}
if ($camisa == 4){
    echo "O nome do jogador é Marquinhos";}
if ($camisa == 5){
    echo "O nome do jogador é Renato Augusto";}
if ($camisa == 6){
    echo "O nome do jogador é Douglas Santos";}
if ($camisa == 7){
    echo "O nome do jogador é Luan";}
if ($camisa == 8){
    echo "O nome do jogador é Wallace";}
if ($camisa == 9){
    echo "O nome do jogador é Gabriel Barbosa";}
if ($camisa == 10){
    echo "O nome do jogador é Neymar Júnioir";}
if ($camisa == 11){
    echo "O nome do jogador é Gabriel Jesus";}
if ($camisa > 11){
    echo "Número inválido";}
?>
        </fieldset>
    </form>

</body>
</html>