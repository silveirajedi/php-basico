<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>007 - Estruturas de Repetição</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>while | do while</h2></div>
<?php

$ref1 = 1;
$matriz1 = [];

while ($ref1 <=5) {
    $matriz1[] = $ref1;
    $ref1++;
}

var_dump($matriz1);

$ref2 = 5;
$matriz2 = [];

do {
    $matriz2[] = $ref2;
    $ref2--;
} while ($ref2 >= 1);

var_dump($matriz2);

?>

<div style="background-color: gray;"><h2>for</h2></div>
<?php

for ($i = 1; $i <= 10; $i++){
    echo "<p>{$i}</p>";
}


?>

<div style="background-color: gray;"><h2>break | continue</h2></div>
<?php

for ($c = 1; $c <= 10; $c++){
    if ($c % 2 == 1){
        continue;
    }

    if ($c > 7){
        break;
    }

    echo "<p>Pulou + 2 :: {$c}</p>";
}

?>

<div style="background-color: gray;"><h2>foreach</h2></div>
<?php

$matrizfinal = [];
for ($j = 0; $j <=3; $j++) {
    $matrizfinal[] = $j;
}

var_dump($matrizfinal);

foreach ($matrizfinal as $item) {
    var_dump($item);
}

foreach ($matrizfinal as $key => $item) {
    var_dump("{$key} é igual a {$item}");

}

?>

</body>
</html>