<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $atual = date('Y');
    $anoNasc = $_GET["ano"] ?? 0;
    $idade = $_GET["anof"] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano" min="1900" max="<?=($atual-1)?>" value="<?= $anoNasc ?>">
            <label for="anof">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="anof" id="anof" min="1900" value="<?= $idade ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
        $nasc = $idade - $anoNasc;
        print "<p>Quem nasceu em $anoNasc terá <strong>$nasc ano(s)</strong> em $idade    !</p>";
        ?>
    </section>

</body>

</html>