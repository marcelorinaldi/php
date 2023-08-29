<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $valor = $_GET["salario"] ?? 0;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário(R$): </label>
            <input type="number" name="salario" id="salario" step="0.001" value="<?= $valor ?>" step="0.01" >
            <p>Considerando o salário mínimo de <strong>R$1.320,00;</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php
        $salariof = $valor / 1320;
        $resto = $valor % 1320;
        print "Quem recebe um salário de R$" . number_format($valor, 2, ",", ".") . " ganha <strong>" . (int)$salariof . " salário(s) minímo(s)</strong> + R$" . number_format($resto, 2, ",", ".") . ".";
        ?>
    </section>
</body>

</html>