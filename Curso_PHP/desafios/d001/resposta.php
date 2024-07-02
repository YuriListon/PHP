<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $num = $_REQUEST["num"] ?? 0;
            $ant = $num - 1;
            $suc = $num + 1;
            echo "O número escolhido foi <strong>$num</strong>";
            echo "<br>O seu antecessor é o número $ant";
            echo "<br>O seu sucessor é o número $suc";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        
    </main>
    
    
</body>
</html>