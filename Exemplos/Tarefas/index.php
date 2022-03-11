<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador de Tarefas</title>
    <style>
        body {
            font-family: Sans-serif;
            color: #333;
        }

        h1 {
            text-align: center;
        }

        .erro {
            color: #F44;
        }

        form {
            margin: 20px;
        }

        fieldset {
            border: 3px double #333;
            color: #000;
            margin: 10px 0 0 0;
        }

        label {
            display: block;
            margin: 10px 0 0 0;
        }

        input[type=text],
        textarea {
            width: 100%;
            border: 1px solid #333;
            padding: 3px;
            border-radius: 5px;
        }

        input[type=submit] {
            float: right;
            clear: both;
            margin: 10px;
        }

        table {
            width: 100%;
        }

        table th {
            background-color: #EEE;
            font-size: 18px;
        }

        table td {
            border-bottom: 1px solid #333;
            color: #000;
        }
    </style>
</head>
<body>

<form action="">
    <fieldset>
        <legend>Nova tarefa</legend>
        <label for="">
            Tarefa:
            <input type="text" name="nome" />
        </label>
        <input type="submit" value="Cadastrar" />
    </fieldset>
</form>

<?php
//  if (array_key_exists('nome', $_GET)) {
    if (isset($_GET['nome'])) {
       $_SESSION['lista_tarefas'][] =  $_GET['nome'];
    }

    $lista_tarefas = [];

    if (isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    }

?>

<table>
    <tr>
        <th>Tarefas</th>
    </tr>
    <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td><?= $tarefa; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>