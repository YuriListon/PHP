<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
<main>
    <?php 
    //$_REQUEST é a junção de $_GET, $_POST e $_COOKIES
    $n = $_GET["nome"] ?? "sem nome";
    $s = $_GET["sobrenome"] ?? "sem sobrenome";
    echo "<p>É um prazer te conhecer,<strong> $n $s</strong>! Este é o meu site</p>";
    
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
    
</body>
</html>