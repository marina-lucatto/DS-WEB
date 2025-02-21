function encontrarMaior() {
    var num1 = Number(prompt("Digite o primeiro número:"));
    var num2 = Number(prompt("Digite o segundo número:"));
    var num3 = Number(prompt("Digite o terceiro número:"));

    var maior;

    if (num1 >= num2 && num1 >= num3) {
        maior = num1;
    } else if (num2 >= num1 && num2 >= num3) {
        maior = num2;
    } else {
        maior = num3;
    }

    alert("O maior número é: " + maior);
}