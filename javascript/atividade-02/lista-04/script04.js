function calculo(){
    var num1 = parseFloat(document.getElementById("numero").value)
    var num2 = parseFloat(document.getElementById("numero2").value)
    var operação = document.getElementById("calculo").value
    var mensagem = document.getElementById("mensagem2")
    if (operação == "+"){
        mensagem.innerHTML = (num1 + num2)
    }else if(operação == "-"){
        mensagem.innerHTML = (num1 - num2)
    }else if(operação == "*"){
        mensagem.innerHTML = (num1 * num2)
    }else{
        mensagem.innerHTML = (num1 / num2)
    }
}