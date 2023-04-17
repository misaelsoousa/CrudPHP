<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$data_nas = $_POST['data_nas'];

require "bancodedados.php";

$alterar = mysqli_query($conexao, "UPDATE alunos SET nome= '$nome', endereco= '$endereco', cidade= '$cidade', data_nas= '$data_nas' WHERE '$id'= id");

echo "<script>alert('Registro alterado com sucesso');</script>";
echo "<meta http-equiv=\"Refresh\" content=\"0;URL=alterar.php\" />";

?>