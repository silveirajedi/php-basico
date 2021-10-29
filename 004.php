<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>004 - Operadores</title>
</head>
<body>
<div style="background-color: gray;"><h2>Operadores de Atribuição</h2></div>
    <?php
        $num1 = 5;
        $operadores = [
                "num1" => $num1,
                "num1 = num1 + 2" => ($num1 += 2),
                "num1 = num1 - 2" => ($num1 -= 2),
                "num1 = num1 * 2" => ($num1 *= 2),
        ];

        var_dump($operadores);

        $num2 = 10;
        $num3 = 20;

        $increments = [
                "pós" => $num2++,
                "pós-resposta" => $num2,
                "pré" => ++$num3,
                "pré-resposta" => $num3
        ];

        var_dump($increments);

    ?>
<div style="background-color: gray;"><h2>Comparação</h2></div>

    <?php

    $relatedA = 5;
    $relatedB = "5";
    $relatedC = "10";
    $related = [
        "a == b" => ($relatedA == $relatedB),
        "a === b" => ($relatedA === $relatedB),
        "a != b" => ($relatedA != $relatedB),
        "a !== b" => ($relatedA !== $relatedB),
        "a > c" => ($relatedA > $relatedC),
        "a < c" => ($relatedA < $relatedC),
    ];

    var_dump($related);

    ?>

<div style="background-color: gray;"><h2>Lógicos</h2></div>

    <?php
        $logicA = true;
        $logicB = false;
        $logic = [
        "a && b" => ($logicA && $logicB),
        "a || b" => ($logicA || $logicB),
        "a" => ($logicA),
        "!a" => (!$logicA),
        "!b" => (!$logicB)
        ];

        var_dump($logic);
    ?>

<div style="background-color: gray;"><h2>Aritméticos</h2></div>

    <?php
    $calcA = 10;
    $calcB = 5;
    $calc = [
        "a + b" => ($calcA + $calcB),
        "a - b" => ($calcA - $calcB),
        "a * b" => ($calcA * $calcB),
        "a / b" => ($calcA / $calcB),
        "a % b" => ($calcA % $calcB),
    ];

    var_dump($calc);
    ?>


</body>
</html>