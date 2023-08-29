<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do servidor</title>
</head>
<body>
    <!-- <h1>Dados do Servidor</h1>
    <?php 
    phpinfo();
    ?> -->

    <?php 
        
        // OPERADORES ARITMÉTICOS
        // $r = "2" . "2";
        // var_dump($r);
        // $r = "GUSTAVO" . "GUANABARA";
        // var_dump($r);
        // $res = 50 / (2 + 3) ** 2;
        // echo " O resultado é $res";

        //FUNÇÕES MATEMÁTICAS
        $r = abs(-2000); //abs (absoluto)-> é o valor sem sinal
        echo "O resultado é $r.";
        echo "<p>";

        $r = base_convert(254,10,8); //convertendo base decimal para octal
        echo " Decimal para Octal: $r.";
        
        echo "<p>";

        $r = base_convert(254,10,16); //convertendo base decimal para hexadecimal
        echo "Decimal para Hexadecimal: $r.";
        
        echo "<p>";

        $r = base_convert(254, 10, 2); //convertendo base decimal para binário
        echo "Decimal para Binário: $r.";
        
        echo "<p>";

        $r = intdiv(5,2); //divisão inteiro
        echo "Divisão inteira de 5 por 2: $r.";
        
        echo "<p>";

        $r = min(5,2); //valor mínimo entre 5 e 2
        echo "Valor mínimo entre 5 e 2: $r.";
        
        echo "<p>";

        $r = max(5,2); //valor máximo entre 5 e 2
        echo "Valor máximo entre 5 e 2: $r.";
        
        echo "<p>";

        $r = pi(); //mostra o valor de pi / também pode-se usar a constante M_PI
        echo "Valor de pi: $r.";
        
        echo "<p>";

        $r = pow(5,2); //potencioação
        echo "Valor da potenciação é: $r.";
        
        echo "<p>";

        $r = sqrt(81); //calcular raiz quadrada
        echo "A raiz quadrada é: $r.";

    ?>
    
</body>
</html>