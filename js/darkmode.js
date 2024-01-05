let mudarTema = document.getElementById("mudarTema");

let temaAtual = localStorage.getItem("tema");

if(temaAtual=="escuro"){
    document.body.classList.add("dark");
}

mudarTema.addEventListener('click',()=>{
    document.body.classList.toggle("dark");

    if(temaAtual=="escuro"){
        localStorage.setItem("tema","claro");
    }
    else{
        localStorage.setItem("tema","escuro");
    }
})