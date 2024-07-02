<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
    <?php
    /*$n1 = $_GET["a"];
    $n2 = $_GET["b"];
echo "<h2>Valores recebido: $n1 e $n2</h2>";

    $m = ($n1 + $n2) / 2;

    echo "A soma vale ". ($n1 + $n2);
    echo "<br>A subtração vale ". ($n1 - $n2);
    echo "<br>A multiplicação vale ". ($n1 * $n2);
    echo "<br>A divisão vale ". ($n1 / $n2);
    echo "<br>O módulo vale ". ($n1 % $n2);
    echo "<br>A média vale $m";*/

    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 e " . abs($v2);
    echo "<br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
    echo "<br>A raiz de $v1 e " . sqrt($v1);
    echo "<br>O valor de $v2 arredondado e " . round($v2); //ceil(arredonda pra cima) floor(arredonda pra baixo)
    echo "<br>A parte inteira de $v2 é " . intval($v2);
    echo "<br>O valor de $v1 em moeda é R$" . number_format($v1, 2,",", ".");
    ?>
    </div>
    
</body>
</html>