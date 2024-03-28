<?php 
require_once "conexao.php"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<span id="btnMudarTema"><p id="mudarTema">Mudar Tema</p></span>

<main>
      <section class="texto">
        <h1>Lista de Produtos</h1>
      </section>
      <section class="dados lista_dados">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th colspan="2" scope="col"> Ações </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * from produtos";
    $sql_lista = mysqli_query($conexao,$sql);
    while($linha = mysqli_fetch_array($sql_lista)){
        ?>
        <tr>
            <td><?php echo $linha['codigo'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo 'R$' . number_format($linha['preco'],2,',','.');?></td>
            <td><button class="btn btn-warning" onclick="alterar(<?php echo $linha['id_produto'];?>)">Alterar </button></td>
            <td><button class="btn btn-danger" id="excluir" onclick="excluir(<?php echo $linha['id_produto'];?>)">Excluir </button></td>
            <?php
    }
    ?>
    </tr>

  </tbody>
</table>
  </section>
  </main>
<span>
    <a href="cadastro.php" class="btn btn-link"> Cadastro de Produtos </a>
</span>

<script src="js/acoes.js"></script>
<script src="js/darkmode.js"></script>  
</body>
</html>