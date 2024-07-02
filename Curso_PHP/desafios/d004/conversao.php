<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Conversor de Moedas</h1>

    <?php
                
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $cotação = $dados["value"][0]["cotacaoCompra"];
        
        //quanto de dinheiro você tem?
        $real = $_REQUEST["din"] ?? 0;
        //equivalencia em dolar
        $dolar = $real / $cotação;
        
        //echo "seus R\$" . number_format($real, 2,",", ".") . " equivalem a US\$" . number_format($dolar, 2);
        //biblioteca intl (Internalization PHP)
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
        echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");

    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>

