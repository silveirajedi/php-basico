<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>012 - Manipulação de String</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>manipulação</h2></div>
<?php

$index = [
    "Exodo",
    "Leviticos",
    "Numeros"
];

$association = [
    "Segundo Livro" => "Exodo",
    "Terceiro Livro" => "Levitico",
    "Quarto Livro" => "Numeros"
];

//array_unshift — Adiciona um ou mais elementos no início de um array
array_unshift($index, "", "Genesis", "");
$association = ["Introdução" => "", "Primeiro Livro" => "Genesis"] + $association;
var_dump("array_unshift",
    $index,
    $association
);


//array_push — Adiciona um ou mais elementos no final de um array
array_push($index, "");
$association = $association + ["Quinto Livro" => ""];
var_dump("array_push",
    $index,
    $association
);

//array_shift — Retira o primeiro elemento de um array
array_shift($index);
array_shift($association);
var_dump("array_shift",
    $index,
    $association
);

//array_pop — Extrai um elemento do final do array
array_pop($index);
array_pop($association);
var_dump("array_pop",
    $index,
    $association
);

?>

<div style="background-color: gray;"><h2>ordenar</h2></div>
<?php

$index = array_reverse($index);
$association = array_reverse($association);
var_dump("array_reverse",
    $index,
    $association
);

asort($index);
asort($association);
var_dump("asort",
    $index,
    $association
);

ksort($index);
krsort($association);
var_dump("ksort",
    $index,
    $association
);

sort($index);
rsort($association);
var_dump("sort",
    $index,
    $association
);


?>

<div style="background-color: gray;"><h2>verificar</h2></div>
<?php

var_dump([
    array_keys($association),
    array_values($association),
]);



?>

<div style="background-color: gray;"><h2>Exemplo Real</h2></div>
<?php



?>

</body>
</html>