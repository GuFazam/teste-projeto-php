<?php 
include "../includes/conexao.php";
$id_animal = $_GET['id_animal'];

$sql = "delete from animais where id_animal = $id_animal";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header('location:selecionar.php')
?>