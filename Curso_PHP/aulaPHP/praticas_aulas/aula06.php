<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
    /*$a = 120;
    $b = ($a * 10) / 100;
    $c = $a - $b;
    echo "O valor de 10% de desconto sera $b";
    echo "<br>O valor final será de $c";*/

    /*$preco = $_GET["p"];
    echo "O preço do produto é de R$ " . number_format($preco, 2);
    $preco -= $preco * 10/100;
    echo "<br>E o novo preço com 10% de desconto será de R$ " . number_format($preco, 2);*/

    /*$atual = $_GET["aa"];
    echo "O ano atual é $atual e ano anterior é " . --$atual;*/
    ?>
    <div>
        <?php
        /*$a = 3;
        $b = &$a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br>A variavel B vale $b";*/

        $x = "abc";
        $$x = "def";
        echo "O conteudo da variavel X é $x";
        echo "<br>A variavel ABC criada recebeu o valor $abc";
        ?>


    </div>
  
    
</body>
</html>