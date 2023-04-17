<?php

$nome = $_POST['nome'];

require "bancodedados.php";

$buscar = mysqli_query($conexao,"SELECT * FROM alunos
WHERE  '$nome' = nome");

$dados = mysqli_fetch_array($buscar);
$id = $dados['id'];
$nome = $dados['nome'];
$endereco = $dados['endereco'];
$cidade = $dados['cidade'];
$data_nas = $dados['data_nas'];

if($id=="") {
echo "<script>alert('Nenhum registro encontrado');</script>";
echo "<meta http-equiv=\"Refresh\" content=\"0;URL=pesquisar.php\" />";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
    <title>Retorno da Pesquisa</title>
    </head>

	<body>
	
        <div>ID: <?php echo "$id"; ?></div>
        <div>Nome: <?php echo "$nome"; ?></div>
        <div>Endereço: <?php echo "$endereco"; ?></div>
        <div>Cidade: <?php echo "$cidade"; ?></div>
        <div>Data de Nascimento: <?php echo "$data_nas"; ?></div>
        
		
		<a href="pesquisar.php">Voltar</a>
    
	</body>
</html>