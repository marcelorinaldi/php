<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Tipos Primitivos em PHP</h1>
    <?php
    // seleciona + Ctrl + ; = comenta o bloco
    // 0x = hexadecimal 0b = binário 0 = Octal
    // $num = 0x1A;
    // echo "O valor da variável é $num";

    // imprime a variável e suas características
    // $v = 45.2;
    // var_dump($v);
    
    // $num = (int)3e2; //3 x 10(2) ()=coerção
    // echo "O valor é $num";
    // var_dump($num);

    // $num = "950";
    // var_dump($num);
    // "<p>";

    // $num = (int) "950"; // coerção
    // var_dump($num);
    // "<p>";

    // $casado = (false);
    // var_dump($casado);
    // "<p>";

    // $vet = [6, 2, 9, 3, 5];
    // var_dump($vet);

    // class Pessoa{
    //     private string $nome;
    // }

    //     $p = new Pessoa;
    //     var_dump($p);

    // $nome = "Marcelo"; //double quoted
    // echo "Olá $nome! \u{1f596}";

    // echo 'Olá $nome!'; //single quoted

    // const ESTADO = "RJ";
    // echo "Moro no ESTADO";
    // echo "Moro no ".ESTADO;

    // echo "Estamos no ano de('Y')";
    // echo "Estamos no ano de ".date('Y');

    // $nom = "Rodrigo";
    // $snom = "Nogueira";
    // //echo "$nom"Minotauro"$snom";
    // echo '$nom"Minotauro"$snom';
    // //Forma correta, "Sequência de escape".
    // echo "$nom\"Minotauro\"$snom";

    // $nome = "Marcelo";
    // $sobrenome = "Rinaldi";
    // $apelido = "Tchetchélo";
    // echo "$nome \"Tchetchélo\" $sobrenome";

    // //Sintaxe Heredoc
    // $curso = "PHP";
    // $ano = date('Y');
    // echo <<< FRASE
    //     Estou estudando
    //         $curso em $ano
    // FRASE;

    //Sintaxe Nowdoc
    $curso = "PHP";
    $ano = date('Y');
    echo <<< 'FRASE'
        Estou estudando
            $curso em $ano
        FRASE;

    ?>
</body>
</html>