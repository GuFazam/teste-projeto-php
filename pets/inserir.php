<?php 
include "../includes/conexao.php";

$foto = $_POST['foto'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$especie = $_POST['especie'];
$porte = $_POST['porte'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$comportamento = $_POST['comportamento'];
$sql = "insert into animais(foto, nome, idade, sexo, especie, porte, cidade, estado, comportamento) values('$foto', '$nome', '$idade', '$sexo', '$especie', '$porte', '$cidade', '$estado', '$comportamento')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header('location:selecionar.php')
?>