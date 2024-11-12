<?php






if($_SERVER['REQUEST_METHOD']== 'POST'){


    $n1 = $_POST['n1'];
    $n2 = $_POST['n2']; 
    $operador = $_POST['operador'];

    switch($operador);{

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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method= "post">
        <label>primeiro numero</label>
        <input type="number" name="n1" > <br><br>
        <label>segundo numero</label>
        <input type="number" name="n2" > <br><br>
        <select name="calcular">
            <option value="somar">somar</option>
            <option value="subtrair">subtrair</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>
        </select>
        <br><br>
        <input type="submit" value="calcular">
        <input type="reset" value="limpar">
        <br><br>
        <label> o resultado é <?= $resultado ?> </label>


    </form>
</body>
</html>


<?php
$n1 = 0;
$n2 = 0;
$resultado = 0;
$calcular = 'somar';

if (isset($_POST['n1'], $_POST['n2'], $_POST['calcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $calcular = $_POST['calcular'];

    switch ($calcular) {
        case 'somar':
            $resultado = $n1 + $n2;
            break;
        case 'subtrair':
            $resultado = $n1 - $n2;
            break;
        case 'multiplicar':
            $resultado = $n1 * $n2;
            break;
        case 'dividir':
            // Verifica se n2 não é zero
            if ($n2 != 0) {
                $resultado = $n1 / $n2;
            } else {
                $resultado = 'Erro: divisão por zero!';
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="" method="post">
        <label>Primeiro número:</label>
        <input type="number" name="n1" required> <br><br>
        <label>Segundo número:</label>
        <input type="number" name="n2" required> <br><br>
        <select name="calcular">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
        <br><br>
        <label>O resultado é: <?= $resultado ?></label>
    </form>
</body>
</html>
