<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>019 - Interagindo com URL</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Argumentos</h2></div>
<?php

echo "<h1><a href='019.php'>Clear</a></h1>";
echo "<p><a href='019.php?arg1=true&arg2=true'>Argumentos</a></p>";

$data = [
    "name" => "Leandro",
    "company" => "Fratelli",
    "mail" => "contato@fratelliti.com.br"
];

$arguments = http_build_query($data);
echo "<p><a href='019.php?{$arguments}'>Args By Array</a> </p>";

var_dump($_GET);

$object = (object)$data;

var_dump(
    $object,
    http_build_query($object)
);

?>

<div style="background-color: gray;"><h2>Segurança</h2></div>
<?php

$dataFilter = http_build_query([
    "name" => "Leandro",
    "company" => "Fratelli",
    "mail" => "contato@fratelliti.com.br",
    "site" => "https://fratelliti.com.br",
    "script" => "<script>alert('Esse é um JavaScript')</script>"
]);

echo "<p><a href='019.php?{$dataFilter}'>Data Filter</a></p>";

$dataUrl = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($dataUrl) {
    if (in_array("", $dataUrl)) {
        echo "<p style='color: orange''>Faltam dados</p>";
    } elseif (empty($dataUrl["mail"])) {
        echo "<p style='color: orange''>Faltam E-mail</p>";
    } elseif (!filter_var($dataUrl["mail"], FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: orange''> E-mail Inválido</p>";
    } else {
        echo "<p style='color: green''>Tudo Certo</p>";
    }
} else {
    var_dump(false);
}

var_dump($dataUrl);

$dataFilter = http_build_query([
    "name" => "Leandro",
    "company" => "Fratelli",
    "mail" => "contato@fratelliti.com.br",
    "site" => "https://www.fratelliti.com.br",
    "script" => "<script>alert('Esse é um JavaScript')</script>"
]);

parse_str($dataFilter, $arrDataFilter);
var_dump($arrDataFilter);

$dataPreFilter = [
    "name" => FILTER_UNSAFE_RAW,
    "company" => FILTER_UNSAFE_RAW,
    "mail" => FILTER_VALIDATE_EMAIL,
    "site" => FILTER_VALIDATE_URL,
    "script" => FILTER_UNSAFE_RAW
];

var_dump(filter_var_array($arrDataFilter, $dataPreFilter));

?>


</body>
</html>