<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>002 - Comandos Saídas</title>
</head>
<body>

    <div style="background-color: gray;"><h2>echo</h2></div>
    <?php

    echo "<p> Olá mundo! ", " teste no meio do echo ", "<b>Leandro</b>", "</p>";

    $nome = "Leandro";
    $sobrenome = "Silveira";

    echo "<p>$nome</p>";
    echo '<p>$nome</p>'; //com aspas simples não reconhece a variável
    echo "<p>Melhor usar assim - {$nome}. A variável fica protegida</p>";
    echo "<h1>" . $nome . "</h1>"
    ?>

    <h2>Fora da tag php também funciona <?= $nome ?></h2>

    <div style="background-color: gray;"><h2>print</h2></div>

    <?php

    print $nome;

    print "<h3>{$nome} {$sobrenome}</h3>";

    $array = [
            "nome" => "Leandro",
            "sobrenome" => "Silveira",
            "idade" => 36
    ];

    print_r($array);

    ?>
</body>
</html>