<?php 
include "../includes/conexao.php";

$nome = $_POST["nome"];
$sql = "update tb_alunos set nome = '$nome'";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>