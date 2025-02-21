function calcular() {
    var numero = document.getElementById("numero").value;
    var valor = Number(numero); 

    if (valor % 2 === 0) { 
        document.getElementById("resultado").innerHTML = "O número " + valor + " é par.";
    } else {
        document.getElementById("resultado").innerHTML = "O número " + valor + " é ímpar.";
    }
}