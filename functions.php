<?php
function cadastrar($conexao,$codigo,$nome,$preco){
    $sql_verificar = "SELECT codigo from produtos WHERE codigo='$codigo'";
    $sql_verificado = mysqli_query($conexao,$sql_verificar);
    $qtd = mysqli_num_rows($sql_verificado);
    if($qtd>0){
        ?>
            <script>alert("Já existe um produto com esse código. Tente outro!");</script>
            <?php
    }
    else{
    $sql_cadastrar = "INSERT INTO produtos values (default,'$codigo','$nome','$preco')";
    $sql = mysqli_query($conexao,$sql_cadastrar);
        if($sql){
            ?>
            <script>alert("Produto Cadastrado com Sucesso");</script>
            <?php
        }
        else{
            ?>
            <script>alert("Erro ao Cadastrar!");</script>
            <?php
        }
}
}
function alterar($conexao,$codigo,$nome,$preco,$id){
    /*$sql_verificar = "SELECT codigo from produtos WHERE codigo='$codigo'";
    $sql_verificado = mysqli_query($conexao,$sql_verificar);
    $qtd = mysqli_num_rows($sql_verificado);
    $linha = $sql_verificado->fetch_assoc();
    $codi = $linha['codigo'];*/
        $sql_alterar = "UPDATE produtos set codigo='$codigo', nome='$nome', preco='$preco' WHERE id_produto='$id'";
        $sql = mysqli_query($conexao,$sql_alterar);
        if($sql){
            ?>
            <script>alert("Produto Alterado com Sucesso!");window.location.href="lista_produtos.php"</script>
            <?php
            
        }
        else{
            ?>
            <script>alert("Erro ao Alterar!");</script>
            <?php
           
        }
    }



function excluir($conexao,$id){
    $sql_exluir = "DELETE FROM produtos WHERE id_produto='$id'";
    $sql = mysqli_query($conexao,$sql_exluir);
}


?>
