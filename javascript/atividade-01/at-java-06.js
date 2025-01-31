var c = prompt ("digite o capital")
var t = prompt ("digite a taxa")
var i = prompt ("digite o tempo")

var conta = c * ((t / 100)+1)**t

alert(conta.toFixed(2))