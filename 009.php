<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>009 - Require e Include de Arquivos</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Include</h2></div>
<?php

echo "A $color $fruit"; // A
// não achou o arquivo include antes

include __DIR__ . "/009/header.php";

echo "A $color $fruit"; // A green apple

$profile = new StdClass();
$profile->name = "Leandro";
$profile->company = "Fratelli";
$profile->email = "contato@fratelliti.com.br";
include __DIR__ . "/009/profile.php";

$profile = new StdClass();
$profile->name = "Carol";
$profile->company = "Fratelli";
$profile->email = "contato@fratelliti.com.br";
include __DIR__ . "/009/profile.php";

?>

<div style="background-color: gray;"><h2>Require</h2></div>
<?php

require __DIR__ . "/009/config.php";

echo "Website: " . WEBSITE . PHP_EOL;
echo "Empresa: " . NAME . PHP_EOL;
echo "Instagram " . INSTAGRAM . PHP_EOL;


?>

</body>
</html>