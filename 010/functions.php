<?php

function nomesObrigatorios ($nome1, $nome2, $nome3): ?array
{
    $body = [$nome1, $nome2, $nome3];
    return $body;
}

function nomesOpcionais ($nome1, $nome2 = "Teste", $nome3 = null): ?array
{
    $body = [$nome1, $nome2, $nome3];
    return $body;
}

function calcIMC(){
    global $weigth;
    global $heigth;
    return $weigth / ($heigth * $heigth);
}

function payTotal ($price)
{
    static $total;
    $total += $price;
    return "<p>O Total a pagar é de R$ " . number_format($total, 2, ",", ".") . "</p>";
}

function myTeam()
{
    $teamNames = func_get_args();
    $teamCount = func_num_args();
    return ["members" => $teamNames, "count" => $teamCount];
}