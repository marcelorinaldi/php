<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $valor1 = $_GET["dividendo"] ?? 0;
    $valor2 = $_GET["divisor"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo: </label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?= $valor1 ?>">
            <label for="divisor">Divisor: </label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $valor2 ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php
        $quociente = intdiv($valor1, $valor2);
        $resto = $valor1 % $valor2;
        // print "<p>O dividendo é $valor1;</p>";
        // print "<p>O divisor é $valor2;</p>";
        // print "<p>O quociente é " . $divisao .";</p>";
        // print "<p>O resto é $resto.</p>";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$valor1?></td>
                <td><?=$valor2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>