<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>011 - Constantes</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>constantes</h2></div>
<?php

define("COMPANY", "Fraelli TI"); // fica em runtime da execução (enquanto estou rodando a aplicação ele interpreta o código)
const AUTHOR = "Leandro"; // fica antes da execução do código

$active = true;
if($active){
    define("COMPANY_TYPE", "Funcionando");
} else {
    define("COMPANY_TYPE", "Desativada");
}

echo "<p>COMPANY_TYPE COMPANY AUTHOR</p>";
echo "<p>{COMPANY_TYPE} {COMPANY} {AUTHOR}</p>";
echo "<p>", COMPANY_TYPE, " ", COMPANY, " de ", AUTHOR, "</p>";
echo "<p>". COMPANY_TYPE. " ". COMPANY. " de ". AUTHOR. "</p>";

class Config
{
    const USER = "root";
    const HOST = "localhost";
}

echo "<p>", Config::HOST, "</p>";
echo "<p>", Config::USER, "</p>";

var_dump(get_defined_constants(true)["user"]);


?>

<div style="background-color: gray;"><h2>constantes predefinidas ou mágicas</h2></div>
<?php

var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);

function testFunction(){
    return __FUNCTION__;
}

var_dump(testFunction());


?>


</body>
</html>