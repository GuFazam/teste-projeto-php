<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id_animal = $_GET['id_animal'];

$foto = "";
$nome = "";
$idade = "";
$sexo = "";
$especie = "";
$porte = "";
$cidade = "";
$estado = "";
$comportamento = "";
$sql = "select * from animais where id_animal = $id_animal";
$todos_os_pets = mysqli_query($conexao, $sql);
while($um_pet = mysqli_fetch_assoc($todos_os_pets)):
    $foto = $um_pet['foto'];
    $nome = $um_pet['nome'];
    $idade = $um_pet['idade'];
    $sexo = $um_pet['sexo'];
    $especie = $um_pet['especie'];
    $porte = $um_pet['porte'];
    $cidade = $um_pet['cidade'];
    $estado = $um_pet['estado'];
    $comportamento = $um_pet['comportamento'];
endwhile;
?>
<h1>Editar pet <?php echo $id_animal; ?></h1>
<form method="post" action="atualizar.php?id_animal=<?php echo $id_animal;?>">
<img src="<?php echo $foto; ?>" width="100" value="<?php echo $foto;?>"><br>
    Nome: <input name="nome" type="text" value="<?php echo $nome;?>"><br>
    Idade: <input name="nome" type="text" value="<?php echo $idade;?>"><br>
    Sexo: <input name="nome" type="text" value="<?php echo $sexo;?>"><br>
    Espécie: <input name="nome" type="text" value="<?php echo $especie;?>"><br>
    Porte: <input name="nome" type="text" value="<?php echo $porte;?>"><br>
    Cidade: <input name="nome" type="text" value="<?php echo $cidade;?>"><br>
    Estado: <input name="nome" type="text" value="<?php echo $estado;?>"><br>
    Comportamento: <input name="nome" type="text" value="<?php echo $comportamento;?>"><br>
    <button type="submit">Atualizar</button>
</form>

<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>