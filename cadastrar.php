<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Cadastro Completo</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
             
              <li class="nav-item">
                <a class="nav-link" href="cadastrar.php">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pesquisar.php">Pesquisar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="alterar.php">Alterar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="deletar.php">Deletar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<form id="form1" method="POST" action="retornacadastro.php">
    Nome: <input name="nome" required /> <br>
    Endereço: <input name="endereco" required /> <br>
    Cidade: <input name="cidade" required /> <br>
    Data de nascimento: <input name="data_nas"  required /> <br>
    <button type="submit" value="Pesquisar" class="btn btn-primary">Cadastrar</button>
</form>




</body>
</html>