<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>015 - Manipulação de Datas</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Função Date</h2></div>
<?php

var_dump([
    date_default_timezone_get(),
    date(DATE_W3C),
    date("d/m/Y H:i:s")
]);

define("DATE_BR", "d/m/Y H:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE);

var_dump([
        date_default_timezone_get(),
        date(DATE_BR)
]);

var_dump(getdate());

echo "<p>Hoje é dia " . getdate()["mday"] . " de " . getdate()["month"] . " de " . getdate()["year"] . "</p>";

?>

<div style="background-color: gray;"><h2>String to Date</h2></div>
<?php

var_dump([
    "strtotime NOW" => strtotime("now"),
    "time" => time(),
    "strtotime +10days" => strtotime("+10days"),
    "date Date_BR" => date(DATE_BR),
    "date +10days" => date(DATE_BR, strtotime("+10days")),
    "date -10days" => date(DATE_BR, strtotime("-10days")),
    "date +1year" => date(DATE_BR, strtotime("+1year")),
]);

$format = "%d/%m/%Y %Hh%M minutos";
echo "<p>A data de hoje é ", strftime($format),"</p>";
echo strftime("<p>Hoje é dia %d do %m de %Y</p>");

?>

<div style="background-color: gray;"><h2>DateTime Class</h2></div>
<?php

$dateNow = new DateTime();
$dateBirth = new DateTime("1986-03-21");
$dateStatic = DateTime::createFromFormat(DATE_BR, "10/03/2020 00:00:00");

var_dump(
        $dateNow,
        $dateNow->format(DATE_BR),
        $dateBirth,
        $dateBirth->format("d"),
        $dateStatic
);

echo "<p>Hoje é dia {$dateNow->format("d")}, do {$dateNow->format("m")}, do ano de {$dateNow->format("Y")}</p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    $newTimeZone,
    $newDateTime,
    $dateNow
]);

?>

<div style="background-color: gray;"><h2>DateInterval Class</h2></div>
<?php

$dateInterval = new DateInterval("P10Y2MT10M");
//P10Y2MT10M
//P = period
//10Y = 10 years
//2M = 2 months
//T = time
//10M = 10 minutos
var_dump($dateInterval);

$dateTime = new DateTime("now");
$dateTime->sub($dateInterval);
var_dump($dateTime);

$birth = new DateTime(date("Y") . "-12-15");
$today = new DateTime("now");

$diff = $today->diff($birth);

var_dump($diff);

if ($diff->invert) {
    echo "<p> Já se passaram {$diff->days} desde seu aniversário";
} else {
    echo "<p>Faltam {$diff->days} dias para seu aniversário</p>";
}

$dateResources = new DateTime("now");
var_dump([
        $dateResources->format(DATE_BR),
        $dateResources->add(DateInterval::createFromDateString("10days"))->format(DATE_BR),
        $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR)
]);


?>

<div style="background-color: gray;"><h2>DatePeriod Class</h2></div>
<?php

$start = new DateTime("now");
$interval = new DateInterval("P1M");
$end = new DateTime ("2022-12-01");

$period = new DatePeriod($start, $interval, $end);

var_dump([
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR)
], $period, get_class_methods($period));

echo "<h1>Sua Assinatura:</h1>";
foreach ($period as $recurrences) {
    echo "<p>Próximo Vencimento {$recurrences->format(DATE_BR)}</p>";
}

?>

</body>
</html>