<?php

require "bancodedados.php";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

$id = $_POST['id'];
$nome = $_POST['nome'];

$deletar = mysqli_query($conexao,"DELETE FROM alunos WHERE '$nome' = nome");

echo "<script type='text/javascript'>alert('Excluido com Sucesso');</script>";
echo "<meta http-equiv=\"Refresh\" content=\"0;URL=index.html\" />";

?>