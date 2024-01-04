function alterar(id){
    window.location.href = "editar.php?id=" + id; 
}
function excluir(id){
    let confirmar = confirm("Você quer mesmo excluir?");
    if(confirmar==true){
        window.location.href="excluir.php?id=" + id;
    }
    
}