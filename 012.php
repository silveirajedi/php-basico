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
<div style="background-color: gray;"><h2>strings e multibyte</h2></div>
<?php

$string = "Ele enxugará dos seus olhos toda lágrima";

var_dump([
    "1 - string" => $string,
    "2 - strlen" => strlen($string),
    "2 - mb_strlen" => mb_strlen($string),
    "3 - substr" => substr($string, 13),
    "3 - mb_substr" => mb_substr($string, 13),
    "strtoupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string)
]);

?>

<div style="background-color: gray;"><h2>convert case</h2></div>
<?php

$mbString = $string;

var_dump([
    "mb_stringtoupper" => mb_strtoupper($mbString),
    "mb_stringtolower" => mb_strtolower($mbString),
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE),
]);

?>

<div style="background-color: gray;"><h2>replace</h2></div>
<?php

$mbReplace = $mbString . " e não haverá mais morte, nem haverá mais tristeza, nem choro, nem dor.";

var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),
    "mb_substr" => mb_substr($mbReplace, 40 + 3, 15),
    "mb_strstr" => mb_strstr($mbReplace, ", ", true),
    "mb_strrchr" => mb_strrchr($mbReplace, ", ", true)
]);


?>

<div style="background-color: gray;"><h2>parse string</h2></div>
<?php

$endPoint = "name=Leandro&email=leandro@fratelliti.com.br";
mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    $parseEndPoint,
    (object)$parseEndPoint
]);


?>

</body>
</html>