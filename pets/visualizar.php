<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id_animal = $_GET['id_animal'];

$foto = "";
$nome = "";
$idade= "";
$sexo= "";
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
<h1>Ficha do pet</h1>
<!-- foto: --><img src="<?php echo $foto; ?>" width="100"><br> 
nome: <?php echo $nome;?><br>
idade: <?php echo $idade;?><br>
sexo: <?php echo $sexo;?><br>
especie: <?php echo $especie;?><br>
porte: <?php echo $porte;?><br>
cidade: <?php echo $cidade . " - " . $estado;?><br>
comportamento: <?php echo $comportamento;?><br>

<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>