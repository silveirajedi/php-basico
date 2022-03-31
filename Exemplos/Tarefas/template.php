<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador de Tarefas - 1.0</title>
    <link rel="stylesheet" href="style.css">

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
        <label for="">
            Descrição (Opcional):
            <textarea name="descricao" id="" cols="20" rows="5"></textarea>
        </label>
        <label for="">
            Prazo (Opcional):
            <input type="text" name="prazo" />
        </label>
        <fieldset>
            <legend>Prioridade</legend>
            <label for="">
                <input type="radio" name="prioridade" value="baixa" checked />Baixa

                <input type="radio" name="prioridade" value="media" />Média

                <input type="radio" name="prioridade" value="alta" />Alta
            </label>
        </fieldset>
        <label for="">
            Tarefa concluída:
            <input type="checkbox" name="concluida" value="sim">
        </label>
    </fieldset>
</form>

<table>
    <tr>
        <th>Tarefas</th>
        <th>Descição</th>
        <th>Prazo</th>
        <th>Prioridae</th>
        <th>Concluida</th>
    </tr>
    <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td><?= $tarefa['nome']; ?></td>
            <td><?= $tarefa['descricao'] ?></td>
            <td><?= $tarefa['prazo'] ?></td>
            <td><?= $tarefa['prioridade'] ?></td>
            <td><?= $tarefa['concluida']?> </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>