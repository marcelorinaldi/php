<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php
        // Cotação atualizada da API do BC
        $ini = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $ini . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        // Valor a ser convertido
        $real = $_REQUEST["valor"] ?? 0;

        // Equivalência em dólar
        $dolar = $real / $cotacao;

        // Mostrar o resultado
        // echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

        // Formatação de moedas com internacionalização:
        // Biblioteca intl (Internalization PHP)

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)"> Voltar</button>
    </main>
</body>

</html>