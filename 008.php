<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>008 - Closures e Generators</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Closure - Função anônima</h2></div>
<?php

$myAge = function ($year) {
    $age = date("Y") - $year;
    return "<p>Você tem {$age} anos</p>";
};

var_dump($myAge);
echo $myAge("1985");

echo "<hr>";

$priceBrl = function ($price) {
    return "R$ " . number_format($price, 2, ",", ".");
};

echo "<p>O valor do produto custa {$priceBrl(12.246)}</p>";

echo "<hr>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cardAdd = function ($item, $qtde, $price) use (&$myCart){
    $myCart[$item] = $qtde * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd ("teste", 1, 499);
$cardAdd ("teste2", 1, 499);

var_dump($myCart);

var_dump($cardAdd);

?>

<div style="background-color: gray;"><h2>Generators (yield)</h2></div>
<?php

//sem generators (possivelmente trava o server)
function showDates($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++){
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;

}

echo "<div style='text-align: center'>";
foreach (showDates(50) as $date) {
    echo "<small>{$date}</small>" .PHP_EOL;
}
echo "</div>";

//com o generator (não trava)
$iterator = 500;
function generetorDate($days)
{
    for ($day = 1; $day < $days; $day++){
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generetorDate($iterator) as $date) {
    echo "<small>{$date}</small>" .PHP_EOL;
}
echo "</div>";



?>

</body>
</html>