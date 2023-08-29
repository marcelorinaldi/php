<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $valor1 = $_GET["v1"] ?? '';
    $peso1 = $_GET["p1"] ?? '';
    $valor2 = $_GET["v2"] ?? '';
    $peso2 = $_GET["p2"] ?? '';
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="v1">1º Valor: </label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>" required>
            <label for="p1">1º Peso: </label>
            <input type="number" name="p1" id="p1" min="1" value="<?= $peso1 ?>" required>
            <label for="v2">2º Valor: </label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>" required>
            <label for="p2">2º Peso: </label>
            <input type="number" name="p2" id="p2" min="1" value="<?= $peso2 ?>" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
        $media = ($valor1 + $valor2) / 2;
        $mediap = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
        echo "<p><ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($media, 2, ",", ".") . ";</li></p>";
        echo "<p><li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". number_format($mediap, 2, ",", ".") . ".</p></li></ul>";

        ?>
    </section>

</body>

</html>