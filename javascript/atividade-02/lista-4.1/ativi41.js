function sauldar(){
    var mensagem = document.getElementById("nome").value;
    document.getElementById("mensagem").innerHTML = "seja bem-vindo" + " " + mensagem;
}

function verificarParidade() {
    let numero = parseInt(document.getElementById('numberInput').value);
    let resultado = (numero % 2 === 0) ? 'Par' : 'Ímpar';
    document.getElementById('paridadeResultado').innerText = `O número é ${resultado}.`;
}

function converterMaiusculas() {
    let texto = document.getElementById('textInput').value;
    document.getElementById('textoConvertido').innerText = texto.toUpperCase();
}

function calcularAcrescimo() {
    let valor = parseFloat(document.getElementById('valorInput').value);
    let porcentagem = parseFloat(document.getElementById('porcentagemInput').value);
    let resultado = valor + (valor * (porcentagem / 100));
    document.getElementById('acrescimoResultado').innerText = `Resultado: ${resultado.toFixed(2)}`;
}

function mudarCorDiv() {
    let div = document.getElementById('colorDiv');
    let cores = ['red', 'lightblue', 'pink', 'purple', 'orange'];
    let corAleatoria = cores[Math.floor(Math.random() * cores.length)];
    div.style.backgroundColor = corAleatoria;
}