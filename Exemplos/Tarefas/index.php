<?php

    session_start();

    // Pode usar isso tbm >>> if (array_key_exists('nome', $_GET)) {
    if (isset($_GET['nome']) && $_GET['nome'] != '') {
        $tarefa = [
            'nome' => $_GET['nome'],
            'descricao'=> '',
            'prazo' => '',
            'prioridade' => $_GET['prioridade'],
            'concluida' => ''
        ];

        if (isset($_GET['descricao'])) {
            $tarefa['descricao'] = $_GET['descricao'];
        }

        if (isset($_GET['prazo'])) {
            $tarefa['prazo'] = $_GET['prazo'];
        }

        if (isset($_GET['concluida'])) {
            $tarefa['concluida'] = $_GET['concluida'];
        }

       $_SESSION['lista_tarefas'][] =  $tarefa;
    }

    $lista_tarefas = [];

    // Pode user isso tbm >>> if (array_key_exists('lista_tarefas', $_SESSION)
    if (isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    }

    include "template.php";