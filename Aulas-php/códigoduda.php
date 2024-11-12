<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="Calculadora"></div>
    <h1>CALCULADORA</h1>
    <from action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <input  class="n1" type="number" name="n1" placeholder="Numero 1"><br>
    <input type="radio" name="operador" value="+" required>Somar.
    <br>  
    <input type="radio" name="operador" value="-" required>Subtrair.
    <br> 
    <input type="radio" name="operador" value="*" required>Multiplicar.
    <br> 
    <input type="radio" name="operador" value="/" required>Dividir.
    <br> 
    <input class="n2" type="number" name="n2" placeholder="Numero 2"><br>
   <br>
    <input type="submit" value="calcular">
        <input type="reset" value="limpar">
    </from>
    <div class="resultado">
    <h2>
    <?php

if($_SERVER['REQUEST_METHOD']== 'POST'){


    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operador = $_POST['operador'];

    switch($operador){
     case '+':
        function soma($n1,$n2){
     $resultado =  $n1 + $n2;
        echo $resultado;
     }
     $n1 = 10;
     $n2= 5;
     
     soma($n1,$n2);
     break;
     case '-':
        function subtração($n1,$n2){
            $resultado =  $n1 - $n2;
               echo $resultado;
            }
            $n1 = 10;
            $n2= 5;
            
            subtração($n1,$n2);
        break;
        case '*':
            function multiplicação($n1,$n2){
                $resultado =  $n1 * $n2;
                   echo $resultado;
                }
                $n1 = 10;
                $n2= 5;
                
                multiplicação($n1,$n2);
            break;
            case '/':
                if($n2==0){
                 echo"Não é possivel divisão por zero.";  
                }else{
                    function divisão($n1,$n2){
                        $resultado =  $n1 / $n2;
                           echo $resultado;
                        }
                        $n1 = 10;
                        $n2= 5;
                        
                        divisão($n1,$n2);
                }
                break;
                echo "Resultado = ".$resultado;
    }
}
        
        ?>

    </div>
</html> 
