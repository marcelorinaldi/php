<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $preco = $_GET["prc"] ?? '0';
    $reajuste = $_GET["reaj"] ?? '0';
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="prc">Preço do Produto (R$): </label>
            <input type="number" name="prc" id="prc" min="0.10" step="0.01" value="<?= $preco ?>">
            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $reajuste ?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
        $resultado = (($preco * $reajuste) / 100) + $preco;
        echo "O produto que custava R$" . number_format($preco, 2, ",", ".") . " com <strong>" . $reajuste . "% de aumento</strong> vai passar a custar <strong>R$" . number_format($resultado, 2, ",", ".") . "</strong> a partir de agora.";
        ?>
    </section>
    <script>
        // Declarações automáticas
        mudaValor()

        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>

</html>