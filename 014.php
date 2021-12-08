<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>014 - Manipulação de Objetos</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>manipulação</h2></div>
<?php

$arrayProfile = [
    "name" => "Leandro",
    "company" => "Fratelli",
    "mail" => "contato@fratelliti.com.br"
];
var_dump($arrayProfile);

$objectProfile = (object)$arrayProfile;
var_dump($objectProfile);

//dirença de manipular array e manipular objeto
echo "<p>{$arrayProfile['name']} trabalha na {$arrayProfile['company']}</p>";
echo "<p>{$objectProfile->name} trabalha na {$objectProfile->company}</p>";

$ceo = $objectProfile;
unset($ceo->company);
var_dump($ceo);

$company = new StdClass();
$company->company = "Fratelli";
$company->ceo = "Leandro";
$company->manager = new StdClass();
$company->manager->name = "Caroline";
$company->manager->mail = "caroline@fratelliti.com.br";

var_dump($company);

?>

<div style="background-color: gray;"><h2>analises</h2></div>
<?php

$date = new DateTime();

var_dump([
    "class" => get_class($company),
    "methods" => get_class_methods($company),
    "vars" => get_object_vars($company),
    "parent" => get_parent_class($company)
]);

var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime")
]);

$exception = new PDOException();

var_dump([
    "class" => get_class($exception),
    "methods" => get_class_methods($exception),
    "vars" => get_object_vars($exception),
    "parent" => get_parent_class($exception),
    "subclass" => is_subclass_of($exception, "Exception")
]);


?>

</body>
</html>