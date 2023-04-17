<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$data_nas = $_POST['data_nas'];

require "bancodedados.php";


$sql = mysqli_query($conexao, "INSERT INTO alunos
(nome, endereco, cidade, data_nas) VALUES ('$nome', '$endereco', '$cidade', '$data_nas')");

echo "<script>alert('Cadastro realizado com sucesso');</script>";
echo "<meta http-equiv=\"Refresh\" content=\"0;URL=cadastrar.php\" />";

?>

