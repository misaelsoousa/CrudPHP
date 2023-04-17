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
echo "<meta http-equiv=\"Refresh\" content=\"0;URL=deletar.php\" />";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

	<head>
    <title>Retorno da Deletar</title>
    </head>

	<body>
	
        <form method="POST" action="deletarregistro.php">
            <div > <input name="id" value="<?php echo $id; ?>" hidden /></div>
            <div> <input name="nome" value="<?php echo $nome; ?>" hidden/> </div>
            <div>Nome: <?php echo $nome; ?> </div>
            <div>Endereço: <?php echo $endereco; ?></div>
            <div>Cidade: <?php echo $cidade; ?></div>
            <div>Data de nascimento: <?php echo $data_nas; ?></div>
            <div><button type="submit" value="Deletar" name="deletar"  class="btn btn-primary">Deletar</button></div>
        </form>
		
    
	</body>
</html>