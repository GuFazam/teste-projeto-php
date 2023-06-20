<?php 
include "../includes/conexao.php";

$nome = $_POST['nome'];
$idade = $_POST['nome'];
$sexo = $_POST['nome'];
$especie = $_POST['nome'];
$porte = $_POST['nome'];
$cidade = $_POST['nome'];
$estado = $_POST['nome'];
$comportamento = $_POST['nome'];
$sql = "insert into animais(nome) values('$nome')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header('location:selecionar.php')
?>