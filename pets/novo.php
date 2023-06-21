<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Novo pet</h1>
<p>Vamos cadastrar um pet novo no sistema</p>
<form action="inserir.php" method="post">
foto <input name="foto">
<br>
nome: <input type="text" name="nome" required maxlength="100">
<br>
idade: <input type="number" name="idade" required maxlength="11">
<br>
sexo: <input type="text" name="sexo" required maxlength="20">
<br>
espécie: <input type="text" name="especie" required maxlength="100">
<br>
porte: <input type="text" name="porte" required maxlength="100">
<br>
cidade: <input type="text" name="cidade" required maxlength="100">
<br>
estado: <input type="text" name="estado" required maxlength="2">
<br>
comportamento: <input type="text" name="comportamento" required maxlength="100">
<button type="submit">Salvar</button>
</form>
<?php 
include "../includes/rodape.php";
?>