<?php 
include "../includes/conexao.php";

$id_animal = $_GET['id_animal'];

$nome = $_POST['nome'];
$sql = "update animais set nome = '$nome' where id_animal = $id_animal";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>