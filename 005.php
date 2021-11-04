<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>005 - Array e Vetores</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Array com Índices</h2></div>
<?php
    $array1 = array(1, 2, 3,); //um jeito de atribuir array
    $array2 = [1, 2, 3,];

    $array3 = [
            "Leandro",
            "Carol",
            "Camila"
    ];

    var_dump(
        $array1,
        $array2,
        $array3);

    $array3[] = "Nome1";
    $array3[] = "Nome2";

    var_dump($array3);
?>
<div style="background-color: gray;"><h2>Array com Associação</h2></div>
<?php
$array4 = [
        "Primeiro Livro" => "Gênesis",
        "Segundo Livro" => "Êxodo",
        "Terceiro Livro" => "Levítico"
];

var_dump($array4);

$array4["Quarto Livro"] = "Números";
$array4["Quinto Livro"] = "Deuteronômio";

var_dump($array4);
?>

<div style="background-color: gray;"><h2>Array Multidimensional</h2></div>
<?php
$moises = ["Genesis", "Exodo", "Deuteronomio"];
$paulo = ["livro1" => "Romanos", "livro2" => "1 Corintios"];
$biblia = [
  $moises,
  $paulo
];

var_dump($biblia);
?>

<div style="background-color: gray;"><h2>Acessar e percorrer um array</h2></div>
<?php

$evangelhos = [
        "Primeiro" => "Mateus",
        "Segundo" => "Marcos",
        "Terceiro" => "Lucas",
        "Quarto" => "João"
];

echo "<p>O primeiro livro dos evangelhos é o livro de {$evangelhos["Primeiro"]} e o último é {$evangelhos["Quarto"]}</p>";

$cartasPedro = [
        "1 Carta de Pedro",
        "2 Carta de Pedro"
];

echo "<p>Esta é a {$cartasPedro[0]}</p>";

$cartasJoao = [
        "1 Carta João",
        "2 Carta João",
        "3 Carta João",
];

$bibliacompleta = [
        "Evangelhos" => $evangelhos,
        "Cartas de pedro" => $cartasPedro,
        "Cartas de João" => $cartasJoao
];

var_dump($bibliacompleta);

echo "<p>Hoje eu vou ler o livro de {$bibliacompleta["Evangelhos"]["Primeiro"]}</p>";

echo "Os 4 evangelhos são:";

foreach ($evangelhos as $evangelho) {
    echo "<p>{$evangelho}</p>";
}

foreach ($evangelhos as $key => $value) {
    echo "<p> O {$key} dos evangelhos é {$value}</p>";
}

?>

</body>
</html>