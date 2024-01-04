<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <header>
        <h1>Cadastro de Produtos</h1>
    </header>
    <section>
    <form action="cadastro.php" method="POST">

  <div class="mb-3">
    <label for="codigo" class="form-label">Código do Produto</label>
    <input type="text" class="form-control" id="codigo" name="codigo">
  </div>
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
  <div class="mb-3">
    <label for="preco" class="form-label">Preço</label>
    <input type="number" class="form-control" id="preco" name="preco">
  </div>
  <div class="mb-3 botoes">
    <input type="reset" name="limpar" value="Limpar" class="btn btn-danger btn-form">
    <input type="submit" name="enviar" value="Salvar" class="btn btn-success btn-form">
    
</div>
</form>
</section>
<span>
    <a href="lista_produtos.php" class="btn btn-link btn-span"> Lista de Produtos </a>
</span>
        <?php
        error_reporting(0);
        require_once "conexao.php";
        require_once "functions.php";

        if($_POST['enviar']){
            cadastrar($conexao,$_POST['codigo'],$_POST['nome'],$_POST['preco']);
        }
        ?>




</body>
</html>