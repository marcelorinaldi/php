<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado do Processamento</h1>
        <p>
            <?php
            //var_dump($_GET); $_REQUEST -> Junção de $_GET $_POST $_COOKIES
            $numero = $_GET["numero"] ?? 0; //coalescência nula
            echo "<br>O número escolhido foi: <strong>$numero</strong>";
            $resultado = $numero - 1;
            echo "<br>O seu <em>antecessor</em> é $resultado";
            $resultado = $numero + 1;
            echo "<br>O seu <em>sucessor</em> é $resultado";
            //echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site.";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>

</html>