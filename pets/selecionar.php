<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1>Módulo de pets</h1>
<p>
    <a href="novo.php">Adicionar Pet</a>
</p>
<h2>Listagem de Pets</h2>
<table border="1">
    <tr>
        <td>Código</td>
        <td>Foto</td>
        <td>Nome</td>
        <td>Idade</td>
        <td>Sexo</td>
        <td>Espécie</td>
        <td>Porte</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Comportamento</td>
        <td>Ações</td>
    </tr> <!-- fim da linha do titulo -->
    <?php 
    $sql = "select * from animais";
    $todos_os_pets = mysqli_query($conexao, $sql);
    while($um_pet = mysqli_fetch_assoc($todos_os_pets)):
        ?>
        <tr>
            <td><?php echo $um_pet['id_animal']; ?></td>
            <td><img src="<?php echo $um_pet['foto']; ?>" width="100"></td>
            <td><?php echo $um_pet['nome']; ?></td>
            <td><?php echo $um_pet['idade']; ?></td>
            <td><?php echo $um_pet['sexo']; ?></td>
            <td><?php echo $um_pet['especie']; ?></td>
            <td><?php echo $um_pet['porte']; ?></td>
            <td><?php echo $um_pet['cidade']; ?></td>
            <td><?php echo $um_pet['estado']; ?></td>
            <td><?php echo $um_pet['comportamento']; ?></td>
            <td>
                <a href="#">Visualizar</a>
                <a href="#">Editar</a>
                <a href="deletar.php?id_animal=<?php echo $um_pet['id_animal'];?>">Excluir</a>
            </td>
        </tr>
        <?php
    endwhile;
    ?>
</table>

<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>