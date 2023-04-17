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
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Retorno da Alterar</title>
    </head>

	<body>
	
        <form method="POST" action="alterarregistro.php">
            <div>ID: <input name="id" value="<?php echo $id; ?>" readonly /></div>
            <div>Nome: <input name="nome" value="<?php echo $nome; ?>" /> </div>
            <div>Endereço: <input name="endereco" value="<?php echo $endereco; ?>" /> </div>
            <div>Cidade: <input name="cidade" value="<?php echo $cidade; ?>" /> </div>
            <div>Data de nascimento: <input name="data_nas" value="<?php echo $data_nas; ?>" /> </div>
            <div><button type="submit" value="Alterar" name="alterar"  class="btn btn-primary">Alterar</button></div>
        </form>
		
    
	</body>
</html>