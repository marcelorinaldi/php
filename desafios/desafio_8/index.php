<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $numero = $_GET["num"] ?? 0;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número: </label>
            <input type="number" name="num" id="num" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
        $r = sqrt($numero);
        $r3 = pow($numero,1/3);
        print "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
        print "<ul><li>A sua raiz quadradada é <strong>" . number_format($r, 3, ",", ".") . "</strong></li>";
        print "<li>A sua raiz cúbica é <strong>" . number_format($r3, 3, ",", ".") . "</strong></li></ul>";
        ?>
    </section>

</body>

</html>