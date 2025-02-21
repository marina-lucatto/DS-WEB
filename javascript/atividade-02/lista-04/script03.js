function senha(){
    var senha = parseInt(document.getElementById("senha").value)
    var login = document.getElementById("usuario").value
    var mensagem = document.getElementById("mensagem")
    if ((senha != "12345") || (login != "admin")){
        mensagem.innerHTML =  "erro"
    }else{
        mensagem.innerHTML ="Boas Vindas"
    }

}