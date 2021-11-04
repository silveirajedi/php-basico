<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>006  - Estrutura de Controle</title>
</head>
<body style="font-size: 1.1em">
<div style="background-color: gray;"><h2>if</h2></div>
<?php

$idade = 24;

if ($idade < 18){
    var_dump("menor de idade");
} elseif ($idade >= 18 && $idade <=23) {
    var_dump("Adolescente");
} else {
    var_dump("Adulto");
}
?>

<div style="background-color: gray;"><h2>isset | empty</h2></div>
<?php

$variavel1 = "";

if (!isset($variavel1)){
    var_dump("Não foi inicializada");
} else {
    var_dump("Foi inicializada");
}

$piscina = "água";
if (empty($piscina)) {
    var_dump("Está vazio");
} else {
    var_dump("Não Está Vazio");
}

?>

<div style="background-color: gray;"><h2>switch</h2></div>
<?php
$payment = "completed";
switch ($payment) {
    case "billet_printed":
        var_dump("boleto impresso");
        break;
    case "canceled":
        var_dump("pagamento cancelado");
        break;
    case "past_due":
    case "pending":
        var_dump("aguardando pagamento");
        break;
    case "aproved":
    case "completed":
        var_dump("pagamento aprovado");
        break;
    default:
        var_dump("erro ao processar pagamento");
        break;
}
?>

</body>
</html>