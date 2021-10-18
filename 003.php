<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>003 - Tipos Variáveis</title>
</head>
<body>
    <div style="background-color: gray;"><h2>variável</h2></div>
    <?php
        $firstname = "Leandro";
        $number1 = 10;
        $number2 = 20;

        $calc = $number1 + $number2;
        var_dump($calc);

        var_dump([
                "primeiro número" => $number1,
                "segundo número" => $number2,
                "resultado" => $calc
        ]);

    ?>
    <div style="background-color: gray;"><h2>boleano</h2></div>
    <?php
        $verdadeiro = true;
        $falso = false;

        var_dump($verdadeiro, $falso);

        $userAge = 36;

        $bestAge = ($userAge < 50);
        var_dump($bestAge);

    ?>

    <div style="background-color: gray;"><h2>Callback</h2></div>
    <?php
        $code = "<article><h1>Um Call User Function!</h1></article>";
        $codeClear = call_user_func ("strip_tags", $code);
        var_dump($code, $codeClear);

        $codeMore = function($code) {
            var_dump($code);
        };

        $codeMore ("Função callback");

    ?>
    <div style="background-color: gray;"><h2>Outros Tipos</h2></div>
    <?php

        $string = "Olá Mundo!";
        $array = [$string];
        $object = new StdClass();
        $object->hello = $string;
        $null = null;
        $int = 1234;
        $float = 1.123;

        var_dump([
        $string,
        $array,
        $object,
        $null,
        $int,
        $float
        ]);

    ?>


</body>
</html>