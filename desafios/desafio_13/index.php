<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13 - PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
    $saque = $_GET["v"] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="v" id="v" step="5" required value="<?= $saque ?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php
        $resto = $saque;
        // Saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        // Saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        // Saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;

        // Saque de R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;
        ?>
        <h2>Saque de R$<?=number_format($saque, 2, ", ", " . ")?> realizado</h2>
        <p>O caixa eletrônico disponibilizará seu saque nas seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="Nota de R$100" class="nota"> x <?=$tot100?></li>
            <li><img src="img/50-reais.jpg" alt="Nota de R$50" class="nota"> x <?=$tot50?></li>
            <li><img src="img/10-reais.jpg" alt="Nota de R$10" class="nota"> x <?=$tot10?></li>
            <li><img src="img/5-reais.jpg" alt="Nota de R$5" class="nota"> x <?=$tot5?></li>
        </ul>
    </section>

</body>

</html>