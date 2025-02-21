function verificarTriangulo() {
    var lado1 = parseFloat(document.getElementById("lado1").value);
    var lado2 = parseFloat(document.getElementById("lado2").value);
    var lado3 = parseFloat(document.getElementById("lado3").value);

    if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3)) {
        document.getElementById("resultado").innerText = "Por favor, insira valores numéricos válidos.";
        return;
    }

    if (lado1 + lado2 > lado3 && lado1 + lado3 > lado2 && lado2 + lado3 > lado1) {
        if (lado1 === lado2 && lado2 === lado3) {
            document.getElementById("resultado").innerText = "O triângulo é Equilátero.";
        } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
            document.getElementById("resultado").innerText = "O triângulo é Isósceles.";
        } else {
            document.getElementById("resultado").innerText = "O triângulo é Escaleno.";
        }
    } else {
        document.getElementById("resultado").innerText = "Os valores inseridos não formam um triângulo válido.";
    }
}