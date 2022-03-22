<?php
//  if (array_key_exists('nome', $_GET)) {
    if (isset($_GET['nome'])) {
       $_SESSION['lista_tarefas'][] =  $_GET['nome'];
    }

    $lista_tarefas = [];

    if (isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    }

    include "template.php";