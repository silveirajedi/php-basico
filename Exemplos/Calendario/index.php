<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplos - Calendário</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php echo bemvindo(); ?>

<br><br>

<table style="">
    <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sáb</th>
    </tr>
    <?php echo calendario(); ?>
</table>

</body>
</html>

<?php

function linha($semana)
{
    $linha = '<tr>';

    $linha .= "<td style='color: red'>{$semana[0]}</td>";

    for ($i = 1; $i <= 6; $i++) {
        if (array_key_exists($i, $semana)) {
            $linha .= "<td>{$semana[$i]}</td>";
        } else {
            $linha .= "<td></td>";
        }
    }

    $linha .= '</tr>';

    return $linha;
}

function calendario()
{
    $calendario = '';
    $dia = 1;
    $semana = [];
    $hoje = date("d");

    while ($dia <= 31) {

        if ($dia == $hoje) {
            array_push($semana, "<b>{$dia}</b>");
        } else {
            array_push($semana, $dia);
        }

        if(count($semana) == 7) {
            $calendario .= linha($semana);
            $semana = [];
        }

        $dia++;

    }

    $calendario .= linha($semana);

    return $calendario;
}

function bemvindo()
{
    date_default_timezone_set("America/Sao_Paulo");
//    $datateste = new DateTime("08/02/2022 6:00");
//    $horateste = $datateste->format("h");
    $hora = date("H");
    $dataBR = date("H:i");
    $mensagem = null;

    if ($hora >= 0 && $hora < 12) {
        $mensagem = "Bom Dia! Seja bem vindo, agora são {$dataBR}";
    } elseif ($hora >= 12 && $hora < 18) {
        $mensagem = "Boa Tarde! Seja bem vindo, agora são {$dataBR}";
    } else {
        $mensagem = "Boa Noite! Seja bem vindo, agora são {$dataBR}";
    }

    return $mensagem;

}

?>