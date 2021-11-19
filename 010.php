<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>010 - Funções</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>Exemplos</h2></div>
<?php

require __DIR__ . "/010/functions.php";

var_dump(nomesObrigatorios("Leandro", "Caroline", "Camila"));
var_dump(nomesOpcionais("Leandro"));

?>

<div style="background-color: gray;"><h2>Acesso Global</h2></div>
<?php

$weigth = 106;
$heigth = 1.82;
echo calcIMC();

?>

<div style="background-color: gray;"><h2>Argumentos estáticos</h2></div>
<?php

$pay = payTotal(200);
$pay = payTotal(500);
$pay = payTotal(100);

echo $pay;


?>

<div style="background-color: gray;"><h2>Argumentos dinâmicos</h2></div>
<?php

var_dump(myTeam("Leandro", "Carol", "José"));

?>


</body>
</html>