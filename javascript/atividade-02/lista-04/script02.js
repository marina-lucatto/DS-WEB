function verNumero() {
    var numero = parseInt(document.getElementById("numero").value);
    var resultado = document.getElementById("resultado");

    if (numero > 0) {
        resultado.innerHTML = "Número é positivo";
    } else if (numero < 0) {
        resultado.innerHTML = "Número é negativo";
    } else {
        resultado.innerHTML = "Número é 0";
    }
}
