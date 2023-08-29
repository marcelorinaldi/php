<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $total = $_GET["seg"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?= $total ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando</h2>
        <?php
        // Correção Guanabara
        // $sobra = $total;
        // Total de semanas
        // $semana = (int)($sobra / 64800);
        // $sobra = $sobra % 604800;
        // Total de dias    
        // $dia = (int)($sobra / 86400);
        // $sobra = $sobra % 86400;
        // Total de horas    
        // $hora = (int)($sobra / 3600);
        // $sobra = $sobra % 3600;
        // Total de minutos
        // $minuto = (int)($sobra / 60);
        // $sobra = $sobra % 60;
        // Total de segundos
        // $segundo = $sobra;    
        
        print "<P>Analisando o valor informado, <strong>".number_format($total, 0,",",".") ." segundos</strong>, temos:</p>";
        $resto = $total;
        $semana = (int)($resto / 604800);
        $resto = $resto % 604800;
        $dias = (int)($resto / 86400);
        $resto = $resto % 86400;
        $horas = (int)($resto / 3600);
        $resto = $resto % 3600;
        $minutos = (int)($resto / 60);
        $resto = $resto % 60;
        $segundos = $resto;
       
        print "<ul><li>".number_format($semana, 0,",",".") ." semanas;</li>
            <li>".number_format($dias, 0,",",".") ." dias;</li>
            <li>".number_format($horas, 0,",",".") ." horas;</li>
            <li>".number_format($minutos, 0,",",".") ." minutos;</li>
            <li>".number_format($segundos, 0,",",".") ." segundos.</li></ul>";
        ?>
    </section>

</body>

</html>